<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edustage Education</title>
    <?php $this->load->view('include/css')?>

</head>

<body>
<?php $this->load->view('include/header');
?>

<!--================ Start Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <p class="text-uppercase">
                            Or register
                        </p>
                        <h2 class="text-uppercase mt-4 mb-5">
                            Login to get our services
                        </h2>
                        <div>
                            <a href="#" class="primary-btn2 mb-3 mb-sm-0">learn more</a>
                            <a href="#" class="primary-btn ml-sm-3 ml-0">see course</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================ End Home Banner Area =================-->
<div class="section-top-border">
    <div class="row">
        <div class="col-lg-8 col-md-8 offset-lg-2 ">
            <h3 class="mb-30 title_color">Form Element</h3>
            <form action="<?php echo base_url('admin/')?>" method="post">
                <div class="mt-10">
                    <input type="text" name="user_name" placeholder="User Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required="" class="single-input">
                </div>
                <div class="input-group-icon mt-10">
                    <div class="icon"><i class="ti-key" aria-hidden="true"></i></div>
                    <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" class="single-input">
                </div>
                <div class="input-group-lg mt-10">
                    <input type="submit"   class="single-input-accent button">
                    <div class="icon"><i class="ti-arrow-circle-right" aria-hidden="true"></i></div>
                </div>
            </form>
        </div>
    </div>
</div>

<!--================ Start footer Area  =================-->
<footer class="footer-area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Top Products</h4>
                <ul>
                    <li><a href="#">Managed Website</a></li>
                    <li><a href="#">Manage Reputation</a></li>
                    <li><a href="#">Power Tools</a></li>
                    <li><a href="#">Marketing Service</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Features</h4>
                <ul>
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Brand Assets</a></li>
                    <li><a href="#">Investor Relations</a></li>
                    <li><a href="#">Terms of Service</a></li>
                </ul>
            </div>
            <div class="col-lg-2 col-md-6 single-footer-widget">
                <h4>Resources</h4>
                <ul>
                    <li><a href="#">Guides</a></li>
                    <li><a href="#">Research</a></li>
                    <li><a href="#">Experts</a></li>
                    <li><a href="#">Agencies</a></li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-6 single-footer-widget">
                <h4>Newsletter</h4>
                <p>You can trust us. we only send promo offers,</p>
                <div class="form-wrap" id="mc_embed_signup">
                    <form
                        target="_blank"
                        action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                        method="get"
                        class="form-inline"
                    >
                        <input
                            class="form-control"
                            name="EMAIL"
                            placeholder="Your Email Address"
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Your Email Address'"
                            required=""
                            type="email"
                        />
                        <button class="click-btn btn btn-default">
                            <span>subscribe</span>
                        </button>
                        <div style="position: absolute; left: -5000px;">
                            <input
                                name="b_36c4fd991d266f23781ded980_aefe40901a"
                                tabindex="-1"
                                value=""
                                type="text"
                            />
                        </div>

                        <div class="info"></div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row footer-bottom d-flex justify-content-between">
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            <div class="col-lg-4 col-sm-12 footer-social">
                <a href="#"><i class="ti-facebook"></i></a>
                <a href="#"><i class="ti-twitter"></i></a>
                <a href="#"><i class="ti-dribbble"></i></a>
                <a href="#"><i class="ti-linkedin"></i></a>
            </div>
        </div>
    </div>
</footer>
<!--================ End footer Area  =================-->
<?php $this->load->view('include/js')?>
</body>
</html>
