<?php
$id = $_GET['id'];
$sp = getsanpham($id);
    if (isset($_POST['submit'])){
        $ten= $_POST['ten'];
        $gia= $_POST['gia'];
        $mota= $_POST['mota'];
        
        if (isset($ten) && isset($mota) && isset($gia)){
            sua($ten, $mota, $gia, $id);
            header('location:index.php');
        }
    }
    include 'view/sua.php';
    ?>

