<?php
    //record data from the form
    $data ="";
    if($_SERVER['REQUEST_METHOD']=="POST"){
        $name = $_POST['u-name'];
        $email = $_POST['email'];
        $data = "name:$name <br> email: $email ";  
    }
    echo "Your personal information has been accepted
    <br>" . $data;
?>
