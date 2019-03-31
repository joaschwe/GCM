<?php
require './includes/header.inc.php';
require './includes/nav.inc.php';
?>

<style>
    .content-info {
        margin:0;
        width: 100%;
        /*background-color: orange;*/
        margin-bottom:40px;
        box-sizing: border-box;
    }
    .content-info p {
        width:100%;
        /*margin-left: 70px;*/
        /*padding-right:60px;*/

        /*background-color: tan;*/
    }
    h3 span {
        font-size: 20px;
    }
    .title-container {
        display: flex;
        margin-bottom:30px;
    }

</style>


<div class="container">

        <!--about content-->
        <div class="craftmanContent">

            <!--about image-->
            <div class="flex-craft">
                <div class="craft-img">
                    <img src="assets/images/Good%2010-small.jpg">
                </div>


                <div class="maintitle-craft">
                    <div class="title-container">
                    <img src="images/logos/GCM-knot.png" style="display: inline; margin-right:20px;">
                    <h3 class="clicker-sansSerif">About <span>Good Cause Market</span></h3>
<!--                    <h4 class="location">Location area here | a <span>Good</span> Craftsman since 2018</h4>-->
                    </div>


                    <div class="content-info">

                        <div id="unhide">
                            <div class="sec1 js_more">
                                <h4 class="sec1-title">What is Good Cause Market?</h4>
                                <p class="sec1-content">
                                    Good Cause Market was created out of a need to give charitable organizations a new and unique way to
                                    fundraise. The typical fundraiser for schools, churches, clubs and sports is a lot of work and
                                    organization. Fundraisers most often run for a short period of time and so the actual funds raised, are
                                    limited. Typically, there is an enormous amount of effort involved. Many fundraisers take a lot of
                                    planning time and a lot of volunteers. It lasts one day and boom, it's over! All that effort and
                                    hopefully it was worth it. But life is pretty compact these days and non-profits need something that
                                    will allow them to have revenue all year long with minimal commitment from volunteers and take even less
                                    time. GoodCauseMarket.com is an e-store that is open all the time. There is no time-span limit at Good
                                    Cause Market. Fundraising for the charitable organization becomes a steady stream of revenue. Plus, the
                                    hand-crafted, local, small business products that are offered, replace that unhealthy cookie dough or
                                    pizza fundraiser of yester year. Good Cause Market requires only the time it takes to shop for unique,
                                    artisan made crafts. 50% of the purchase is sent to the Cause. It's a way for customers to give back
                                    without breaking their back! We're glad you came. Now, go do some Fundshopping©!</p>
                            </div>
                        </div>

                        <div class="banner">
                            <a href="good_products.php"><button>Go Fundshopping!</button></a>
                        </div>

                    </div>
                </div>

            </div>


</div><!--end container-->

<!--FOOTER-->
<?php
include './includes/footer.inc.php'
?>


<!--
h3.title {
font-family: serif;
font-size: 42px;
font-weight: normal;
text-align: left;
width:100%;
margin-bottom:10px;
color:#6b6b6b;
}
h3.title span {
color: #8DC63F;
font-style: italic;
text-decoration: none;
font-family: "ClickerScript-Regular", serif;
font-size: 54px;
text-align: left;
/*padding-left:10px;*/
}
-->