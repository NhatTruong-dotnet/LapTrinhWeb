<?php
    session_start();
    $name = ($_POST['name']);
    $numberPhone = $_POST['numberphone'];
    $email = $_POST['email'];


    // $conn = connectDB('localhost',"sneoiuvk_laptrinhweb","147258369","sneoiuvk_laptrinhweb");
    $conn = connectDB("localhost","root","","laptrinhweb");

    if($conn){

        $sql = "UPDATE user 
                SET hoten='$name', sdt='$numberPhone'
                WHERE email='$email'";
        
        if ($conn->query($sql) === TRUE) {
            $_SESSION['sdt'] = $numberPhone;
            $_SESSION['hoten'] = $name;

            setcookie('success','Update success',time()+5,'/');
        }else{
            setcookie('error','Something wrong, please wait minutes and try again',time()+5,'/');
        }
    }else{
        setcookie('error','Something wrong, please wait minutes and try again',time()+5,'/');
    }
    header('Location: '.$_SERVER['HTTP_REFERER']);
?>

<?php
    function connectDB($server, $username, $password, $database){
        $conn =  new mysqli($server, $username, $password, $database);
        $conn->set_charset("utf8");
        if ($conn->connect_error) {
            return null;
        }
        return $conn;
    }
?>