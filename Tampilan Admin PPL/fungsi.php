<?php
include ("koneksi.php");
session_start();
function check_login($conf){
    if( isset($_SESSION['Email'])){
        $cekEmail = $_SESSION['Email'];
        $query = "SELECT FROM admin WHERE Email = '$cekEmail' limit 1";
        
        $result = mysqli_query($conf, $query);
        if($result && mysqli_num_rows($result)>0){
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    //kembali ke login
    header("Location: index login.php");
    die;
}



?>