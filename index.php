<?php

require_once 'page.php';
header('content-type:text/html;charset=utf-8');
$obj = new Pagination(['totalRows'=>'200','class'=>'pagination box']);
echo '<style type="text/css">.active{color:red}</style>';

echo $obj->pagination();

