<?php
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $hashPassword = md5($password);
    require_once("./../config/conndb.php");

    // $conn = connectDB('localhost',"sneoiuvk_laptrinhweb","147258369","sneoiuvk_laptrinhweb");
    $conn = new mysqli(HOST, USER, PASS, DATABASE);

    if($conn){
        $sql = "SELECT hoten,email,sdt,role FROM user WHERE email='$email' and password='$hashPassword'";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {

            $user = $result->fetch_assoc();


            $_SESSION['hoten'] = $user['hoten'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['sdt'] = $user['sdt'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['isLogin'] = TRUE;

            setcookie('success','Welcome '.$user['hoten'],time()+5,'/');
        }else {
            setcookie('error','Invalid username or password',time()+5,'/');
        }
    }else{
        setcookie('error','Something wrong, please wait minutes and try again',time()+3600,'/');
    }
    header('Location: '.$_SERVER['HTTP_REFERER']);
?>

<?php
    function connectDB($server, $username, $password, $database){
        $conn =  new mysqli($server, $username, $password, $database);
        if ($conn->connect_error) {
            return null;
        }
        return $conn;
    }
?>