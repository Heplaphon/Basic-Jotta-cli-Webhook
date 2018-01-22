<?php
$file = 'data.json';
//$data = $_GET;
print_r($_GET);
$data = file_get_contents('php://input');
$json = file_get_contents($file);
//$data = json_decode($json, true);
//array_push($data, $_GET);
//$data = $_POST;

$encoded_data = json_encode($data);
if(file_put_contents($file, $data, LOCK_EX)){
        echo "success";
}else{
    echo "false";
}
?>
