<?php
    require_once "loai.php";
    require_once "pdo.php";
//truy van ds loai da nhap moi len truoc
    function loai_selectall(){
        $sql = "select * from loai";
        return pdo_query($sql);
        
    }
    //them moi loai
    function loai_insert($ten_loai){
        $sql = " insert into loai(ten_loai) values(?)";
        pdo_execute($sql,$ten_loai);
    }
    //xoa
    function loai_delete($ma_loai){
        $sql = " delete from loai where ma_loai=?";
        pdo_execute($sql,$ma_loai);
    }
    // lay thong tin 1 ma loai
    function loai_getinfo($ma_loai){
        $sql = "select * from loai where ma_loai=?";
        return pdo_query_one($sql,$ma_loai);
    }
    //cap nhap du lieu
    function loai_update($ma_loai,$ten_loai){
        $sql = "update loai set ten_loai=? where ma_loai=92";
        //echo $sql;
        pdo_execute($sql,$ma_loai,$ten_loai);
    }
?>