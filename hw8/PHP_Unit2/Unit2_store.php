<?php include 'Unit2_header.php';?>
<?php include 'Unit2_footer.php';?>

<html>
<body>
<link rel="stylesheet" type="text/css" href="Unit2_store.css" />

<form action="Unit2_process_order.php" method="post">
    <div id="div1">
        <fieldset>
            <legend>Personal information:</legend>

        <label type="text">First Name:</label>
            <input type="name" name="firstname" pattern="[A-Za-z ']{1,32}" required>
        <label type="text" class="required"></label><br>

        <label type="text">Last Name:</label>
            <input type="name" name="lastname" pattern="[A-Za-z ']{1,32}" required>
        <label type="text" class="required"></label><br>

        <label type="text">E-mail:</label>
            <input type="email" name="email2" required>
        <label type="text" class="required"></label><br>
        </fieldset>
    </div>

    <br>

    <div id="div2">
    <fieldset>
        <legend>Product information:</legend>
        <label for="planes">Choose an Airplane:</label>

        <select id="planes" name="planepath" onchange="swapImage()" required>
            <option value="">--Select an Airplane--</option>
            <?php
            $query = "SELECT * FROM PRODUCTS";
            $conn = new mysqli( "localhost","jeicher","UEIYGUWK","f20_jeicher" );
            $stmt = $conn->prepare( $query );
            $stmt->execute();
            $result = $stmt->get_result();   // <--- add this instead

            while ($row = $result->fetch_assoc()) {
                $image = $row['image'];
                $name = $row['name'];
                $price = $row['price'];
                echo '<option value="'.$image.'">'.$name. ' --- $'. $price.'</option>';
            }
            ?>
            </select>
                <label class="required"></label>
            <br>

        <label for="quantity">Quantity:</label>
            <input type="number" max="99" min="1" name="quant" required>
                <label class="required"></label>
            <br>

        <label for="donation">Would you like to round up to donate?</label>

        <input type="radio" name="donation"
            <?php if (isset($donation) && $donation=="yes") echo "checked";?>
               value="yes">yes

        <input type="radio" name="donation"
            <?php if (isset($donation) && $donation=="no") echo "checked";?>
               value="no">no
        <br>
        <input type="submit" name="button" value="Submit"/>
    </div>
    </fieldset>
    <br>
</form>

<img id="imageToSwap" width="500" height="350"/>

<br>
<br>
<br>
<br>
<br>
<script>
    function swapImage(){
        var image = document.getElementById("imageToSwap");
        var planesPic = document.getElementById("planes");
        image.src = planesPic.value;
    };
</script>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $_POST['planepath'];
    $_POST['donation'];
    $_POST['email2'];
    $_POST['quant'];
    $_POST['name'];
}
?>
