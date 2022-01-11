<html>
<head>
    <script type="text/javascript">
        function preventBack(){window.history.forward()};
        setTimeout("preventBack()",0);
        window.onunload=function(){null}
    </script>
</head>
</html>
<?php

include ("koneksi.php");
include ("fungsi.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    if(!empty($password) && !empty($email)){
        //baca ke database
        $query = "SELECT * FROM admin WHERE (Email = '$email' or Nama = '$email') AND Password = '$password'";
        $result = mysqli_query($conf, $query);
        if($result){
            if($result && mysqli_num_rows($result)>0){
                $user_data = mysqli_fetch_assoc($result);
                if($user_data['Password'] === $password){
                    header ("Location: index wisata.php");
                    die;
                }
            }
        }
        
    }else {
        echo "isi data yang bener";
    }
}
?>
<?php
echo "<div class='wrapper'>
        <div class='card'>
            <form action='' method='POST' class='d-flex flex-column align-items-center'>
            <div class='h3 text-center text-white mb-4 fw-bold mt-4'>LOGIN</div>
            <div class='d-flex input-field my-3 mb-4 w-100'><span class='far fa-user p-2'></span> <input type='text' placeholder='Username or Email' required class='form-control' id='Email' name='Email' /></div>
            <div class='d-flex input-field mb-4 w-100'>
                <span class='fas fa-lock p-2'></span> <input type='Password' placeholder='Password' required class='form-control' id='Password' name='Password' /> <button class='btn' type'submit' name='login' onclick='showPassword()'><span class='fas fa-eye-slash'></span></button>
            </div>
            <div class='d-sm-flex justify-content-sm-between mb-4'>
                <div class='d-flex align-items-center'>
                <label class='option'> <span class='text-light-white mr-5'>Remember Me</span> <input type='checkbox' checked /> <span class='checkmark'></span> </label>
                </div>
                <div class='ms-5'><a href='index forgot.php'>Forgot password?</a></div>
            </div>
            <a class='btn btn-primary fw-bold mb-3' role='button' type='submit' value='login'>Login</a>
            <div class='mb-3'><span class='text-light-white'>Don't have an account?</span> <a href='index SignUp.php'>Sign Up</a></div>
            </form>
        </div>
        </div>";

        
?>