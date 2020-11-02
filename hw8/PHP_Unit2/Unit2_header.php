<div class="navbar" id="myNavBar">
    <a href="Unit2_store.php">Home</a>
    <a href="">Airplanes</a>
    <a href="">About</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <em class="fa fa-bars"></em>
    </a>
</div>
<br>
<br>
<br>
<header>
    <h1 id="name"><em>Bob's Biplanes</em></h1>
</header>

<script>
    function myFunction() {
        var x = document.getElementById("myNavBar");
        if (x.className === "navbar") {
            x.className += " responsive";
        } else {
            x.className = "navbar";
        }
    }
</script>
