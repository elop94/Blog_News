<?php
    $entrar = $_POST['entrar'];
    $login = $_POST['login'];
    $senha = md5($_POST['senha']);
    $connect = mysql_connect('localhost','root','24');
    $db = mysql_select_db('res');
        if (isset($entrar)) {
                     
            $verifica = mysql_query("SELECT * FROM res WHERE login = '$login' AND senha = '$senha'") or die
            ("<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>");
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                    die();
                }else{
                    setcookie("login",$login);
                    header("Location:restrito.php");
                }
        }
?>