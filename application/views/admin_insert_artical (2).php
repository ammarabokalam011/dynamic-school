<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edustage Education</title>
    <?php $this->load->view('include/css')?>

</head>

<body><?php $this->load->view('include/teacher_header')?>
<?php $this->load->view('include/js')?>

<!--================Home Banner Area =================-->
<section class="banner_area">

</section>
<section class="trainer_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3">Add new article </h2>
                    <p>
                        Please enter the required information.
                    </p>
                </div>
            </div>
        </div>

        <div class="row justify-content-center d-flex align-items-center" >
            <div class="col-lg-12 col-md-6 col-sm-12 single-trainer">
                <form style="text-align: center" id="form" action="<?php echo base_url('uplode/insert_artical')?>" method="post">

                    <div class="justify-content-center d-flex align-items-center" style="background-color: #334f6c;border-radius: 10px;padding-top: 10px;padding-bottom: 10px;" >


                        <table>
                            <tr>
                                <td><h5 style="color: #fdc632">Article for level :</h5></td>
                                <td style="padding-right: 30px; "><input name="level" type="number" value="0"></td>

                                <td><h5 style="color: #fdc632">Article for subject :</h5></td>
                                <td style="padding-right: 30px; "><input name="subject" type="number" value="0"></td>

                                <td><h5 style="color: #fdc632">Article for grade :</h5></td>
                                <td ><input name="grade" type="number" value="0"></td>
                            </tr>
                            <tr>
                                <td><h5 style="color: #fdc632"> Article title :</h5></td>
                                <td style="padding-right: 30px; "><input name="title" type="text" ></td>

                                <td><h5 style="color: #fdc632">Teacher name :</h5></td>
                                <td style="padding-right: 30px; "><input name="teacher" type="text" ></td>

                            </tr>

                        </table>

                    </div>
                    <div class="justify-content-center d-flex align-items-center" style="padding-top:30px;margin-top: 40px;margin-bottom: 40px;padding-bottom: 30px;background-color: #334f6c;border-radius: 10px" >
                        <table>
                            <tr>
                                <td style="text-align: center"><h2 style="color:white " class="mb-3">Write your article </h2></td>
                            </tr>
                            <tr>
                                <td ><textarea name="artical" class="ckeditor" form="form"></textarea></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="margin-top:30px;text-align: center"><input class=" primary-btn2 mb-3 mb-sm-0"style="margin-top:25px;border-radius: 30px" type="submit" value="Add the article"/></td>
                            </tr>

                        </table>

                    </div>

                </form>

            </div>
        </div>
    </div>
</section>

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

</body>
</html>
