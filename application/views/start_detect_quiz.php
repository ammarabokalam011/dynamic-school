<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/css')?>
    <?php $this->load->view('include/header') ?>
    <?php $this->load->view('include/js')?>
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
                        <h2>Test your level</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="trainer_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3">Start Test</h2>
                    <p>
                        This is a quick test focus well and start.
                    </p>
                </div>
            </div>
        </div>
        <div class="justify-content-center d-flex align-items-center">
            <div class="justify-content-center d-flex align-items-center" style="background: #f1f9ff;border: solid;border-radius: 40px;
        margin-top:-40px;padding-top:60px;padding-bottom:20px;padding-left:40px;padding-right: 20px; width: 900px">

                <form  action="<?php echo base_url('detect/end')?>" method="post">
                    <input name="quiz_id" value="<?php echo $subject_id?>" type="hidden">
                    <?php foreach ($quastions as $quastion){

                        echo'  <div class="offset-2 col-lg-8 col-md-6 col-sm-12  " style=" background: white;border-radius: 50px;padding-top: 20px;padding-bottom: 20px;margin-bottom: 10px;padding-left: 35px;padding-right: 35px;">
               
               <h3 style="text-align: center">'.$quastion->question_body.'</h3>';

                        foreach ($quastion->choices as $choice){
                            echo'  <table><tr><td style=" padding-top: 0px;padding-left:50px;padding-bottom: 14px;padding-right: 15px;"><input name="answes[]" type="checkbox" value="'.$choice->id.'"></td><td>'.$choice->choice_body.'</td></tr></table>';
                        }

                        echo '  </div>';
                    }?>
                    <input class="single-input primary-btn2 mb-3 mb-sm-0" type="submit" value="end the quiz" style="margin-top: 40px;margin-left: 32%;width: 300px;" >
                    <br><br>
                </form>
            </div>
        </div>
    </div>
</section>



<!--================ star footer Area =================-->

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

</body>
</html>