<?php
  session_start();

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
<body>
    


<div class="container" style="max-width:800px">

<form action="Edit_UserInfo.php" id="editInfo" method="post">
  <div class="form-group row ">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="form-group col-sm-10">
      <input type="email" class="form-control" readonly style="pointer-events:none;" name="email" id="email" value="<?php echo isset($_SESSION['email']) ? $_SESSION['email'] : ""?>"  placeholder="Email">
    </div>
  </div>
  <div class="form-group row">
    <label for="name" class="col-sm-2 col-form-label">Họ tên</label>
    <div class="form-group col-sm-10">
      <input type="text" class="form-control" name="name" id="name" value="<?php echo isset($_SESSION['hoten']) ? $_SESSION['hoten'] : ""?>" placeholder="Họ và tên">
      <div class="message"></div>
    </div>
  </div>
  <div class="form-group row ">
    <label for="sdt" class="col-sm-2 col-form-label">Số điện thoại</label>
    <div class="form-group col-sm-10">
      <input type="text" class="form-control" id="numberPhone" name="numberphone" value="<?php echo isset($_SESSION['sdt']) ? $_SESSION['sdt'] : ""?>" placeholder="Số điện thoại">
      <div class="message"></div>
    </div>
  </div>
  
  
  <div class="form-group row mt-5" >
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary float-right" >Lưu thay đổi</button>
    </div>
  </div>
</form>

</div>

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

</script>

</body>
</html>