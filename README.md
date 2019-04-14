# 博露后台接口文档  

## PUT DELETE请求  

> 使用POST 用 _method 规定请求方式
> 分别为 `_method=put` `_method=delete`

### 上传文章  

* url : `/post`  

* 访问方式 ：PUT  

> 请求参数说明：  

|参数名|参数类型|参数解释|示例|
|:----:|:----:|:----:|:----:|  
|title|String|文章标题 0-100个字符|简单标题|
|description|String|文章摘要 0-100个字符|简单摘要|
|content|String|文章内容|简单内容|
|type|Internet|限定显示的地方|1|
|priority|Internet|优先级|5|
|img|String|图片base64||  

> 返回示例：  
>
> ```json  
> {
>     "code":0,
>     "status":"成功",
>     "data":63
> }
> ```  
>
> 返回参数说明: 无

### 查询文章列表  

* url ： `/post/{type}/{page}`  

> 描述 查询 type 为 {type} 第{page}页 的文章 每页10篇文章  

* 访问方式 : GET  

> 请求参数说明:  

|参数名|参数类型|参数解释|示例|
|:----:|:----:|:----:|:----:|  
|type|Internet|文章类型|1|
|page|Internet|分页页码 从1开始|1|  

>
> 返回示例：  
>
> ```json  
> {
>     "code":0,
>     "status":"成功",
>     "data":[
>         {
>             "id":7,
>             "img":"http://bolu.myweb.com/img/upload/1 555226618541.jpg",
>             "title":"标题测试",
>             "description":"摘要测试",
>             "content":"内容测试",
>             "type":1,
>             "priority":20,
>             "created_at":"2019-04-14 07:23:39",
>             "updated_at":"2019-04-14 07:23:39"
>         },
>         {
>             "id":6,
>             "img":"http://bolu.myweb.com/img/upload/1 555074723736.jpg",
>             "title":"标题测试",
>             "description":"摘要测试",
>             "content":"内容测试 优先级",
>             "type":1,
>             "priority":22,
>             "created_at":"2019-04-12 13:12:03",
>             "updated_at":"2019-04-12 13:12:03"
>         },
>         {
>             "id":5,
>             "img":"http://bolu.myweb.com/img/upload/1 555074212404.jpg",
>             "title":"标题测试",
>             "description":"摘要测试",
>             "content":"内容测试",
>             "type":1,
>             "priority":20,
>             "created_at":"2019-04-12 13:03:32",
>             "updated_at":"2019-04-12 13:03:32"
>         }
>     ]
> }
> ```
>
> 返回参数说明:  

|参数名|参数类型|参数解释|
|:----:|:----:|:----:|  
|id|Internet|文章标识|
|img|String|图片链接|
|title|String|文章标题|
|description|String|文章摘要|
|content|String|文章内容|
|type|Internet|限定显示的地方|
|priority|Internet|优先级|
|created_at|datetime|发布时间|
|updated_at|datetime|更新时间|  

### 更新文章  

* url : `/post/{id}`  

* 访问方式：PUT  

> 请求参数说明：  

|参数名|参数类型|参数解释|示例|
|:----:|:----:|:----:|:----:|
|id|Internet|作为url参数 目标文章id|4|
|title|String|文章标题 0-100个字符|简单标题|
|description|String|文章摘要 0-100个字符|简单摘要|
|content|String|文章内容|简单内容|
|type|Internet|限定显示的地方|1|
|priority|Internet|优先级|5|
|img|String|图片base64||  

> 返回示例：  
>
> ```json  
> {
>     "code":0,
>     "status":"成功",
>     "data":63
> }
> ```
>
> 返回参数说明: 无  

### 删除文章  

* url : `/post/{id}`  

* 访问方式：DELETE  

> 请求参数说明： 
 
|参数名|参数类型|参数解释|示例|
|:----:|:----:|:----:|:----:|
|id|Internet|作为url参数 目标文章id|4|  

>
> 返回示例：  
>
> ```json  
> {
>     "code":0,
>     "status":"成功",
>     "data":97
> }
> ```
>
> 返回参数说明: 无  
