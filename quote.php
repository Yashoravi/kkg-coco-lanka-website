<?php

include "config.php";

$name = $_POST['name'];
$email = $_POST['email'];
$company = $_POST['company'];
$product = $_POST['product'];
$quantity = $_POST['quantity'];
$message = $_POST['message'];

$sample_request = isset($_POST['sample_request'])
    ? $_POST['sample_request']
    : "No";

$sql = "INSERT INTO quote_requests
(
name,
email,
company,
product,
quantity,
message,
sample_request
)
VALUES
(
'$name',
'$email',
'$company',
'$product',
'$quantity',
'$message',
'$sample_request'
)";

if(mysqli_query($conn,$sql))
{
    echo "
    <script>
    alert('Quote Request Submitted Successfully!');
    window.location='../get.html';
    </script>
    ";
}
else
{
    echo "Error : " . mysqli_error($conn);
}

mysqli_close($conn);

?>