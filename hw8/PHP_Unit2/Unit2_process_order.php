<?php include 'Unit2_header.php';?>
<?php include 'Unit2_footer.php';?>
<?php include 'Unit2_database.php';?>

<link rel="stylesheet" type="text/css" href="Unit2_store.css" />

<html>
<body>
<?php
hit();
$thePrice = getPrice();
$total = 0;
$quant = $_POST["quant"];
$planes = $_POST['planepath'];
$donation = $_POST['donation'];
$email = $_POST['email'];
$email2 = $_POST['email2'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

if($_POST["planepath"] == "/fall_2020/jeicher/php/PHP_Unit2/images/steerman.jpg"){
    $total = $thePrice * $quant;
    $plane = "steerman(s)";
}

if($_POST["planepath"] == "/fall_2020/jeicher/php/PHP_Unit2/images/pits.jpg"){
    $total = $thePrice * $quant;
    $plane = "pits(s)";
}

if($_POST["planepath"] == "/fall_2020/jeicher/php/PHP_Unit2/images/eagle.jpg"){
    $total = $thePrice * $quant;
    $plane = "eagle(s)";
}

if($_POST["planepath"] == "/fall_2020/jeicher/php/PHP_Unit2/images/hatz.jpg"){
    $total = $thePrice * $quant;
    $plane = "Hatz(s)";
}
$totalWT = 0;
$totalWT = $total + $total*.086;

$totalWD = 0;
if ($donation == "yes"){
    $totalWD = ceil($totalWT);
}
else {
    $totalWD = $totalWT;
}

$timestamp = date('Y-m-d H:i:s');
orderUp($timestamp, $plane, $email2, $planes, $quant, 0.086, $totalWD - $totalWT, $total);
?>

<div id="final">
    Thank you for your order, <?php echo $_POST["firstname"]; ?> <?php echo $_POST["lastname"]; ?>!<br>
    <b>Billing email address: </b> <?php echo $_POST["email2"]; ?><br>
    You selected <b> <?php echo $_POST["quant"];?> </b> <?php echo $plane;?><br>
    <b>Subtotal: </b> $<?php echo $total; ?><br>
    <b>Total with tax: </b> $<?php echo $totalWT; ?><br>
    <b>Total including donation: </b> $<?php echo $totalWD; ?>
</div>
</body>
</html>

