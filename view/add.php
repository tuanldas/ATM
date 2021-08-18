
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact V4</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <!--===============================================================================================-->
</head>
<body>


<div class="container-contact100">
    <div class="wrap-contact100">
        <form class="contact100-form validate-form" method="post">
				<span class="contact100-form-title">
					Say Hello!
				</span>

            <div class="wrap-input100 validate-input" data-validate="Name is required">
                <span class="label-input100">User 1</span>
                <input class="input100" type="text" name="user1" placeholder="Enter your name">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">User 2 </span>
                <input class="input100" type="text" name="user2" placeholder="Id 1">
                <span class="focus-input100"></span>
            </div>

            <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                <span class="label-input100">Content </span>
                <input class="input100" type="text" name="content" placeholder="content">
                <span class="focus-input100"></span>
            </div>


            <div class="wrap-input100 validate-input" data-validate = "Id 2">
                <span class="label-input100">Amount</span>
                <textarea class="input100" name="amount" placeholder="amount"></textarea>
                <span class="focus-input100"></span>
            </div>

            <div class="container-contact100-form-btn">
                <div class="wrap-contact100-form-btn">
                    <div class="contact100-form-bgbtn"></div>
                    <button class="contact100-form-btn">
							<span>
								Submit
								<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
							</span>
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>



<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<script>
    $(".selection-2").select2({
        minimumResultsForSearch: 20,
        dropdownParent: $('#dropDownSelect1')
    });
</script>
<!--===============================================================================================-->
<script src="vendor/daterangepicker/moment.min.js"></script>
<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
</script>
<style>




    /*//////////////////////////////////////////////////////////////////
    [ FONT ]*/

    @font-face {
        font-family: Poppins-Regular;
        src: url('../fonts/poppins/Poppins-Regular.ttf');
    }

    @font-face {
        font-family: Poppins-Medium;
        src: url('../fonts/poppins/Poppins-Medium.ttf');
    }

    @font-face {
        font-family: Poppins-Bold;
        src: url('../fonts/poppins/Poppins-Bold.ttf');
    }

    @font-face {
        font-family: Poppins-SemiBold;
        src: url('../fonts/poppins/Poppins-SemiBold.ttf');
    }




    /*//////////////////////////////////////////////////////////////////
    [ RESTYLE TAG ]*/

    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body, html {
        height: 100%;
        font-family: Poppins-Regular, sans-serif;
    }

    /*---------------------------------------------*/
    a {
        font-family: Poppins-Regular;
        font-size: 14px;
        line-height: 1.7;
        color: #666666;
        margin: 0px;
        transition: all 0.4s;
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
    }

    a:focus {
        outline: none !important;
    }

    a:hover {
        text-decoration: none;
    }

    /*---------------------------------------------*/
    h1,h2,h3,h4,h5,h6 {
        margin: 0px;
    }

    p {
        font-family: Poppins-Regular;
        font-size: 14px;
        line-height: 1.7;
        color: #666666;
        margin: 0px;
    }

    ul, li {
        margin: 0px;
        list-style-type: none;
    }


    /*---------------------------------------------*/
    input {
        outline: none;
        border: none;
    }

    textarea {
        outline: none;
        border: none;
    }

    textarea:focus, input:focus {
        border-color: transparent !important;
    }

    input:focus::-webkit-input-placeholder { color:transparent; }
    input:focus:-moz-placeholder { color:transparent; }
    input:focus::-moz-placeholder { color:transparent; }
    input:focus:-ms-input-placeholder { color:transparent; }

    textarea:focus::-webkit-input-placeholder { color:transparent; }
    textarea:focus:-moz-placeholder { color:transparent; }
    textarea:focus::-moz-placeholder { color:transparent; }
    textarea:focus:-ms-input-placeholder { color:transparent; }

    input::-webkit-input-placeholder { color: #adadad;}
    input:-moz-placeholder { color: #adadad;}
    input::-moz-placeholder { color: #adadad;}
    input:-ms-input-placeholder { color: #adadad;}

    textarea::-webkit-input-placeholder { color: #adadad;}
    textarea:-moz-placeholder { color: #adadad;}
    textarea::-moz-placeholder { color: #adadad;}
    textarea:-ms-input-placeholder { color: #adadad;}

    /*---------------------------------------------*/
    button {
        outline: none !important;
        border: none;
        background: transparent;
    }

    button:hover {
        cursor: pointer;
    }

    iframe {
        border: none !important;
    }


    /*---------------------------------------------*/
    .container {
        max-width: 1200px;
    }





    /*//////////////////////////////////////////////////////////////////
    [ Contact ]*/

    .container-contact100 {
        width: 100%;
        min-height: 100vh;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        align-items: center;
        padding: 15px;
        background: #a64bf4;
        background: -webkit-linear-gradient(45deg, #00dbde, #fc00ff);
        background: -o-linear-gradient(45deg, #00dbde, #fc00ff);
        background: -moz-linear-gradient(45deg, #00dbde, #fc00ff);
        background: linear-gradient(45deg, #00dbde, #fc00ff);

    }

    .wrap-contact100 {
        width: 500px;
        background: #fff;
        border-radius: 10px;
        overflow: hidden;
        padding: 42px 55px 45px 55px;
    }


    /*------------------------------------------------------------------
    [ Form ]*/

    .contact100-form {
        width: 100%;
    }

    .contact100-form-title {
        display: block;
        font-family: Poppins-Bold;
        font-size: 39px;
        color: #333333;
        line-height: 1.2;
        text-align: center;
        padding-bottom: 44px;
    }



    /*------------------------------------------------------------------
    [ Input ]*/

    .wrap-input100 {
        width: 100%;
        position: relative;
        border-bottom: 2px solid #d9d9d9;
        padding-bottom: 13px;
        margin-bottom: 27px;
    }

    .label-input100 {
        font-family: Poppins-Regular;
        font-size: 13px;
        color: #666666;
        line-height: 1.5;
        padding-left: 5px;
    }

    .input100 {
        display: block;
        width: 100%;
        background: transparent;
        font-family: Poppins-Medium;
        font-size: 18px;
        color: #333333;
        line-height: 1.2;
        padding: 0 5px;
    }

    .focus-input100 {
        position: absolute;
        display: block;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        pointer-events: none;
    }

    .focus-input100::before {
        content: "";
        display: block;
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 0;
        height: 2px;

        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;

        background: #7f7f7f;
    }


    /*---------------------------------------------*/
    input.input100 {
        height: 40px;
    }


    textarea.input100 {
        min-height: 110px;
        padding-top: 9px;
        padding-bottom: 13px;
    }


    .input100:focus + .focus-input100::before {
        width: 100%;
    }

    .has-val.input100 + .focus-input100::before {
        width: 100%;
    }


    /*------------------------------------------------------------------
    [ Button ]*/
    .container-contact100-form-btn {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        padding-top: 13px;
    }

    .wrap-contact100-form-btn {
        width: 100%;
        display: block;
        position: relative;
        z-index: 1;
        border-radius: 25px;
        overflow: hidden;
        margin: 0 auto;
    }

    .contact100-form-bgbtn {
        position: absolute;
        z-index: -1;
        width: 300%;
        height: 100%;
        background: #a64bf4;
        background: -webkit-linear-gradient(left, #00dbde, #fc00ff, #00dbde, #fc00ff);
        background: -o-linear-gradient(left, #00dbde, #fc00ff, #00dbde, #fc00ff);
        background: -moz-linear-gradient(left, #00dbde, #fc00ff, #00dbde, #fc00ff);
        background: linear-gradient(left, #00dbde, #fc00ff, #00dbde, #fc00ff);
        top: 0;
        left: -100%;

        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }

    .contact100-form-btn {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0 20px;
        width: 100%;
        height: 50px;

        font-family: Poppins-Medium;
        font-size: 16px;
        color: #fff;
        line-height: 1.2;
    }

    .wrap-contact100-form-btn:hover .contact100-form-bgbtn {
        left: 0;
    }

    .contact100-form-btn i {
        -webkit-transition: all 0.4s;
        -o-transition: all 0.4s;
        -moz-transition: all 0.4s;
        transition: all 0.4s;
    }
    .contact100-form-btn:hover i {
        -webkit-transform: translateX(10px);
        -moz-transform: translateX(10px);
        -ms-transform: translateX(10px);
        -o-transform: translateX(10px);
        transform: translateX(10px);
    }


    /*------------------------------------------------------------------
    [ Responsive ]*/

    @media (max-width: 576px) {
        .wrap-contact100 {
            padding: 72px 15px 65px 15px;
        }
    }



    /*------------------------------------------------------------------
    [ Alert validate ]*/

    .validate-input {
        position: relative;
    }

    .alert-validate::before {
        content: attr(data-validate);
        position: absolute;
        max-width: 70%;
        background-color: #fff;
        border: 1px solid #c80000;
        border-radius: 2px;
        padding: 4px 25px 4px 10px;
        top: 58%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 2px;
        pointer-events: none;

        font-family: Poppins-Regular;
        color: #c80000;
        font-size: 13px;
        line-height: 1.4;
        text-align: left;

        visibility: hidden;
        opacity: 0;

        -webkit-transition: opacity 0.4s;
        -o-transition: opacity 0.4s;
        -moz-transition: opacity 0.4s;
        transition: opacity 0.4s;
    }

    .alert-validate::after {
        content: "\f06a";
        font-family: FontAwesome;
        display: block;
        position: absolute;
        color: #c80000;
        font-size: 16px;
        top: 58%;
        -webkit-transform: translateY(-50%);
        -moz-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        -o-transform: translateY(-50%);
        transform: translateY(-50%);
        right: 8px;
    }

    .alert-validate:hover:before {
        visibility: visible;
        opacity: 1;
    }

    @media (max-width: 992px) {
        .alert-validate::before {
            visibility: visible;
            opacity: 1;
        }
    }



    /*//////////////////////////////////////////////////////////////////
    [ Restyle Select2 ]*/

    .select2-container {
        display: block;
        max-width: 100% !important;
        width: auto !important;
    }

    .select2-container .select2-selection--single {
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        align-items: center;
        background-color: transparent;
        border: none;
        height: 40px;
        outline: none;
        position: relative;
    }

    /*------------------------------------------------------------------
    [ in select ]*/
    .select2-container .select2-selection--single .select2-selection__rendered {
        font-family: Poppins-Medium;
        font-size: 18px;
        color: #333333;
        line-height: 1.2;
        padding-left: 5px ;
        background-color: transparent;
    }

    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: 100%;
        top: 50%;
        transform: translateY(-50%);
        right: 10px;
        display: -webkit-box;
        display: -webkit-flex;
        display: -moz-box;
        display: -ms-flexbox;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .select2-selection__arrow b {
        display: none;
    }

    .select2-selection__arrow::before {
        content: '';
        display: block;

        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        border-bottom: 5px solid #999999;
        margin-bottom: 2px;
    }

    .select2-selection__arrow::after {
        content: '';
        display: block;

        border-right: 5px solid transparent;
        border-left: 5px solid transparent;
        border-top: 5px solid #999999;
    }

    /*------------------------------------------------------------------
    [ Dropdown option ]*/
    .select2-container--open .select2-dropdown {
        z-index: 1251;
        border: 0px solid #e5e5e5;
        border-radius: 0px;
        background-color: white;

        box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
        -moz-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
        -webkit-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
        -o-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
        -ms-box-shadow: 0 3px 10px 0px rgba(0, 0, 0, 0.2);
    }

    .select2-dropdown--above {top: -30px;}
    .select2-dropdown--below {top: 8px;}

    .select2-container .select2-results__option[aria-selected] {
        padding-top: 10px;
        padding-bottom: 10px;
    }

    .select2-container .select2-results__option[aria-selected="true"] {
        background: #a64bf4;
        background: -webkit-linear-gradient(right, #00dbde, #fc00ff);
        background: -o-linear-gradient(right, #00dbde, #fc00ff);
        background: -moz-linear-gradient(right, #00dbde, #fc00ff);
        background: linear-gradient(right, #00dbde, #fc00ff);
        color: white;
    }

    .select2-container .select2-results__option--highlighted[aria-selected] {
        background: #a64bf4;
        background: -webkit-linear-gradient(right, #00dbde, #fc00ff);
        background: -o-linear-gradient(right, #00dbde, #fc00ff);
        background: -moz-linear-gradient(right, #00dbde, #fc00ff);
        background: linear-gradient(right, #00dbde, #fc00ff);
        color: white;
    }

    .select2-results__options {
        font-family: Poppins-Regular;
        font-size: 15px;
        color: #333333;
        line-height: 1.2;
    }

    .select2-search--dropdown .select2-search__field {
        border: 1px solid #aaa;
        outline: none;
        font-family: Poppins-Regular;
        font-size: 15px;
        color: #333333;
        line-height: 1.2;
    }





</style>

</body>
</html>
