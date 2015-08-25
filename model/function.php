<?php

 function danhsach(){
     global $connect;
     $query = "select * from quanao order by id desc";
     $result = mysqli_query($connect, $query);
     $data = array();
     while ($row = mysqli_fetch_assoc($result)){
         $data[]= $row;
     }
     return $data;
 }
 function them($ten, $mota, $gia){
     global $connect;
     $query = "insert into quanao(ten,mota,gia) values('$ten','$mota','$gia')";
     mysqli_query($connect, $query);
 }
 function getsanpham($id){
     global $connect;
     $query = "select * from quanao where id='$id'";
     $result= mysqli_query($connect, $query);
     $row = mysqli_fetch_assoc($result);
     return $row;
 }
 
 function sua($ten, $mota, $gia, $id){
     global $connect;
     $query = "update quanao set ten='$ten', mota='$mota',gia='$gia' where id='$id'";
     mysqli_query($connect, $query);
     
 }
 
 function xoa($id){
     global $connect;
     $query = "delete from quanao where id='$id'";
     mysqli_query($connect, $query);
 }
