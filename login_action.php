<?php  
session_start();

include('admin/config/dbconf.php');


if(isset($_POST['login_btn']))
{
    $email = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    $login_query = "SELECT * FROM admin_users WHERE email='$email' AND password='$password' LIMIT 1";
    $login_query_run = mysqli_query($con, $login_query);
    if(mysqli_num_rows($login_query_run) > 0)
    {
        foreach($login_query_run as $data){
            $user_id = $data['id'];
            $user_name = $data['fname'].' '.$data['lname'];
            $user_email = $data['email'];
            $role_as = $data['role_as'];
        }
        $_SESSION['auth'] = true;
        $_SESSION['auth_role'] = "$role_as";
        $_SESSION['auth_user'] = [
            'user_id'=>$user_id,
            'user_name'=>$user_name,
            'user_email'=>$user_email,

        ];


        if($_SESSION['auth_role'] == '1') //1=admin
        {
            $_SESSION['message'] = "Welcome to Dashboard";
            header('Location: ../admin/index.php');
            exit(0);

        }
        if($_SESSION['auth_role'] == '2') //2=superadmin
        {
            $_SESSION['message'] = "Welcome to Dashboard";
            header('Location: ../admin/index.php');
            exit(0);

        }
        elseif($_SESSION['auth_role'] == '0') //0=user
        {
            $_SESSION['message'] = "You are Logged In";
            header('Location: index.php');
            exit(0);
        }
        else
         {
            $_SESSION['message'] = "You are Logged In";
            header('Location: index.php');
            exit(0);

        }

    }
    else{


        $_SESSION['message'] = "Invalid Email or Password";
            header('Location: login.php');
            exit(0);

    }


}

else{

    $_SESSION['message'] = "You are not allowed to access this page";
            header('Location: login.php');
            exit(0);

}







?>