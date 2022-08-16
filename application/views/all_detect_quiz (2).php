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
                    <h2 class="mb-3">Find your level</h2>
                    <p>
                        you should test your level every month to update your level
                    </p>
                </div>
            </div>
        </div>


        <div class="row justify-content-center d-flex align-items-center">
        <?php
        foreach ($quizes as $quize){

            echo'<div class="col-lg-4 col-md-6 col-sm-12 single-trainer">
                <div class="single_course">
                    <div class="course_head">
                        <a href="'.base_url('detect/start/').$quize->id.'">
                            <img class="img-fluid" src="http://localhost/DS/resources/r22.jpg" alt="" /> </a>
                    </div>

                    <div class="course_content">
                        <a href="'.base_url('detect/start/').$quize->id.'">
                            <span class="price" style="width: 150px" >'.$quize->name.'</span>
                            </a>

                        <p>
                           Click to test your '.$quize->name.' level. 
                        </p>
                    </div>
                </div>

            </div>
          
        ';}
        ?>
        </div>

       <div class="row justify-content-center d-flex align-items-center"  style="background: #f1f9ff;border: solid;border-radius: 40px; margin-left: 19%;
         width: 700px; text-align: center;padding-bottom: 10px;padding-top: 20px;">
            <div class=" col-lg-8 col-md-6 col-sm-12 single-trainer ">

                <h2>Tested Quizzes</h2>

                    <div >
                        <table class="table-striped table" >
                            <?php
                            echo'<tr style="background-color: #040b3573; color: white;"><th>Quize Title</th><th>Mark</th></tr>';
                            foreach ($taken_quizes as $quize){

                                echo '<tr><td> '.$quize->name.'</td><td>'.$quize->level_id.'</td> </tr>';

                            }
                            ?>
                        </table>
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

</body>
</html>
