# PaginationY

PaginationY是一个可以灵活定制的PHP分页类。具有以下优点：

 1. 可以灵活的自定义配置各项参数
 2. 灵活的配置输出的分页链接类别
 3. 灵活的定制分页按钮的样式
 4. 可以定制URL中获取分页值的参数名称
 5. 可以适配原始链接带参数或者不带参数
 6. 自由定制链接按钮显示文字。如：上一页、下一页
 7. 可以自由定制分页链接div的类名

 ## 使用方法

 引入该`Pagination.php`

```php
require_once('Pagination.php');
```



实例化类，传入参数

```php
$param = array('totalRows'=>'200');
$page1 = new Pagination($param);
```



创建连接，并且输出

```php
echo $page1->pagination();
```



## 参数

参数在类初始化的时候传入，类型必须为数组。例如：

```php
$page1 = new Pagination(array(
    'totalRows'=>'200',
    'pageSize'=>'20',
    'offset'=>'5',
    'pageParam'=>'page',
    'activeClassName'=>'active',
    'indexPageLabel'=>'首页',
    'prevPageLabel'=>'上一页',
    'nextPageLabel'=>'下一页',
    'endPageLabel'=>'尾页',
    'class'=>'page'
));
```



###  totalRows

其中，`totalRows`为必填参数，含义为数据库检索出来的所有数据总数。



### pageSize

选填参数，每一页显示的记录数量。默认为20



### offset

选填参数，页码的左右偏移量。假设当前页码为5，则在5的左右各显示几个数字链接，默认为4个，则效果为1,2,3,4,5,6,7,8,9



### pageParam

选填参数，URL中当前页码的参数名称。通过$_GET['page']获取当前页码时候的名字，默认为page。



### activeClassName

选填参数，当前页码高亮标签的类名，默认是`active`



### indexPageLabel

选填参数，首页链接按钮显示名称。默认为首页



### prevPageLabel

选填参数，上一页链接按钮显示名称。默认为上一页



### nextPageLabel

选填参数，下一页链接按钮显示名称。默认为下一页



### endPageLabel

选填参数，尾页链接按钮显示名称。默认为尾页



### class

选填参数，所有分页链接按钮最外层div的类名。默认为`pagination`