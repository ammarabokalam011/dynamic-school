<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/css')?>
    <?php $this->load->view('include/header') ?>
    <title>subjects</title>


</head>




<!--================ Start Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner d-flex align-items-center ">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>the article</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================ end Home Banner Area =================-->



<section class="blog_area section_gap">
    <div class="container">

                <div class="blog_left_sidebar">
<?php foreach ($article as $item){
    echo'
                    <article class="row blog_item" >
                        <div class="col-md-2">
                            <div class="blog_info text-right">
                                
                                <ul class="blog_meta list">
                                    <li>'.$item->teacher_name.'  <i class="ti-user"></i></li>
                                    <li>'.$item->Date.'  <i class="ti-calendar"></i></li>
                                    <li>1.2M Views  <i class="ti-eye"></i></li>
                                    <li>06 Comments  <i class="ti-comment"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9"style="border-radius: 20px;background: #f1f9ff;border: solid; padding-top:20px;padding-bottom:20px;padding-left:40px;padding-right: 20px">
                            <div class="blog_post">                          
                                <div class="blog_details">
                                    
                                        
                                    
                                    <p>'.$item->content.'</p>
                                    
                                </div>
                            </div>
                        </div>
                    </article>';
            }?>
                </div>

    </div>
</section>







<!--================ Start footer Area =================-->
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