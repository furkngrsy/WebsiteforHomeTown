<?php
    if(isset($_POST['submit'])){
        $un=$_POST['username'];
        $pw=$_POST['password'];
        if($un=='b181210077@sakarya.edu.tr' && $pw=='123'){
            header("location:hosgeldin.html");
            exit();
        }
        else{
            header("Refresh: 2; url=login.html");
            die("Yanlış Kullanıcı Adı/Parola");
        }
    }
?>