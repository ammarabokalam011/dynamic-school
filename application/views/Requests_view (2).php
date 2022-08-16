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
                        <h2>Questions Requests</h2>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--================ End Home Banner Area =================-->
<?php



$answer =array();
$non_answer=array();

foreach ($all_req as $item){

    if($item ->answer!=null){
        array_push($answer,$item);
    }else{
        array_push($non_answer,$item);
    }

}
?>
<body>
<section class="trainer_area section_gap_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5">
                <div class="main_title">
                    <h2 class="mb-3">Send a question </h2>
                    <p>
                        Check if there is any respond to your questions
                    </p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center d-flex align-items-center" >
            <div class="col-lg-4 col-md-6 col-sm-12 single-trainer">
                <div class="justify-content-center d-flex align-items-center" style="margin-top: 40px;margin-bottom: 40px;padding-bottom: 30px;background-color: #334f6c;border-radius: 10px" >
                <form id="form" style="padding-right: 30px;margin-left: 30px;margin-top: 30px;"
                      action = "<?php echo base_url('requests/set_requast')?>" method="post"  >

                    <div id="editor" style="border: 0px;margin-top: 40px;
                    padding-left: 10px;margin-bottom: 20px;"><br>
                    </div>

                    <input class="primary-btn2 mb-3 mb-sm-0" id="show_me" type="button" value="send requast" style="margin-bottom: 40px;margin-top: 10px;margin-left: 45px;">
                    <input class="primary-btn2 mb-3 mb-sm-0" type="submit" value="send requast" style="margin-bottom: 40px;margin-top: 10px;margin-left: 45px;">

                </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 single-trainer">
                <div id="tabs" style="background-color: #f1f9ff">
                    <ul>
                        <li><a href="#tabs-2">Unanswered Questions</a></li>
                        <li><a href="#tabs-1">Questions Answered</a></li>


                    </ul>
                    <div id="tabs-1 ">
                        <ul>
                            <?php

                            foreach ( $answer as $item){
                                echo '<li>'.$item->query."    answer: ". $item->answer.'</li>';
                            }

                            ?>
                        </ul>
                    </div>
                    <div id="tabs-2">
                        <ul>
                            <?php

                            foreach ( $non_answer as $item){
                                echo '<li>'.$item->query.'</li>';
                            } ?>
                        </ul>
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
    function add_style(data){
        var htm = $(data);
        htm.each(function (i,obj) {
            obj.classList.add("mystyle");
            alert(obj.innerHTML);
        });
        return htm;
    }

    $("#show_me").click(function(){
        alert(add_style(CKEDITOR.instances.editor.getData()));
    });

    $("#form").submit( function(eventObj) {
        var data=CKEDITOR.instances.editor.getData();
        data=add_style(data);
        $("<input />").attr("type", "hidden")
            .attr("name", "query")
            .attr("value", data)
            .appendTo("#form");
        return true;
    });

    $( function() {
        $( "#tabs" ).tabs();
    } );
</script>
<script>
    $( function() {
        $( "#tabs" ).tabs();
    } );
</script>
</body>
</html>

