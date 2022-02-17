<?php
    function pdo_get_connection(){
        try {
            $conn = new PDO("mysql:host=127.0.0.1;dbname=xxshop;charset=utf8","root","");
            $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            return $conn;
            //echo "ket noi ok";
        }catch(PDOException $e){
            echo "Lỗi kết nối :". $e->getMessage();
        }
    }

    function pdo_execute($sql){
        $sql_args = array_slice(func_get_args(), 1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
        }
        catch(PDOException $e){
            throw $e;
        }
        finally{
            unset($conn);
        }
    }
 //truy van nhieu du lieu
    function pdo_query($sql){
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetchAll();
            return $rows;
        }catch(PDOException $e){
            throw $e;;
        }finally{
            unset($conn);
        }
    }
 //truy van 1 du lieu  
    function pdo_query_one($sql){
        $sql_args = array_slice(func_get_args(),1);
        try{
            $conn = pdo_get_connection();
            $stmt = $conn->prepare($sql);
            $stmt->execute($sql_args);
            $rows = $stmt->fetch();
            return $rows;
        }catch(PDOException $e){
            throw $e;;
        }finally{
            unset($conn);
        }
    }



?>