/**
 * Created by joaschwe on 4/16/17.
 */

function setBindings() {

    //content delimiter for product tiles

        // if ($(window).width() >= 1050 && $(window).width() <= 1100){
        //     $(".prod_description").each(function(i){
        //         len=$(this).text().length;
        //         if(len>80)
        //         {
        //             $(this).text($(this).text().substr(0,50)+'...more');
        //         }
        //     });
        // }

    //content shortener -- read more expander
    // $(function () {
    //     $('#unhide').removeClass('hidden');
    // });

        jQuery('.js_more').readmore({
            speed: 300,
            collapsedHeight: 100,
            moreLink: '<a href="#">...more</a>',
            lessLink: '<a href="#">close</a>',
            heightMargin: 16
        });












    // character delimiter for primary cards
    $(function(){
        $(".prod_description").each(function(i){
            len=$(this).text().length;
            if(len>10)
            {
                var url = '<a href="good_product_item.php"><span style="color: #8DC63F;">more<span>';
                var moreStmt = $(this).text($(this).text().substr(0,104)+'...').append(url);
                // var more = $(this).css('color', 'green');

            }
        });
    });


    // character delimiter for secondary prod cards
    // $(function() {
    //     $(".quote").each(function(i){
    //         len=$(this).text().length;
    //         if(len>10)
    //         {
    //             $(this).text($(this).text().substr(0,350)+'...').append('<span style="color: #8DC63F;">more');
    //         }
    //     });
    // });


    // character delimiter for secondary prod cards
    $(function(){
        $(".prod_description_second").each(function(i){
            len=$(this).text().length;
            if(len>10)
            {
                var moreStmt = $(this).text($(this).text().substr(0,58)+'...').append('<span style="color: #8DC63F;">more');
                // var more = $(this).css('color', 'green');

            }
        });
    });

    // character delimiter for text box overlay on secondary prod cards
    $(function(){
        $(".text").each(function(i){
            len=$(this).text().length;
            if(len>10)
            {
                var moreStmt = $(this).text($(this).text().substr(0,195)+'...').append('<span style="color: #8DC63F;">more');
                // var more = $(this).css('color', 'green');

            }
        });
    });

    // character delimiter for text box overlay on primary prod cards
    $(function(){
        $(".js_text-prod-primary").each(function(i){
            len=$(this).text().length;
            if(len>10)
            {
                var moreStmt = $(this).text($(this).text().substr(0,150)+'...').append('<span style="color: #8DC63F;">more');

            }
        });
    });

    $(function(){
        $(".craft_description").each(function(i){
            len=$(this).text().length;
            if(len>10)
            {
                // var url = '<a href="good_product_item.php"><span style="color: #8DC63F;">more<span>';
                var more = '<span style="color: #8DC63F;">more<span>';
                var moreStmt = $(this).text($(this).text().substr(0,104)+'...').append(more);
                // var more = $(this).css('color', 'green');

            }
        });
    });

        //checking card width when page loads
    prodDescrip = 0;
    $(function() {
        $(".xs").each(function (i) {

            // if ($(this).width(prodDescrip)) {
                prodDescrip = $(this).width();
            //     console.log("prod descrip content is 200px wide")
                console.log(prodDescrip);
            // }
        })
    });

        //faqs
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function () {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }


        // MODAL
// When the user clicks the button, open the modal
        $('#loginBtn').click(function () {
            $('.modal').css('display', 'block');
        });

// When the user clicks on <span> (x), close the modal
        $('span').click(function (e) {
            $('.modal').css('display', 'none');
        });

// When the user clicks anywhere outside of the modal, close it
        $('window').click(function (e) {
            if (e.target == modal) {
                $(this).css('display', 'none');
            }
        });

        // When the user clicks the login button, go to user page
        $('button#user-login').click(function () {
            var go_to_url = 'profile.php';
            //this will redirect us in new tab
            window.open(go_to_url, '_blank');
        });

        //when the user clicks the sign up button, go to sign up page
        $('button#user-signup').click(function () {
            var go_to_url = 'signup.php';
            //this will redirect us in new tab
            window.open(go_to_url, '_blank');
        });

        $('button#back').click(function () {
            var url = "order_complete.php";
            $(location).attr('href', url);
        });

        //form copy ship info to billing
        $("#checkbox1").change(function () {
            if (this.checked) {
                //get the values of the filled fields
                $email = $("#email").val();
                $fname = $("#fname").val();
                $lname = $("#lname").val();
                $address = $("#address").val();
                $apt = $("#apt").val();
                $zip = $("#zip").val();
                $city = $("#city").val();
                $state = $("#state").val();
                console.log("name");
                // then add those values to your billing infor window fields

                $("#bill_email").val($email);
                $("#bill_fname").val($fname);
                $("#bill_lname").val($lname);
                $("#bill_address").val($address);
                $("#bill_apt").val($apt);
                $("#bill_zip").val($zip);
                $("#bill_city").val($city);
                $("#bill_state").val($state);

                // then form will be automatically filled ..

            }
            else {
                $("#bill_email").val('');
                $("#bill_name").val('');
                $("#bill_address").val('');
                $("#bill_apt").val('');
                $("#bill_zip").val('');
                $("#bill_city").val('');
                $("#bill_state").val('');
            }
        });


        $("button.continue").click(function () {
            $("fieldset.billingInfo").slideDown("fast");
        });
        $("button.payment").click(function () {
            $("fieldset.paymentInfo").slideDown("fast");
        });

        $("button.showAll").click(function (evt) {
            $("fieldset.billingInfo").slideDown("fast");
            $("fieldset.paymentInfo").slideDown("fast");
            evt.preventDefault();
        });

        // $( function() {
        //     $( "#slider-range" ).slider({
        //         range: true,
        //         min: 0,
        //         max: 500,
        //         values: [ 75, 300 ],
        //         slide: function( event, ui ) {
        //             $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        //         }
        //     });
        //     $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        //         " - $" + $( "#slider-range" ).slider( "values", 1 ) );
        // } );


//        $("button.checkout").click(function (evt) {
//            evt.preventDefault();
//        })
    }



// $(document).ready(function () {
//     setBindings();
// })

    $(document).ready(function() {
    setBindings();

})