<?php
include "database.php";
$id=$_GET['updateid'];
$sqlgetdatafortheid = "select * from `crudtable` where id=$id";
$result=mysqli_query($mysqli,$sqlgetdatafortheid);
$row =mysqli_fetch_assoc($result);
$name= $row["name"];
$email= $row["email"];
$mobile= $row["mobile"];
$password= $row["password"];

if (isset($_POST["submit"])) {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $mobile = $_POST["mobile"];
  $password = $_POST["password"];

  $sql = "update `crudtable` set id=$id, name='$name', email='$email', mobile='$mobile', password='$password' 
  where id=$id";
  $result = mysqli_query($mysqli, $sql);
  if($result){
    echo "user updated"    ;
  } else {
    die(mysqli_error($mysqli));
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>crud operations</title>
</head>

<body>
  <form method="post">
    <div class="form-group my-5 mx-5">
      <label>Name</label>
      <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="off" value="<?php echo $name ?>">
      </label>
    </div>
    <div class="form-group mx-5">
      <label>Email</label>
      <input type="email" class="form-control" placeholder="email" name="email" autocomplete="off" value="<?php echo $email ?>">
      </label>
    </div>
    <div class="form-group mx-5">
      <label>Mobile</label>
      <input type="text" class="form-control" placeholder="mobile" name="mobile" autocomplete="off" value="<?php echo $mobile ?>">
      </label>
    </div>
    <div class="form-group mx-5">
      <label>password</label>
      <input type="password" class="form-control" placeholder="password" name="password" autocomplete="off" value="<?php echo $password ?>">
      </label>
      <input type="checkbox" onclick="myFunction()">Show Password >
    </div>
    <button type="submit" class="btn btn-primary mx-5" name="submit">Update</button>
  </form>

</body>

</html>

