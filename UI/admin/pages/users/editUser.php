<?php
  session_start();

  const HOST = "localhost";
  const USER = "root";
  const PASS = "";
  const DATABASE = "laptrinhweb";

  function execQuery ($sql){
      $conn = new mysqli(HOST, USER, PASS, DATABASE);
      
      if($conn->connect_error){
          die('ket noi that bai:' . $conn->connect_error);
      }

      $conn->set_charset("utf8");

      $result = $conn->query($sql);

      $data = array();

      while($row = $result->fetch_array(1)){
          $data[] = $row;
      }
      return $data;

      $conn->close();
  }

  function updateUser($sql){
    $host = HOST;
    $dbname = DATABASE;
    try{
      $conn = new PDO("mysql:host=$host; dbname=$dbname", USER, PASS);
      
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $stmt = $conn->prepare($sql);

      $stmt->execute();

      echo $stmt->rowCount()." Records UPDATE successfully";


    }catch(PDOException $e){
      echo $sql. "</br>".$e->getMessage();
    }
  }
  $conn=null;

?>
<?php


    $emaillogin = $_GET['email'];

   
    $sql = "SELECT * FROM user WHERE email LiKE '%$emaillogin%'";
    $result = execQuery($sql);
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style>


</style>

<body>
    


<div class="container" style="max-width:800px; margin-top: 50px;">

<!-- action="editUser.php" 
  editUser.php?email= echo $emaillogin
-->
<form action="editUser.php?email=<?php echo $emaillogin;?>" id="editInfo" method="post">
  <div class="form-group row ">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="form-group col-sm-10">
      <input type="email" class="form-control" readonly style="pointer-events:none;" name="email" id="email" value="<?php echo $result[0]['email'];?>"  placeholder="Email">
    </div>
  </div>
  
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Họ tên</label>
    <div class="form-group col-sm-10">
      <input type="text" class="form-control" name="name" id="name" value="<?php echo $result[0]['hoten'];?>" placeholder="Họ và tên">
      <div class="message"></div>
    </div>
  </div>
  <div class="form-group row ">
    <label for="sdt" class="col-sm-2 col-form-label">Số điện thoại</label>
    <div class="form-group col-sm-10">
      <input type="text" class="form-control" id="numberPhone" name="numberphone" value="<?php echo $result[0]['sdt']; ?>" placeholder="Số điện thoại">
      <div class="message"></div>
    </div>
  </div>
  
  
  <div class="form-group row mt-5" >
    
    <div class="col-sm-12">
      <a class="btn btn-danger" href="./user.php" role="button">Back</a>
      <button type="submit" name="updateuser" class="btn btn-primary float-right" >Lưu thay đổi</button>
    </div>
  </div>
</form>

</div>

<?php 

  
  
  if(isset($_POST['updateuser'])){
    
    $fullname = $_POST['name'];
    $numberphone = $_POST['numberphone'];

    $updateuser = "UPDATE user SET hoten = '$fullname', sdt = '$numberphone' WHERE email LIKE '%$emaillogin%'";

    $update = updateUser($updateuser);

    $emaillogin = $_POST['email'];

    header("Refresh:0");

  }


?>
<script src="../assets/js/validator.js"></script>
<script>
  Validator({
  form:'#editInfo',
  errorSelector:".message",
  rules:[
    Validator.isRequired('#name'),

    Validator.isRequired('#numberPhone'),
    Validator.amountNumber('#numberPhone', 10),
    Validator.startWithNumber("#numberPhone", 0),
    Validator.validNumberPhone('#numberPhone'),
  ]
})

  function loadAgain(){
    location.reload();
  }

</script>

</body>
</html>