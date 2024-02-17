<?php
include('./PDO.PHP');
$id= $_GET['ID'];
if (isset($_POST['update'])){
    $name = $_POST['u-name'];
    $email = $_POST['email'];
    $pw = $_POST['pass'];
    $gender = $_POST['gender'];
    if(!empty($name) && !empty($email) && !empty($gender)&& !empty($pw)){
        $query = "UPDATE customers
        SET Name= '$name', email='$email', password='$pw' , gender='$gender'
        WHERE cust_id='$id' ";
        $stmt =$conn->prepare($query);

        $stmt->execute();
        
                
        echo"DATA UPDATA Successfully";
    }
}
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Update Customer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="padding: 5px">
    <p></p>
    <h3>Update customer</h3>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        <div class="form-group">
            <label for="name">name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name" name="u-name">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="password">password:</label>
            <input type="password" class="form-control" id="pass" placeholder="choose pass" name="pass">
        </div>
        <div class="form-group">
            <label for="gender">Gender:</label><br>
            <label class="radio-inline"><input type="radio" name="gender" value="Male">Male</label>
            <label class="radio-inline"><input type="radio" name="gender" value="Female">Female</label>
        </div>
        <button type="submit" name="update" class="btn btn-default">Update</button><br><br>
        <a href="./select_customers.php" >Back to the table</a>
    </form>
</div>

</body>
</html>