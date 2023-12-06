<?php
include 'database.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a class="text-light" href="user.php">Add User</a></button>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">mobile</th>
                <th scope="col">password</th>
                <th scope="col">operations</th>


            </tr>
        </thead>

        <?php
        $sql= "select * from `crudtable`";
        $result =mysqli_query($mysqli ,$sql);
        if($result){
            while($row = mysqli_fetch_assoc($result)){
                $id=$row['id'];
                $name=$row['name'];
                $email=$row['email'];
                $mobile=$row['mobile'];
                $password=$row['$password'];
                
                echo '<tr>
                <th scope="row">'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>\
                <td>'.$password.'</td>
                <td>
                <button class="btn btn-primary"><a class="text-light" href="update.php?updateid='.$id.'">Update</a></button>
                <button class="btn btn-danger"><a class="text-light" href="delete.php?deletedid='.$id.'">Delete</a></button>
                </td>  
              </tr>';
        }}
        ?>
   
    </table>
</body>

</html>