<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/css')?>
    <?php $this->load->view('include/header') ?>
    <title>login</title>


</head>

<!--================ Start Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner d-flex align-items-center ">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Quizzes</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================ End Home Banner Area =================-->

<body>
<section class="trainer_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3">Check if there is a new quize</h2>
                    <p>
                        test it and see your mark
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center" >
            <div class="col-lg-6 col-md-6 col-sm-12 single-trainer">

                <div id="tabs" style="background-color: #f1f9ff">
                    <ul>
                        <li><a href="#tabs-1">New Quizzes</a></li>
                        <li><a href="#tabs-2">Tested Quizzes</a></li>
                    </ul>
                    <div id="tabs-1">
                        <ul>
                            <?php
                            foreach ($quizes as $quize){
                                echo '<li><u style="color: blue"><a style="color: blue" href="'.base_url('detect/start/').$quize->id.'">'.$quize->name.'</a></u></li>';
                            }
                            ?>
                        </ul>
                    </div>
                    <div id="tabs-2">
                        <table class="table-striped table">
                            <?php
                            echo'<tr style="background-color: #040b3573;"><th>Quize Title</th><th>Mark</th></tr>';
                            foreach ($taken_quizes as $quize){

                                echo '<tr><td> '.$quize->name.'</td><td>'.$quize->level_id.'</td> </tr>';

                            }
                            ?>
                        </table>
                    </div>
                </div>


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
<script>
    $( function() {
        $( "#tabs" ).tabs();
    } );
</script>
</body>
</html>
