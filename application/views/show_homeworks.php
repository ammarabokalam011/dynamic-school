

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
                        <h2>Homworks</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->





<section class="trainer_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3">new homeworks</h2>
                    <p>
                        enhance your level by training
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center" style="background: #f1f9ff;border: solid;
        margin-top:-40px;padding-top:60px;padding-bottom:20px;padding-left:40px;padding-right: 20px;">

            <?php foreach ($homeworks as $homework){
                echo'

            <div class="col-lg-3 col-md-6 col-sm-12 single-trainer" style=" text-align: center ;background:white;margin-right:30px;
             padding-top: 10px;padding-bottom: 30px; ">
             <a  href="'.base_url('homework/open_by_id/').$homework->id.'">
               
                    '.$homework->content.'
                   
                   
                    <div class="br"></div>
               </a>
            </div>';
            }?>
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