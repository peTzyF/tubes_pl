<?php
include ("koneksi.php");
include ("fungsi.php");

if($_SERVER['REQUEST_METHOD']=="POST")
{
    $nama = $_POST['Nama'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    if(!empty($nama)&& !empty($password) && !empty($email)){
        //simpan ke database
        $query = "INSERT INTO admin (Nama, Email, Password) VALUES ('$nama', '$email', '$password')";
        mysqli_query($conf, $query);
        header ("Location: index login.php");
        die;
    }else {
        echo "isi data yang bener";
    }
}
?>
<?php
    echo"<div class='wrapper'>
            <div class='card'>
                <form action='' method='POST' class='d-flex flex-column align-items-center'>
                <div class='h3 text-center text-white mb-4 mt-4 fw-bold'>SIGN UP</div>
                <div class='d-flex input-field my-3 mb-3 w-100'><span class='far fa-user p-2'></span> <input type='text' name='Nama' id='Nama'  placeholder='Name' required class='form-control' /></div>
                <div class='d-flex input-field my-3 mb-4 w-100'><span class='far fa-user p-2'></span> <input type='text' name='Email' id='Email' placeholder='Email' required class='form-control' /></div>
                <div class='d-flex input-field mb-2 w-100'>
                    <span class='fas fa-lock p-2'></span> <input type='password' name='Password' id='Password' placeholder='Password' required class='form-control'  /> <button class='btn' onclick='showPassword()'><span class='fas fa-eye-slash'></span></button>
                </div>
                <a class='btn btn-primary fw-bold mb-3 mt-3' name='signup' id='signup' role='button'>Sign Up</a>
                <div class='mb-3'><span class='text-light-white'>Already have an account?</span> <a href='index login.php'>Login</a></div>
                </form>
            </div>
        </div>";

/*
    if (isset($_POST["signup"])){
        if(registrasi($_POST)!==0){
            echo "<script> alert('Registrasi berhasil');
            document.location.href = 'index login.php';
            </script>";
        } else {
            echo "<script> alert('Registrasi gagal');
            document.location.href = 'index login.php';
            </script>";
        }
    }
    */
?>