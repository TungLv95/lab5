<?php
    if (isset($_POST['submit'])){
        $ten= $_POST['ten'];
        $gia= $_POST['gia'];
        $mota= $_POST['mota'];
        
        if (isset($ten) && isset($mota) && isset($gia)){
            them($ten, $mota, $gia);
            header('location:index.php');
        }
    }
    include 'view/them.php';
    ?>

