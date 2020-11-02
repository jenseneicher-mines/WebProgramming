
<?php

function hit(){
    $quant = $_POST["quant"];
    $planes = $_POST['planepath'];
    $query = "SELECT quantity FROM PRODUCTS WHERE image = '$planes'";
    $conn = new mysqli( "localhost","jeicher","UEIYGUWK","f20_jeicher" );
    $stmt = $conn->prepare( $query );
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $quantity = $data['quantity'];
        if($quantity - $quant < 0){
            echo "You have selected too many of your item, we only have ";
            echo $quantity;
            echo " left";
            echo nl2br("\n");
            exit();
        }
        else {
            if($quantity - $quant < 5 && $quantity - $quant >= 0){
                echo "Almost gone! only ";
                echo $quantity - $quant;
                echo " left in stock";
                echo nl2br("\n");
            }
        }

    $searchEmail = $_POST['email2'];
    $query = "SELECT firstname FROM CUSTOMERS WHERE email = '$searchEmail'";
    $conn = new mysqli( "localhost","jeicher","UEIYGUWK","f20_jeicher" );
    $stmt = $conn->prepare( $query );
    $stmt->execute();
    $result = $stmt->get_result();   // <--- add this instead
    if($result->num_rows == 1) {     // <--- change to $result->...!
        while ($data = $result->fetch_assoc()) {
                echo "Welcome back!";
            }
    }
    else {
        echo "Welcome to the Bob's Biplanes Club!";
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $query = "INSERT INTO CUSTOMERS VALUES ('$firstname', '$lastname', '$searchEmail')";
        $conn = new mysqli( "localhost","jeicher","UEIYGUWK","f20_jeicher" );
        $stmt = $conn->prepare( $query );
        $stmt->execute();
    }
}

function getPrice(){
    $planes = $_POST['planepath'];
    $query = "SELECT price FROM PRODUCTS WHERE image = '$planes'";
    $conn = new mysqli( "localhost","jeicher","UEIYGUWK","f20_jeicher" );
    $stmt = $conn->prepare( $query );
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $prices = $data['price'];
    return $prices;
}

function orderUp($time, $plane, $email, $image, $quant, $tax, $donation, $total){
    $query = "INSERT INTO ORDERS VALUES ('$time', '$plane', '$email', '$image', '$quant', '$tax', '$donation', '$total')";
    $conn = new mysqli( "localhost","jeicher","UEIYGUWK","f20_jeicher" );
    $stmt = $conn->prepare( $query );
    $stmt->execute();
}


?><br>