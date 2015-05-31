<?php
    $login_cookie = $_COOKIE['login'];
        if(isset($login_cookie)){
            echo"<script>window.location='restrito.php';</script>";
        }else{
            echo "<script>window.location='login.html';alert('Faça login!');</script>";
        }
?>