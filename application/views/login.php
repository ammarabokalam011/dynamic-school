<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/css')?>
    <?php $this->load->view('include/header') ?>
    <title>login</title>

    <style>
        .hi{background-image: url("http://localhost/DS/resources/r8.jpg");
            background-position: center; background-repeat: no-repeat;background-size: cover;
        }
    </style>
</head>




<!--================ Start Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner d-flex align-items-center ">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Log In <br>to get our services</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>





<!--================ End Home Banner Area =================-->
<body >
<section class=" blog_area section_gap hi" >
    <div class="container ">
        <div class="row" >

            <div class="col-lg-6 col-md-6 comment-form" style="margin-top: 0px;border: solid;border-color: #fdc632; margin-bottom:0px;background:#1024334a;">
                <img style=" margin-bottom: 20px" class="logo-2" src="<?php echo base_url('assest/')?>img/logo2.png" alt="" />
                <form action="<?php echo base_url('login/validation')?>" method="post">
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="ti-user" aria-hidden="true"></i></div>
                        <input type="text" name="user_name" placeholder="User Name"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input">
                    </div>
                    <div class="input-group-icon mt-10">
                        <div class="icon"><i class="ti-lock" aria-hidden="true"></i></div>
                        <input type="password" name="password" placeholder="Password"
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" class="single-input">
                    </div>
                    <div class="input-group-lg mt-10" >
                        <div class="icon"><i  aria-hidden="true" ></i></div>
                        <input type="submit"value="log in"style="cursor: pointer;"class=" primary-btn single-input-accent button">
                    </div>
                </form>
            </div>

        </div>
    </div>

</section>
<!--================ Start footer Area  =================-->
<footer class="footer-area  "style="margin-top: -50px;">
    <div class="container">

        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                <br>  This project is made by
                <a href="#" target="_blank">Rawan Altakheen</a> |
                <a href="#" target="_blank">Ammar Abo Klam</a> |
                <a href="#" target="_blank">Ghufran Duaibes</a> |
                <a href="#" target="_blank">Muohannad Afone</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <br>  <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-dribbble"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
            </div>
        </div>
        <br>
    </div>
</footer>
<!--================ End footer Area  =================-->
<?php $this->load->view('include/js')?>
</body>
</html>
