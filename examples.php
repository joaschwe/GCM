<?php
//require './includes/config.php';
require './includes/header.inc.php';
require './includes/nav.inc.php';

//echo $_SERVER['SCRIPT_FILENAME'];
?>

<!------------------------------------------>
<style>
    .xs {
        position: relative;
        /*width: 50%;*/
    }

    .overlay {
        opacity: 1;
        display: block;
        width: 100%;
        height: auto;
        transition: .5s ease;
        backface-visibility: hidden;
    }

    .textBox {
        transition: .5s ease;
        opacity: 0;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        -ms-transform: translate(-50%, -50%);
        text-align: center;
        width:100%;

    }

    .xs:hover .overlay {
        opacity: 0.2;
    }

    .xs:hover .textBox {
        opacity: 1;
    }

    .text {
        /*background-color: white;*/
        color: black;
        font-size: 17px;
        padding: 16px 32px;
        line-height: 1.4;
    }

    .js_text-prod-primary {
        color: black;
        font-size: 16px;
        padding: 16px 32px;
    }

    .goTo {
        text-decoration: none;
        font-size:16px;
    }
    .goTo:hover {
        color:green;
    }
    .addToCart {
        background-color: #8DC63F;
        color:white;
        padding:5px;
        font-size:14px;
        margin-left:auto;
    }

    .addToCart:hover {
        background-color:white;
        border:2px solid #8DC63F;
        color:#8DC63F;
    }
    .addToCart-lg {
        background-color: #8DC63F;
        color:white;
        padding:10px;
        font-size:16px;
        border:2px solid #8DC63F;
    }
    .addToCart-lg:hover {
        background-color:white;
        border:2px solid #8DC63F;
        color:#8DC63F;
    }

    .button-primaryTile {
        display: flex;
        justify-content: space-between;
        height:30px;
    }
    hr {
        width: 70%;
        margin:auto;
        margin-bottom:20px;
        border-top: 1px solid green;"
    }
    .spanGood {
        font-size: 18px;
        font-family: ClickerScript-Regular, serif;"
    }
    .location-secondary {
        font-size: 14px;
        margin-left: 0;
        text-align: left;
        margin-top:0;"
    }
    .noUnderline {
        text-decoration: none;
    }
    .none {
        font-weight: bold;
        text-decoration: none;
        color:#6b6b6b;
    }

</style>
<!------------------------------------------>



<div class="container">

    <h1>Tile examples:</h1>
    <h3>Primary Tiles: Bath & Beauty / Product list page</h3>
    <p>In order: &emsp14;&emsp14;&emsp14;   Ver1 stylized location & add to cart overlay &emsp14;&emsp14;&emsp14;   | &emsp14;&emsp14;&emsp14;   Ver2 plain location&emsp14;&emsp14;  &emsp14;  | &emsp14; &emsp14;&emsp14;  Ver3 slightly smaller plain location</p>

<!--    product tile example-->
    <div class="card-container">
<!--        FIRST-->
        <div class="card xs">
                <div class="overlay">
                        <img src="images/products/bathBeauty/hickoryRidgeSoaps/islandFresh.PNG">
            <div class="card-content">
                <h3 style="margin-bottom:0px;">Island Fresh Jelly Soap</h3>
                <p class="location" style="font-size: 14px; margin-left: 0; text-align: left; margin-top:0;">
                    <span class="none">John Tom's BBQ</span><br>
                    A <span style="font-size: 16px; font-family: ClickerScript-Regular, serif;">Good</span> Craftsman
                    since 2018<br>
                    Muncie, IN
                </p>
                <p class="prod_description">
                    Its  Bahama like fragrance will treat you to a tropical island vacation. Fresh greenery, lavender, vanilla, rose,...
                </p>
                <div class="button" style="display: flex; justify-content: space-between;">
                    <p style="font-weight: bold;">8 0z.</p>
                    <p class="price">$11.95</p>
                </div>
            </div>
        </div><!--overlay-->
        <div class="textBox">
            <div class="js_cartBtn-primary">
                Qty: <input style="width: 30px; font-size: 18px; text-align: right;" placeholder="1" type="number"><br><br>
                <a href="your_cart.php"><button class="addToCart-lg">Add to Cart</button></a>
                <br><br>
                <hr>
                <a class="goTo" href="good_product_item.php">Go to Product &#8594;</a>
            </div>
        </div>

        </div>

<!--        SECOND-->
        <a href="good_product_item.php">
        <div class="card xs">

            <img src="images/products/bathBeauty/hickoryRidgeSoaps/islandFresh.PNG">
            <div class="card-content">
                <h3 style="margin-bottom:0px;">Island Fresh Jelly Soap</h3>
                <p class="location" style="font-size: 14px; margin-left: 0; text-align: left; margin-top:0;">
                    <span class="none">John Tom's BBQ, Muncie, IN</span><br>
                    A <span style="font-size: 16px; font-family: ClickerScript-Regular, serif;">Good</span> Craftsman
                    since 2018
                </p>
                <p class="prod_description">
                    Its  Bahama like fragrance will treat you to a tropical island vacation. Fresh greenery, lavender, vanilla, rose,...
                </p>
                <div class="button-primaryTile">
                    <p class="price">$11.95</p>
                    <a href="your_cart.php"><button class="addToCart">Add to Cart</button></a>
                </div>
            </div>

        </div>
    </a>
<!--        THIRD-->
        <div class="card xs">
            <a href="good_product_item.php">
            <img src="images/products/bathBeauty/hickoryRidgeSoaps/islandFresh.PNG">
            <div class="card-content">
                <h3 style="margin-bottom:0px;">Island Fresh Jelly Soap</h3>
                <p class="location" style="font-size: 13px; margin-left: 0; text-align: left; margin-top:0;">
                    <span class="none">John Tom's BBQ</span><br>
                    Muncie, IN &emsp13;|&emsp13; Since 2018</p>
                <p class="prod_description">
                    Its  Bahama like fragrance will treat you to a tropical island vacation. Fresh greenery, lavender, vanilla, rose,...
                </p>
                <div class="button-primaryTile">
                    <p class="price">$11.95</p>
                    <a href="your_cart.php"><button class="addToCart">Add to Cart</button></a>
                </div>
                </div>
            </div>
            </a>
        </div>





<!--    SECONDARY PRODUCT TILES-->
    <h3>Secondary Tiles: home page or "more items" at bottom of individual product page and "Products by this Craftsman" at bottom of individual craftsman page</h3>
    <p>In order (all have description hover): &emsp14;&emsp14;&emsp14;   Ver1 stylized location &emsp14;&emsp14;&emsp14;   | &emsp14;&emsp14;&emsp14;   Ver2 stylized location&emsp14;&emsp14;  &emsp14;  | &emsp14; &emsp14;&emsp14;  Ver3 plain location with size and cost</p>

    <div class="card-container">
        <!--        FIRST-->
        <div class="card xs">
            <a style="text-decoration: none;" href="good_product_item.php">
            <div class="overlay">
                    <img src="images/products/bathBeauty/hickoryRidgeSoaps/islandFresh.PNG">
                    <div class="card-content">
                        <h3 style="margin-bottom:0px;">Island Fresh Jelly Soap</h3>
                        <p class="location-secondary">
                            <span class="none">John Tom's BBQ</span><br>
                            A <span class="spanGood">Good</span> Craftsman since 2018<br>
                            Muncie, IN
                        </p>
                    </div>
                </div><!--overlay-->
                <div class="textBox">
                    <div class="text">Island Fresh Bath Jelly Soap with its  Bahama like fragrance will treat you to a tropical island vacation.   Fresh greenery, lavender, vanilla, rose, jasmine, and melon, encircle bottom notes of fresh air that will awaken your senses.  Creamy richness and the rejuvenating smells will give you an all day pick me up!
                        padding:15px;</div>
                </div>
            </a>
        </div>

        <!--        SECOND-->
        <div class="card xs">
            <a style="text-decoration: none;" href="good_product_item.php">
                <div class="overlay">
                <img src="images/products/bathBeauty/hickoryRidgeSoaps/islandFresh.PNG">
                <div class="card-content">
                    <h3 style="margin-bottom:0px;">Island Fresh Jelly Soap</h3>
                    <p class="location-secondary">
                        <span class="none">John Tom's BBQ</span><br>
                        A <span class="spanGood">Good</span> Craftsman since 2018
                    </p>
                </div>
                </div><!--overlay-->
                <div class="textBox">
                    <div class="text">Island Fresh Bath Jelly Soap with its  Bahama like fragrance will treat you to a tropical island vacation.   Fresh greenery, lavender, vanilla, rose, jasmine, and melon, encircle bottom notes of fresh air that will awaken your senses.  Creamy richness and the rejuvenating smells will give you an all day pick me up!
                        padding:15px;</div>
                </div>
            </a>
        </div>

        <!--        THIRD-->
        <div class="card xs">
            <a style="text-decoration: none;" href="good_product_item.php">
                <div class="overlay">
                <img src="images/products/bathBeauty/hickoryRidgeSoaps/islandFresh.PNG">
                <div class="card-content">
                    <a href="#"><h3 style="margin-bottom:0px;">Island Fresh Jelly Soap</h3></a>
                    <p class="location" style="font-size: 14px; margin-left: 0; text-align: left; margin-top:0;">
                        John Tom's BBQ&emsp13;&emsp13;<span style="color: #8DC63F;">|</span> &emsp13;&emsp13;Muncie, IN</p>
                    <div class="button" style="display: flex; justify-content: space-between;">
                        <p style="font-weight: bold;">8 0z.</p>
                        <p class="price">$11.95</p>
                    </div>
                </div>
        </div><!--overlay-->
        <div class="textBox">
            <div class="text">Island Fresh Bath Jelly Soap with its  Bahama like fragrance will treat you to a tropical island vacation.   Fresh greenery, lavender, vanilla, rose, jasmine, and melon, encircle bottom notes of fresh air that will awaken your senses.  Creamy richness and the rejuvenating smells will give you an all day pick me up!
                padding:15px;</div>
        </div>
            </a>
        </div>



    </div>











<!--    CRAFTSMEN-->
    <h3>Craftsmen main page</h3>
    <p>In order (all have description hover): &emsp14;&emsp14;&emsp14;   Ver1 stylized location &emsp14;&emsp14;&emsp14;   | &emsp14;&emsp14;&emsp14;   Ver2 stylized location&emsp14;&emsp14;  &emsp14;  | &emsp14; &emsp14;&emsp14;  Ver3 stylized location</p>



        <div class="card-container">
            <!--        FIRST-->
            <div class="card xs">
                <a class="noUnderline" href="craftman_johntomsBBQ.php">
                    <div class="overlay">
                <img src="images/craftsman/craftHome/craftsman2.jpg">
                <div class="card-content">
                    <h3 style="margin-bottom:0px;">John Tom's BBQ</h3>
                    <p class="location" style="font-size: 12px; margin-left: 0; text-align: left; margin-top:0;">Muncie,
                        IN | a <span style="font-size: 16px; font-family: ClickerScript-Regular, serif;">Good</span>
                        Craftsman since 2018</p>
                    <p class="craft_description">
                        John Tom Branson had a very non-traditional background. Southerner, turned midwesterner.
                        Assembly-line factory worker, turned...
                    </p>
                </div>
                    </div><!--overlay-->
                    <div class="textBox">
                        <div class="text">John Tom Branson (pictured) had a very non-traditional background. Southerner, turned midwesterner. Assembly-line factory worker, turned charcoal miner. His leisure time was spent barbecuing and wood smoking meat, but his sauce was the real MVP. Perfecting the small-batch craft before it was a movement, John Tom brought his southern values to midwest flavor.</div>
                    </div>
                </a>
            </div>

            <!--        SECOND-->
            <div class="card xs">
                <a class="noUnderline" href="craftman_johntomsBBQ.php">
                    <div class="overlay">
                <img src="images/craftsman/craftHome/craftsman2.jpg">
                <div class="card-content">
                    <h3 style="margin-bottom:0px;">Excepteur Sint</h3>
                    <p class="location" style="font-size: 12px; margin-left: 0; text-align: left; margin-top:0;">
                        A <span style="font-size: 16px; font-family: ClickerScript-Regular, serif;">Good</span>
                        Craftsman since 2018<br>
                        Muncie, IN</p>
                    <p class="craft_description">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit
                        anim id est laborum.
                    </p>
                </div>
            </div><!--overlay-->
            <div class="textBox">
                <div class="text">John Tom Branson (pictured) had a very non-traditional background. Southerner, turned midwesterner. Assembly-line factory worker, turned charcoal miner. His leisure time was spent barbecuing and wood smoking meat, but his sauce was the real MVP. Perfecting the small-batch craft before it was a movement, John Tom brought his southern values to midwest flavor.</div>
            </div>
                </a>
            </div>

            <!--        THIRD-->
            <div class="card xs">
                <a class="noUnderline" href="craftman_johntomsBBQ.php">
                    <div class="overlay">
                <img src="images/craftsman/craftHome/craftsman3.png">
                <div class="card-content">
                    <h3 style="margin-bottom:0px;">Excepteur Sint</h3>
                    <p class="location" style="font-size: 12px; margin-left: 0; text-align: left; margin-top:0;">
                        Muncie, IN<br>
                        <span style="font-size: 16px; font-family: ClickerScript-Regular, serif;">Good</span> Craftsman
                        since 2018<br>
                    </p>
                    <p class="craft_description">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt
                        mollit
                        anim id est laborum.
                    </p>
                </div>
                    </div><!--overlay-->
                    <div class="textBox">
                        <div class="text">John Tom Branson (pictured) had a very non-traditional background. Southerner, turned midwesterner. Assembly-line factory worker, turned charcoal miner. His leisure time was spent barbecuing and wood smoking meat, but his sauce was the real MVP. Perfecting the small-batch craft before it was a movement, John Tom brought his southern values to midwest flavor.</div>
                    </div>
                </a>
            </div>

        </div>
    </div>


<!--</div>-->


<!--FOOTER-->
<?php
include './includes/footer.inc.php';
?>

</div><!--end container-->


