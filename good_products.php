<?php
//require './includes/config.php';
require './includes/header.inc.php';
require './includes/nav.inc.php';

//echo $_SERVER['SCRIPT_FILENAME'];
?>
<style>
    button.prodBtn {
        width:185px;
        font-size:15px;
        padding:15px;
    }
    h2, h3 {
        color:whitesmoke;
        font-family: "Avenir", sans-serif;
        margin:0;
    }
    button.comingSoon {
        background-color:transparent;
        border:none;
        width:100%;
        /*height:100%;*/
    }
    button.comingSoon:hover {
        background-color: transparent;
        border:none;
        box-shadow: none;
    }
</style>



<div class="container">

    <div class="x3">
        <h1 class="clicker"><span>Good</span> Products</h1>

        <div class="card-container blur">
            <div class="card">
                <img style="filter:opacity(60%);" src="images/products/prodHome/clothing-accessories.jpg">
                <div class="overlayProd"></div>

                <a href="clothing_accessories_&_jewelry.php"><button class="over comingSoon"><h2>Coming Soon!</h2><h3>Clothing, Accessories & Jewelry</h3></button></a>
            </div>
            <div class="card">
                <img src="images/products/prodHome/rugged.jpg">
                <div class="overlayProd"></div>
                <a href="rugged.php"><button class="over prodBtn">Rugged</button></a>
            </div>
            <div class="card">
                <img src="images/products/prodHome/candles.jpg">
                <div class="overlayProd"></div>
                <a href="candles.php"><button class="over prodBtn">Candles</button></a>
            </div>
            <div class="card">
                <img src="images/products/prodHome/incredEd.jpg">
                <div class="overlayProd"></div>
                <a href="incredibleEdibles.php"><button class="over prodBtn">Incredible Edibles</button></a>
            </div>
            <div class="card">
                <img src="images/products/prodHome/pet-dept.jpg">
                <div class="overlayProd"></div>
                <a href="pets.php"><button class="over prodBtn">Pet Department</button></a>
            </div>
            <div class="card">
                <img src="images/products/prodHome/kiddos.jpg">
                <div class="overlayProd"></div>
                <a href="kiddos.php"><button class="over prodBtn">Kiddos</button></a>
            </div>
            <div class="card">
                <img src="images/products/prodHome/bath-beauty.jpg">
                <div class="overlayProd"></div>
                <a href="bath_&_beauty.php"><button class="over prodBtn">Bath & Beauty</button></a>
            </div>
            <div class="card">
                <img src="images/products/prodHome/home.jpg">
                <div class="overlayProd"></div>
                <a href="homeProducts.php"><button class="over prodBtn">Home</button></a>
            </div>
<!--            <div class="card">-->
<!--                <img src="images/products/prodHome/home.jpg">-->
<!--                <div class="overlay"></div>-->
<!--                <a href="homeProducts.php"><button class="over prodBtn">Placeholder</button></a>-->
<!--            </div>-->

        </div>

    </div>
</div>
</div><!--end container-->

<!--FOOTER-->
<?php
include './includes/footer.inc.php';
?>




