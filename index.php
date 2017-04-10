<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>PaginationY - 示例演示_星空幻颖</title>
    <style type="text/css">
        .pagination{ overflow: hidden; margin-top:20px;}
        .pagination a{display:block; height:30px; min-width:30px; text-align:center; font-size:14px; border:1px solid #d6d6d6; float:left; margin-left:10px; padding:3px 5px; line-height:30px; text-decoration:none; color:#666;}
        .pagination a:hover,
        .pagination a.active{background:#FF4500; border-color:#FF4500; color:#FFF;}
    </style>
</head>

<body>

<?php
require_once('Pagination.php');

$param = array(
    'totalRows'=>'300',
    'pageSize'=>'20',
    'offset'=>'5',
    'pageParam'=>'page',
    'activeClassName'=>'active',
    'indexPageLabel'=>'首页',
    'prevPageLabel'=>'上一页',
    'nextPageLabel'=>'下一页',
    'endPageLabel'=>'尾页',
    'class'=>'pagination'
);

$page1 = new Pagination($param);
$page2 = new Pagination($param);
$page3 = new Pagination($param);
$page4 = new Pagination($param);
$page5 = new Pagination($param);

echo '总记录数：'.$page1->getTotalRows();
echo '<hr />';
echo '每页记录'.$page1->getPageSize().'条<hr/ >';
echo '当前页码：'.$page1->getCurrentPage().'<hr />';
echo '共计'.$page1->getPageAmount().'页<hr />';
echo $page1->pagination();
echo $page2->pagination('1'); //默认为1，所以和不填写效果一样
echo $page3->pagination('2');
echo $page4->pagination('3');
echo $page5->pagination('4');
?>
</body>
</html>