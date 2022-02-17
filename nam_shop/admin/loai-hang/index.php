<?php
require_once"../../dao/pdo.php";
require_once"../../dao/loai.php";
require_once"../../global.php";
extract($_REQUEST);
if (exist_param("btn_list")) { 
    $items=loai_selectall(); 
    $VIEW_NAME = "list.php";
}
elseif(exist_param("btn_insert")){
//lay du lieu tu form
$ten_loai = $_POST['ten_loai']; 
//insert database                                                                   
loai_insert($ten_loai);
//show du lieu 
$items=loai_selectall();
$VIEW_NAME="list.php";
}
elseif(exist_param("btn_edit")){
    //lay du lieu tu form
$ma_loai=$_REQUEST['ma_loai'];
$loai_info=loai_getinfo($ma_loai);
extract($loai_info);
//show du lieu
$items=loai_selectall();
$VIEW_NAME="edit.php";
}
elseif(exist_param("btn_delete")){
    //lay du lieu tu form
    $ma_loai=$_REQUEST['ma_loai'];
    loai_delete($ma_loai);
    //hien thi lai ds
    $items=loai_selectall();
    $VIEW_NAME="list.php";
}
elseif(exist_param("btn_update")){
    $ten_loai= $_POST['ten_loai'];
    $ma_loai=$_POST['ma_loai'];
    //var_dump($ten_loai,$ma_loai);die;
    
    loai_update($ten_loai,$ma_loai);
    //hien thi lai danh sach
    $items=loai_selectall();
    $VIEW_NAME="list.php";
}
else{
    $VIEW_NAME = "add.php";
}
require_once "../layout.php";
?>
