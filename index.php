<?php
if(isset($_POST['type']) && isset($_POST['url'])){
    $type=$_POST['type'];
    $url = $_POST['url'];
    if($url){
//                判断url是否为空
//                判断是get还是post提交
        $ch = curl_init();
//                开始进行参数配置
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
        if($type == 'post'){
            curl_setopt($ch,CURLOPT_POST,true);
            if(isset($_POST['params']))
                $params = $_POST['params'];
            curl_setopt($ch,CURLOPT_POSTFIELDS,$params);
        }
        $res = curl_exec($ch);
        echo json_encode($res);
    }
}
