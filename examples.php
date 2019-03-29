<?php
//require './includes/config.php';
require './includes/header.inc.php';
require './includes/nav.inc.php';

//echo $_SERVER['SCRIPT_FILENAME'];
?>


<div class="container">

    <h1>Tile examples:</h1>
    <h3>Bath & Beauty / Product list page</h3>
    <p>In order: &emsp14;&emsp14;&emsp14;   stylized location &emsp14;&emsp14;&emsp14;   | &emsp14;&emsp14;&emsp14;   italic location&emsp14;&emsp14;  &emsp14;  | &emsp14; &emsp14;&emsp14;  non-italic location&emsp14;&emsp14;&emsp14;    | &emsp14; &emsp14;&emsp14;  non-italic location and whole tile is clickable</p>

<!--    product tile example-->
    <div class="card-container">
<!--        FIRST-->
        <div class="card xs">
            <a href="#">
            <img src="images/products/bathBeauty/hickoryRidgeSoaps/islandFresh.PNG">
            <div class="card-content">
                <h4 style="margin-bottom:0px;">Island Fresh Jelly Soap</h4>
                <p class="location" style="font-size: 12px; margin-left: 0; text-align: left; margin-top:0;">Muncie, IN
                    | a <span style="font-size: 16px; font-family: ClickerScript-Regular, serif;">Good</span> Craftsman
                    since 2018</p>
                <p class="prod_description">
                    Its  Bahama like fragrance will treat you to a tropical island vacation. Fresh greenery, lavender, vanilla, rose,...
                </p>
                <div class="button">
                    <p class="price">$11.95</p>
                    <!--                <a href="#"><img class="share" src="images/icons/share1.jpg"/></a>-->
                    <a href="your_cart.php"><button class="continueBtn" style="width: 65%; margin-left: 7%;" >Add to Cart</button></a>
                </div>
            </div>
            </a>
        </div>

<!--        SECOND-->
        <div class="card xs">
            <a href="good_product_item.php">
            <img src="images/products/bathBeauty/hickoryRidgeSoaps/islandFresh.PNG">
            <div class="card-content">
                <h4 style="margin-bottom:0px;">Island Fresh Jelly Soap</h4>
                <p class="location" style="font-size: 12px; margin-left: 0; text-align: left;  font-style: italic; margin-top:0;">Muncie, IN | since 2018</p>
                <p class="prod_description">
                    Its  Bahama like fragrance will treat you to a tropical island vacation. Fresh greenery, lavender, vanilla, rose,...
                </p>
                <div class="button">
                    <p class="price">$11.95</p>
                    <!--                <a href="#"><img class="share" src="images/icons/share1.jpg"/></a>-->
                    <a href="your_cart.php"><button class="continueBtn" style="width: 65%; margin-left: 7%;" >Add to Cart</button></a>
                </div>
            </div>
            </a>
        </div>
<!--        THIRD-->
        <div class="card xs">
            <a href="good_product_item.php">
            <img src="images/products/bathBeauty/hickoryRidgeSoaps/islandFresh.PNG">
            <div class="card-content">
                <a href="#"><h4 style="margin-bottom:0px;">Island Fresh Jelly Soap</h4></a>
                <p class="location" style="font-size: 12px; margin-left: 0; text-align: left; margin-top:0;">Muncie, IN | since 2018</p>
                <p class="prod_description">
                    Its  Bahama like fragrance will treat you to a tropical island vacation. Fresh greenery, lavender, vanilla, rose,...
                </p>
                <div class="button">
                    <p class="price">$11.95</p>
                    <!--                <a href="#"><img class="share" src="images/icons/share1.jpg"/></a>-->
                    <a href="your_cart.php"><button class="continueBtn" style="width: 65%; margin-left: 7%;" >Add to Cart</button></a>
                </div>
            </div>
            </a>
        </div>
<!--        FOURTH-->
        <div class="card xs">
            <a href="good_product_item.php">
            <img src="images/products/bathBeauty/hickoryRidgeSoaps/islandFresh.PNG">
            <div class="card-content">

                    <h4 style="margin-bottom:0px;">Island Fresh Jelly Soap</h4>
                <p class="location" style="font-size: 12px; margin-left: 0; text-align: left; margin-top:0;">Muncie, IN | since 2018</p>
                <p class="prod_description">
                    Its  Bahama like fragrance will treat you to a tropical island vacation. Fresh greenery, lavender, vanilla, rose,...
                </p>
                <div class="button">
                    <p class="price">$11.95</p>
                    <!--                <a href="#"><img class="share" src="images/icons/share1.jpg"/></a>-->
                    <a href="your_cart.php"><button class="continueBtn" style="width: 65%; margin-left: 7%;" >Add to Cart</button></a>
                </div>
            </div>
        </div>
        </a>
    </div>



<!--    CRAFTSMEN-->
    <h3>Craftsmen main page</h3>

    <div class="xs">

    <div class="card-container">
<!--        FIRST-->
        <div class="card">
            <img src="images/craftsman/craftHome/craftsman2.jpg">
            <div class="card-content">
                <a href="craftman_johntomsBBQ.php"><h4 style="margin-bottom:0px;">John Tom's BBQ</h4></a>
                <p class="location" style="font-size: 12px; margin-left: 0; text-align: left; margin-top:0;">Muncie, IN | a <span style="font-size: 16px; font-family: ClickerScript-Regular, serif;">Good</span> Craftsman since 2018</p>
                <p class="prod_description">
                    John Tom Branson had a very non-traditional background. Southerner, turned midwesterner. Assembly-line factory worker, turned...
                </p>
            </div>
        </div>
<!--        SECOND-->
        <div class="card">
            <img src="images/craftsman/craftHome/craftsman2.jpg">
            <div class="card-content">
                <a href="craftman.php"><h4 style="margin-bottom:0px;">Excepteur Sint</h4></a>
                <p class="location" style="font-size: 12px; margin-left: 0; text-align: left; margin-top:0;">
                    A <span style="font-size: 16px; font-family: ClickerScript-Regular, serif;">Good</span> Craftsman since 2018<br>
                    Muncie, IN</p>
                <p class="prod_description">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.
                </p>
            </div>
        </div>
<!--        THIRD-->
        <div class="card">
            <img src="images/craftsman/craftHome/craftsman3.png">
            <div class="card-content">
                <a href="craftman.php"><h4 style="margin-bottom:0px;">Excepteur Sint</h4></a>
                <p class="location" style="font-size: 12px; margin-left: 0; text-align: left; margin-top:0;">
                    Muncie, IN<br>
                    <span style="font-size: 16px; font-family: ClickerScript-Regular, serif;">Good</span> Craftsman since 2018<br>
                    </p>
                <p class="prod_description">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.
                </p>
            </div>
        </div>
<!--        FOURTH-->
        <div class="card">
            <img src="images/craftsman/craftHome/craftsman4-small.jpg">
            <div class="card-content">
                <a href="craftman.php"><h4 style="margin-bottom:0px;">Excepteur Sint</h4></a>
                <p class="location" style="font-size: 12px; margin-left: 0; text-align: left; margin-top:0;">
                    Muncie, IN<br>
                    Good Craftsman since 2018<br>
                </p>
                <p class="prod_description">
                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                    anim id est laborum.
                </p>
            </div>
        </div>

<!--        <div class="card">-->
<!--            <img src="images/craftsman/craftHome/craftsman9-small.jpg">-->
<!--            <div class="card-content">-->
<!--                <a href="craftman.php"><h3>Excepteur Sint</h3></a>-->
<!--                <p>-->
<!--                    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla-->
<!--                    pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit-->
<!--                    anim id est laborum.-->
<!--                </p>-->
<!--                <a href="#"><img class="share" src="images/icons/share1.jpg"/></a>-->
<!--            </div>-->
<!--        </div>-->

        </div>

    </div>
</div>


<!--FOOTER-->
<?php
include './includes/footer.inc.php';
?>

</div><!--end container-->


