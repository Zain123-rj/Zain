<?php
$first_name = filter_input(INPUT_POST, 'first_name');
$number = filter_input(INPUT_POST, 'number');
$guests = filter_input(INPUT_POST, 'guests');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "coffee_shop";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO table_booking (first_name, number,guests)
values ('$first_name','$number',$guests)";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
?>