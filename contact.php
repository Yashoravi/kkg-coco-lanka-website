<?php

include 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

$sql = "INSERT INTO inquiries
(full_name,email,phone,message)
VALUES
('$name','$email','$phone','$message')";

if(mysqli_query($conn,$sql))
{
    header("Location: ../con.php?status=success");
}
else
{
    header("Location: ../con.php?status=error");
}

exit();

?>