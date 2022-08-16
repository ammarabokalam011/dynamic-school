<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/header')?>

    <title>Blog</title>
    <?php $this->load->view('include/css')?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assest/icon_font/css/icon_font.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assest/css/jquery.transfer.css"/>

</head>

<body>



<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner_content text-center">
                        <p class="text-uppercase">
                            Best online education service In the world
                        </p>
                        <h2 class="text-uppercase mt-4 mb-5">
                            One Step Ahead This Season
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
<br><br><br><br><br>



<div class="container">
    <h1>jQuery Transfer: Dual Listbox Plugin Example</h1>
    <div style="margin-top:50px">
        Selected: <span id="selectedItemSpan"></span>
    </div>
    <div class="transfer"></div>

</div>




<br><br><br><br><br>
<!--================Blog Area =================-->
<section class="blog_area section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a class="active" href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Mark wiens<i class="ti-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="ti-calendar"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="ti-comment"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="<?php echo base_url('assest/')?>img/blog/main-blog/m-blog-1.jpg" alt="">
                                <div class="blog_details">
                                    <a href="<?php echo base_url('main/')?>single-blog">
                                        <h2>Astronomy Binoculars A Great Alternative</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get
                                        the MCSE study materials yourself at a fraction.</p>
                                    <a href="<?php echo base_url('main/')?>single-blog" class="blog_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a class="active" href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Mark wiens<i class="ti-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="ti-calendar"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="ti-comment"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="<?php echo base_url('assest/')?>img/blog/main-blog/m-blog-2.jpg" alt="">
                                <div class="blog_details">
                                    <a href="<?php echo base_url('main/')?>single-blog">
                                        <h2>The Basics Of Buying A Telescope</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get
                                        the MCSE study materials yourself at a fraction.</p>
                                    <a href="<?php echo base_url('main/')?>single-blog" class="blog_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a class="active" href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Mark wiens<i class="ti-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="ti-calendar"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="ti-comment"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="<?php echo base_url('assest/')?>img/blog/main-blog/m-blog-3.jpg" alt="">
                                <div class="blog_details">
                                    <a href="<?php echo base_url('main/')?>single-blog">
                                        <h2>The Glossary Of Telescopes</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get
                                        the MCSE study materials yourself at a fraction.</p>
                                    <a href="<?php echo base_url('main/')?>single-blog" class="blog_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a class="active" href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Mark wiens<i class="ti-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="ti-calendar"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="ti-comment"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="<?php echo base_url('assest/')?>img/blog/main-blog/m-blog-4.jpg" alt="">
                                <div class="blog_details">
                                    <a href="<?php echo base_url('main/')?>single-blog">
                                        <h2>The Night Sky</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get
                                        the MCSE study materials yourself at a fraction.</p>
                                    <a href="<?php echo base_url('main/')?>single-blog" class="blog_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="row blog_item">
                        <div class="col-md-3">
                            <div class="blog_info text-right">
                                <div class="post_tag">
                                    <a href="#">Food,</a>
                                    <a class="active" href="#">Technology,</a>
                                    <a href="#">Politics,</a>
                                    <a href="#">Lifestyle</a>
                                </div>
                                <ul class="blog_meta list">
                                    <li><a href="#">Mark wiens<i class="ti-user"></i></a></li>
                                    <li><a href="#">12 Dec, 2017<i class="ti-calendar"></i></a></li>
                                    <li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>
                                    <li><a href="#">06 Comments<i class="ti-comment"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="blog_post">
                                <img src="<?php echo base_url('assest/')?>img/blog/main-blog/m-blog-5.jpg" alt="">
                                <div class="blog_details">
                                    <a href="<?php echo base_url('main/')?>single-blog">
                                        <h2>Telescopes 101</h2>
                                    </a>
                                    <p>MCSE boot camps have its supporters and its detractors. Some people do not
                                        understand why you should have to spend money on boot camp when you can get
                                        the MCSE study materials yourself at a fraction.</p>
                                    <a href="<?php echo base_url('main/')?>single-blog" class="blog_btn">View More</a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-left"></i>
                                        </span>
                                </a>
                            </li>
                            <li class="page-item"><a href="#" class="page-link">01</a></li>
                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
                            <li class="page-item"><a href="#" class="page-link">03</a></li>
                            <li class="page-item"><a href="#" class="page-link">04</a></li>
                            <li class="page-item"><a href="#" class="page-link">09</a></li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-right"></i>
                                        </span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Posts">
                            <span class="input-group-btn">
                                    <button class="btn btn-default" type="button"><i class="ti-search"></i></button>
                                </span>
                        </div><!-- /input-group -->
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget author_widget">
                        <img class="author_img rounded-circle" src="<?php echo base_url('assest/')?>img/blog/author.png" alt="">
                        <h4>Charlie Barber</h4>
                        <p>Senior blog writer</p>
                        <div class="social_icon">
                            <a href="#"><i class="ti-facebook"></i></a>
                            <a href="#"><i class="ti-twitter"></i></a>
                            <a href="#"><i class="ti-github"></i></a>
                            <a href="#"><i class="ti-linkedin"></i></a>
                        </div>
                        <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you
                            should have to spend money on boot camp when you can get. Boot camps have itssuppor
                            ters andits detractors.</p>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Popular Posts</h3>
                        <div class="media post_item">
                            <img src="<?php echo base_url('assest/')?>img/blog/popular-post/post1.jpg" alt="post">
                            <div class="media-body">
                                <a href="<?php echo base_url('main/')?>blog-details">
                                    <h3>Space The Final Frontier</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="<?php echo base_url('assest/')?>img/blog/popular-post/post2.jpg" alt="post">
                            <div class="media-body">
                                <a href="<?php echo base_url('main/')?>blog-details">
                                    <h3>The Amazing Hubble</h3>
                                </a>
                                <p>02 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="<?php echo base_url('assest/')?>img/blog/popular-post/post3.jpg" alt="post">
                            <div class="media-body">
                                <a href="<?php echo base_url('main/')?>blog-details">
                                    <h3>Astronomy Or Astrology</h3>
                                </a>
                                <p>03 Hours ago</p>
                            </div>
                        </div>
                        <div class="media post_item">
                            <img src="<?php echo base_url('assest/')?>img/blog/popular-post/post4.jpg" alt="post">
                            <div class="media-body">
                                <a href="<?php echo base_url('main/')?>blog-details">
                                    <h3>Asteroids telescope</h3>
                                </a>
                                <p>01 Hours ago</p>
                            </div>
                        </div>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget ads_widget">
                        <a href="#"><img class="img-fluid" src="<?php echo base_url('assest/')?>img/blog/add.jpg" alt=""></a>
                        <div class="br"></div>
                    </aside>
                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Post Catgories</h4>
                        <ul class="list cat-list">
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Technology</p>
                                    <p>37</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Lifestyle</p>
                                    <p>24</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Fashion</p>
                                    <p>59</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Art</p>
                                    <p>29</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Food</p>
                                    <p>15</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Architecture</p>
                                    <p>09</p>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="d-flex justify-content-between">
                                    <p>Adventure</p>
                                    <p>44</p>
                                </a>
                            </li>
                        </ul>
                        <div class="br"></div>
                    </aside>
                    <aside class="single-sidebar-widget newsletter_widget">
                        <h4 class="widget_title">Newsletter</h4>
                        <p>
                            Here, I focus on a range of items and features that we use in life without
                            giving them a second thought.
                        </p>
                        <div class="form-group d-flex flex-row">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="ti-email" aria-hidden="true"></i></div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                                       onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                            </div>
                            <a href="#" class="bbtns">Subcribe</a>
                        </div>
                        <p class="text-bottom">You can unsubscribe at any time</p>
                        <div class="br"></div>
                    </aside>
                    <aside class="single-sidebar-widget tag_cloud_widget">
                        <h4 class="widget_title">Tag Clouds</h4>
                        <ul class="list">
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Art</a></li>
                            <li><a href="#">Adventure</a></li>
                            <li><a href="#">Food</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Adventure</a></li>
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

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
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous"></script>
<script type="text/javascript" src="<?php echo base_url()?>assest/js/jquery.transfer.js"></script>
<script type="text/javascript">
    var languages = [
        {
            "language": "jQuery",
            "value": 122
        },
        {
            "language": "AngularJS",
            "value": 132
        },
        {
            "language": "ReactJS",
            "value": 422
        },
        {
            "language": "VueJS",
            "value": 232
        },
        {
            "language": "JavaScript",
            "value": 765
        },
        {
            "language": "Java",
            "value": 876
        },
        {
            "language": "Python",
            "value": 453
        },
        {
            "language": "TypeScript",
            "value": 125
        },
        {
            "language": "PHP",
            "value": 633
        },
        {
            "language": "Ruby on Rails",
            "value": 832
        }
    ];

    var groupData = [
        {
            "groupName": "JavaScript",
            "groupData": [
                {
                    "language": "jQuery",
                    "value": 122
                },
                {
                    "language": "AngularJS",
                    "value": 643
                },
                {
                    "language": "ReactJS",
                    "value": 422
                },
                {
                    "language": "VueJS",
                    "value": 622
                }
            ]
        },
        {
            "groupName": "Popular",
            "groupData": [
                {
                    "language": "JavaScript",
                    "value": 132
                },
                {
                    "language": "Java",
                    "value": 112
                },
                {
                    "language": "Python",
                    "value": 124
                },
                {
                    "language": "TypeScript",
                    "value": 121
                },
                {
                    "language": "PHP",
                    "value": 432
                },
                {
                    "language": "Ruby on Rails",
                    "value": 421
                }
            ]
        }
    ];

    var settings = {
        "inputId": "languageInput",
        "data": languages,
        "groupData": groupData,
        "itemName": "language",
        "groupItemName": "groupName",
        "groupListName" : "groupData",
        "container": "transfer",
        "valueName": "value",
        "callable" : function (data, names) {
            console.log("Selected ID：" + data)
            $("#selectedItemSpan").text(names)
        }
    };

    Transfer.transfer(settings);
</script>

</html>