<?php
    function insert_danhmuc($ten_danhmuc){
        $sql = "INSERT INTO `danhmuc` ( `ten_danhmuc`) VALUES ('$ten_danhmuc')";
        pdo_execute($sql);
    }    
    
    function loadall_danhmuc(){
        $sql = "SELECT * FROM `danhmuc`";
        $listcate = pdo_query($sql);
        return $listcate;
    }

    function load_name_danhmuc($id){
        if($id>0){
            $sql = "SELECT * FROM `danhmuc` WHERE `id_danhmuc` = {$id}";
            $cate = pdo_query_one($sql);
            extract($cate);
            return $name;
        }else{
            return "";
        }
    }
?>


?>