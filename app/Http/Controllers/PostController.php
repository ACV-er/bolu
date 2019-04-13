<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function getPostList(Request $request) {
        $offset = $request->route('page');

        Post::query()->where('type', $request->route('type'))->orderBy('updated_at', 'desc')
            ->offset($offset)->limit(10)
            ->get()->toArray();
    }

    private function handlData(Request $request) {
        $mod = array(
            'title' => "/[\s\S]{0,300}/",
            'description' => "/[\s\S]{0,300}/",
            'content' => "/[\s\S]+/",
            'type' => "/[\d]{1,2}/",
            'priority' => "/[\d]+/",
        );
        if(!$request->has(array_keys($mod))) {
            return msg(3, $request);
        }

        $data = $request->only(array_keys($mod));
        if (!check($mod, $data)) { // 检查数据是否符合 $mod 中对应的正则
            return msg(3, '数据格式错误' . __LINE__);
        }

        if(strlen($request->input('img')) > 10) {
            $file_path = "/img/upload/".time().rand(0,1000).".jpg";
            $img_base64 = $request->input('img');
            $base64_body = substr(strstr($img_base64,','),1);
            $img = base64_decode($base64_body);
            file_put_contents(public_path().$file_path,$img);

            $data['img'] = env('APP_URL').$file_path;
        }

        return $data;
    }

    public function submitPost(Request $request) {
        $data = $this->handlData($request);

        if(is_string($data)) {
            return $data;
        }

        $post = new Post($data);
        $result = $post->save();

        if(!$result) {
            return msg(4, __LINE__);
        }

        return msg(0, __LINE__);
    }

    public function updatePost(Request $request) {
        $data = $this->handlData($request);
        if(is_string($data)) {
            return $data;
        }

        $post = Post::query()->find($request->route('id'));
        $img_name = basename($post->img);
        $result = $post->update($data);

        if(in_array('img', $data)) {
            unlink( public_path()."/img/upload/".$img_name );
        }
        if(!$result) {
            return msg(4, __LINE__);
        }
        return msg(0, __LINE__);
    }

    public function delPost(Request $request) {
        $post = Post::query()->find($request->route('id'));
        $img_name = basename($post->img);
        unlink( public_path()."/img/upload/".$img_name );

        $result = Post::destroy($request->route('id'));

        if(!$result) {
            return msg(4, __LINE__);
        }
        return msg(0, __LINE__);
    }
}
