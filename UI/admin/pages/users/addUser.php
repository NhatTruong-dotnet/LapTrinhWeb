<?php
  include('../../../config/connectdb.php');
  if(isset($_POST["submit"])){
    $userID="";
    $user="";
    $firstname="";
    $process="";
    $total="";
    $date="";
    if(isset($_POST["userID"]) && isset($_POST["user"]) && isset($_POST["firstname"]) && isset($_POST["process"]) && isset($_POST["total"]) && isset($_POST["date"])){
        $userID=$_POST["userID"];
        $user=$_POST["user"];
        $firstname=$_POST["firstname"];
        $process=$_POST["process"];
        $total=$_POST["total"];
        $date=$_POST["date"];
        if($userID =="" || $user == "" || $firstname == "" || $process == "" || $total == "" || $date == ""){                              
            die("Chưa nhập đủ thông tin");                  
        }else{
            // $sqlInsert = 'INSERT INTO `user` (`user_id`, `password`, `hoten`, `sdt`, `email`, `role`) VALUES ('5', '123', 'Tuan Vu', '0786266752', 'tuanvutran369@gmail.com', 'user')';
            $sqlInsert = 'INSERT INTO `user` (`user_id`, `password`, `hoten`, `sdt`, `email`, `role`) VALUES ("'.$userID.'","'.$total.'", "'.$user.'","'.$process.'" ,"'.$firstname.'","'.$date.'")';
            mysqli_query($conn,$sqlInsert);
            header('location:user.php');
        } 
    }                                                                          
  }
?>