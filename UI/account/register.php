<?php
    session_start();
    // Get user info
    $name = ($_POST['name']);
    $numberPhone = $_POST['numberphone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // hash password
    $hashPassword = md5($password);
    // connect DB
    $conn = connectDB('localhost:3307',"root","","laptrinhweb");
    if($conn){
        
        $sqlCheckExistUser = "SELECT * FROM user where email='$email'";
        // query
        $result = $conn->query($sqlCheckExistUser);
        
        if($result->num_rows > 0){
            setcookie('error','Exist email',time()+5,'/');
        }else{
            $sql = "INSERT INTO user (hoten, sdt, email, password, role)
            VALUES ('$name', '$numberPhone', '$email', '$hashPassword', 'user')";
        
        if ($conn->query($sql) === TRUE) {
            setcookie('success','Register successfully',time()+5,'/');
            $_SESSION['email'] = $email;
        } else {
            setcookie('error','Something wrong, please wait minutes and try again',time()+5,'/');
        }
        
        }
    }else{
        setcookie('error','Something wrong, please wait minutes and try again',time()+5,'/');
    }
    
    $conn->close();
    
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