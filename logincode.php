<?php
session_start();
include('admin/config/dbcon.php');

if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con ,$_POST['email']);
    $password = mysqli_real_escape_string($con ,$_POST['password']);

    $login_query = "SELECT * FROM users WHERE email='$email' AND password='$password' LIMIT 1    ";
    $login_query_run = mysqli_query($con , $login_query);

    if(mysqli_num_rows($login_query_run) > 0)
    {
foreach($login_query_run as $data){
    $role_as = $data['role_as'];
    $user_id = $data['id'];
    $user_name = $data['fname'];
    $user_email = $data['email'];
    $user_password = $data['password'];
    
}

        
        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = $role_as; // 1=admin , 0=normal user
        $_SESSION['auth_username'] = $user_name;
        $_SESSION['auth_user'] = [
            'username ' => 20,
        ];

        if($_SESSION['auth_role'] == '1') // admin
        { 
            $_SESSION['message'] = "Welcome to Admin Panel";
            header('Location: admin/index.php');
            exit(0);
         }
        
         elseif($_SESSION['auth_role'] == '0') // noemal user
        {
            $_SESSION['message'] = "You are logged in";
            header('Location: index.php');
            exit(0);
        }
    }
    else
    {
        $_SESSION['message'] = "Invalid Email or Password";
        header('Location: login.php');
        exit(0);
    }
}
else
{
    $_SESSION['message'] = "You are not allowed to acces this file";
header('Location: login.php');
exit(0);
}

?>