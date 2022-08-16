<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/css')?>
    <?php $this->load->view('include/header') ?>
    <?php $this->load->view('include/js')?>
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .step{
            display:none;
        }
    </style>

</head>
<body>
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
                    <h2 id="demo" class="mb-3">Start Your Test</h2>
                    <p id="t">
                        This is a quick test from 30 questions focus well and start.</p>
                    <p id="ti" style="text-decoration: underline" ><h7 style="color: red">Notice:</h7> time ends after 60 minutes.</p>
                    <h3 id="n"><br><br>Choose the correct answer: </h3>
                </div>
            </div>
        </div>
        <div class="justify-content-center d-flex align-items-center">
            <div class="justify-content-center d-flex align-items-center" style="background: #f1f9ff;border: solid;border-radius: 40px;
        margin-top:-40px;padding-top:60px;padding-bottom:20px;padding-left:40px;padding-right: 20px; width: 900px;">

                <input style="width: 50%; margin-top: -36px;" type="button" class=" single-input primary-btn2 mb-3 mb-sm-0" value="Start" id="start" onclick="setTimeout(myFunction, 3600000)">
                <form id="qstart" style="height: 85%;text-align: center; width: 100%" action="<?php echo base_url('detect/end')?>" method="post">
                    <input name="subject_id" value="<?php echo $subject_id?>" type="hidden">
                    <?php
                    $i=1;
                    foreach ($quastions as $quastion){
                        echo'  <div  class="step offset-1 col-lg-10 col-md-6 col-sm-12 " style=" background: white;border-radius: 50px;padding-top: 20px;padding-bottom: 20px; margin-bottom: 10px;padding-left: 35px;padding-right: 35px;">
               
               <h3 style="text-align: center"><h7 style="border: solid">  &nbsp;'.$i.' -&nbsp;</h7><br><br>'.$quastion->question_body.'</h3>';
                        $i++;
                        foreach ($quastion->choices as $choice){
                            echo'  <table><tr><td style=" padding-top: 0px;padding-left:50px;padding-bottom: 14px;padding-right: 15px;"><input class="choices" name="answers[]" type="radio" value="'.$choice->id.'"></td><td>'.$choice->choice_body.'</td></tr></table>';
                        }

                        echo '</div>';
                    }
                    echo '<input type="button"  class=" single-input primary-btn2 mb-3 mb-sm-0" value="Next" id="nextBtn" style="margin-top:35px;width:50%; "> ';
                    echo ' <input id="subBtn" class=" single-input primary-btn2 mb-3 mb-sm-0" type="submit" value="end the quiz" style="margin-top: 35px;" >';

                    ?>
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


<script type="text/javascript">
    var timeoutHandle;

    function countdown(minutes, seconds) {
        var seconds = 60;
        var mins = minutes

        function tick() {
            var counter = document.getElementById("timer");
            var current_minutes = mins - 1
            seconds--;
            counter.innerHTML =
                current_minutes.toString() + ":" + (seconds < 10 ? "0" : "") + String(seconds);
            if (seconds > 0) {
                timeoutHandle = setTimeout(tick, 1000);
            } else {

                if (mins > 1) {

                    // countdown(mins-1);   never reach “00″ issue solved:Contributed by Victor Streithorst
                    setTimeout(function() {
                        countdown(mins - 1);
                    }, 1000);

                }
            }
        }
        tick();
    }



    $(document).ready(function(){
            $('#qstart').hide();
            $('#n').hide();

    }
    );
    function myFunction() {
        alert('Time Out');
        document.getElementById("qstart").submit();
    }
    $("#start").click(function(){
        $('#start').hide();
        $("#qstart").show();
        $(".step:first").show();
        $('#subBtn').hide();
        document.getElementById("demo").innerHTML = 'Good Luck ';
        document.getElementById("ti").innerHTML = '<h7 style="color: red">Notice:</h7> time ends after <h7 style="color: blue;font-style: normal; " id="timer"></h7> .' ;
        countdown(60);
        $('#t').hide();
        $('#n').show();
        }
    );
    var i=0;
    $("#nextBtn").click(function(){

        $('.choices').each(
            function () {
                if($(this).is(':checked')) {
                    $("<input />").attr("type", "hidden")
                        .attr("name", "choice[]")
                        .attr("value", $(this).val())
                        .appendTo("#qstart");
                    $(this).attr("checked", false);
                }

            });
        var next_step = $(".step:visible").next(".step");
        i++;
        if(next_step.length != 0){
            $(".step").hide();
            next_step.show();
        }
        if(i==29){
            $("#nextBtn").hide();
            $('#subBtn').show();
        }else{
            $('#subBtn').hide();
        }
    });
    $('#subBtn').submit(
        function () {
            $('.choices').each(
                function () {
                    if($(this).is(':checked'))
                        $("<input />").attr("type", "hidden")
                            .attr("name", "choice")
                            .attr("value",$( this ).val())
                            .appendTo("#qstart");

                });
			return true;
        }
    );
</script>
</body>
</html>