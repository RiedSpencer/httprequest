<?php
if(isset($_POST)){
    foreach($_POST as $k=>$v)
        $arr[$k] = $v;
    echo json_encode($arr);
}
