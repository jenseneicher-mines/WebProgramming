<?php include 'Unit2_header.php';?>
    <link rel="stylesheet" type="text/css" href="Unit2_store.css" />

    <html>
    <body>
<?php

echo nl2br("\n");
echo nl2br("Customers \n");


$conn = new mysqli( "localhost","jeicher","UEIYGUWK","f20_jeicher" );

$query = "SELECT * FROM CUSTOMERS";
$stmt = $conn->prepare( $query );
$stmt->execute();
$result = $stmt->get_result();

echo "<table id='tab'>";

echo "<th>First Name</th><th>Last Name</th><th>Email</th>";
while($row = $result->fetch_assoc()){
    echo "<tr><td>" . $row['firstname'] . "</td><td>" . $row['lastname'] .  "</td><td>" . $row['email'] . "</td></tr>";
}

echo "</table>";

echo nl2br("\n");
echo nl2br("Products \n");



$conn = new mysqli( "localhost","jeicher","UEIYGUWK","f20_jeicher" );

$query = "SELECT * FROM PRODUCTS";
$stmt = $conn->prepare( $query );
$stmt->execute();
$result = $stmt->get_result();

echo "<table id='tab2'>";
echo "<th>Name</th><th>Price</th><th>Quantity</th>";

while($row = $result->fetch_assoc()){
    echo "<tr><td>" . $row['name'] . "</td><td>" . $row['price'] .  "</td><td>" . $row['quantity'] . "</td></tr>";
}

echo "</table>";


echo nl2br("\n");
echo nl2br("Orders \n");

$conn = new mysqli( "localhost","jeicher","UEIYGUWK","f20_jeicher" );

$query = "SELECT * FROM ORDERS";
$stmt = $conn->prepare( $query );
$stmt->execute();
$result = $stmt->get_result();

echo "<table id='tab1'>";
echo "<th>Email</th><th>Product</th><th>Time</th><th>Quantity</th><th>Tax</th><th>Donation</th><th>Total</th>";

while($row = $result->fetch_assoc()){
    echo "<tr><td>" . $row['customer'] . "</td><td>" . $row['product'] .  "</td><td>" . $row['time'] .  "</td><td>" . $row['quantity'] .  "</td><td>" . $row['tax'] .  "</td><td>" . $row['donation'] .  "</td><td>" . $row['total']."</td></tr>";
}

echo "</table>";