<?php include 'Unit1_header.php';?>
<?php include 'Unit1_footer.php';?>
<link rel="stylesheet" type="text/css" href="Unit1_store.css" />

<html>
<body>
<?php
$total = 0;
$quant = $_POST["quant"];
$planes = $_POST['planepath'];
$donation = $_POST['donation'];

if($_POST["planepath"] == "images/steerman.jpg"){
    $total = 75999 * $quant;
    $plane = "steerman(s)";
}

if($_POST["planepath"] == "images/pits.jpg"){
    $total = 345999 * $quant;
    $plane = "pits(s)";
}

if($_POST["planepath"] == "images/eagle.jpg"){
    $total = 67070 * $quant;
    $plane = "eagle(s)";
}

if($_POST["planepath"] == "images/hatz.jpg"){
    $total = 70999 * $quant;
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
?>

Thank you for your order,  <?php echo $_POST["firstname"]; ?> <?php echo $_POST["lastname"]; ?>!<br>
Billing email address: <?php echo $_POST["email"]; ?><br>
You have selected <?php echo $_POST["quant"];?> <?php echo $plane;?><br>
Subtotal: $<?php echo $total; ?><br>
Total with tax: $<?php echo $totalWT; ?><br>
Total including donation: $<?php echo $totalWD; ?>

</body>
</html>

