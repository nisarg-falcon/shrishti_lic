<?php

$con = mysqli_connect('localhost','root','','enquires');

$name = $_POST['name'];
$mail = $_POST['mail'];
$contact = $_POST['contact'];
$plan = $_POST['plan'];

$query = "INSERT into plan_enquires (name,mail,contact,plan) values ('$name','$mail','$contact','$plan')";
$result = mysqli_query($con,$query);

if($result){
    echo 'Enquiry Inserted';
}
else{
    echo 'Error';
}

?>

