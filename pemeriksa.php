<?php
session_start();
include 'config.php';

$username = $_POST["username"];
$password = $_POST["pwd"];
$action = 'true';

$result = $mysqli->query('SELECT * from login order by id asc');

if($result){
    while($menu = $result ->fetch_object()){
        if($menu->username === $username && $menu ->password === $password){
            $_SESSION ['username'] = $username;
            $_SESSION ['id'] = $menu->id;
            $_SESSION['login'] = true ;
            $_SESSION['alamat'] = $menu->alamat ;
            $_SESSION['no_telp'] = $menu->no_telp ;
            $_SESSION['email'] = $menu->email ;
            header("location:homewiki.php");
        }else{
            if($action === 'true'){
                redirect();
            }$action = 'false';
        }
    }
}

function redirect(){
    echo '<h1>Invalid Login....</h1>';
    echo ("Refresh : 3; url=login.php");
}
?>