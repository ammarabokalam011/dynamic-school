<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('include/css')?>
    <?php $this->load->view('include/header') ?>
    <title>subjects</title>


    <link rel="stylesheet" href="<?php echo base_url('assest/jstree') ?>/dist/themes/default/style.min.css"/>
    <link rel="stylesheet" href="<?php echo base_url('assest/jstree') ?>/dist/themes/proton/style.css"/>

    <link href="<?php echo base_url('assest/multi-select/') ?>css/multi-select.css" media="screen" rel="stylesheet"
          type="text/css">

</head>




<!--================ Start Home Banner Area =================-->
<section class="banner_area ">
    <div class="banner_inner d-flex align-items-center ">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>Lectures</h2>

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
                <div id="hd"class="main_title">
                    <h2 class="mb-3">Choose a lecture to read </h2>
                    <p>
                        or search for what you want
                        <input type="button" id="d" value="search" class="primary-btn2 mb-3 mb-sm-0" style="border-radius: 90%;padding-right: 6px;padding-left: 6px;" ></p>
                    <br><br>
                </div>
                <div id="sd" class="main_title">
                    <h2 class="mb-3">Search to find what you want easily </h2>
                  <br><br>
                    <h7 style="color: #fdc632">Search by subject and
                        select what you want:</h7><br>

                    <input id="search-input" class="search-input"/>

                    <input type="button" id="show" value="search" class="primary-btn2 mb-3 mb-sm-0" style="border-radius: 90%;padding-right: 6px;padding-left: 6px;" >

					<div style="text-align: left;" id="ajax" class="demo"></div><br>
                    <h7 style="color: #fdc632;" class="mb-3">Select the level you want to search in:</h7>
                    <div style="margin-left: 20px;">
                    <select  multiple="multiple" id="my_select" name="levels[]">
						<option value='1'>level 1</option>
						<option value='2'>level 2</option>
						<option value='3'>level 3</option>
						<option value='4'>level 4</option>
						<option value='5'>level 5</option>
						<option value='6'>level 6</option>
                    </select></div>
                    <br>
                    <label ><h7 style="color: #fdc632">Sort the search result by:</h7></label>
                    <br>
					<select  id="sort_by" >

						<option value='date'>date</option>
						<option value='visits'>number of visits</option>
						<option value='teacher'>teacher name</option>
						<option value='title'>title</option>
					</select>

					<input id="search_word" name="search_word" type="text">
<br>
                    <input  type="button" id="search-btn" value="Find" class="primary-btn2 mb-3 mb-sm-0" style="border-radius: 90%;margin-top: 5px; ">
                </div>
            </div>
        </div>
        <div id="articals" class="row justify-content-center d-flex align-items-center" style="background: #f1f9ff;border: solid;
        margin-top:-40px;padding-top:60px;padding-bottom:20px;padding-left:40px;padding-right: 20px;">

            <?php
            $data=array();
            foreach ($articals as $artical){
                echo'
            <div class="col-lg-3 col-md-6 col-sm-12 single-trainer" style=" text-align: center ;background:white;margin-right:30px;
             padding-top: 10px;padding-bottom: 30px; ">
                <p class="single_sidebar_widget author_widget">
                    
                    <h4 style="color: #f7ac06;">'.$artical->title.'</h4>
                    <h4 style="color:#002347;">----------------</h4>
                    
                    <p>posted by:</p><h4>'.$artical->teacher_name.'</h4>
                    '.$artical->Date.'</p>
                    <h4 style="color:#002347;">'.$artical->number_of_visits.' Visits</h4>
                   <a href="'.base_url('Articals/open/').$artical->id.'" class="primary-btn2 mb-3 mb-sm-0">Show article</a>
                    <div class="br"></div>
                </aside>
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
<script src="<?php echo base_url('assest/jstree') ?>/dist/jstree.min.js"></script>
<script src="<?php echo base_url('assest/multi-select/') ?>js/jquery.multi-select.js" type="text/javascript"></script>

<script>
 $(document).ready(function(){
            $('#sd').hide();
        }
    );
    $("#d").click(function(){
            $('#sd').show();
        $('#hd').hide();
        }
    );
    
    var levels=[0,0,0,0,0,0];
    $('#my_select').multiSelect({
        afterSelect: function(values){
            levels[values-1]=1;
        },
        afterDeselect: function(values){
            levels[values-1]=0;
        }
    });

    $('#search-btn').click(
        function () {
            var nlevels=[];
            for (var i=0;i<6;i++){
                if(levels[i]==1)
                    nlevels.push(i+1);
			}
            $("#my_select option:selected").each(function(){
                levels.push($(this).val());
            });
            $.ajax( "<?php echo base_url('articals/search')?>",

                {
                    type: 'GET',
                    data:{ "levels[]": nlevels,"search_word": $('#search_word').val(),"subjects": $('#ajax').jstree('get_checked',null,true), "sort_by":$('#sort_by').val()},
                    dataType: 'json', // type of response data
                    success: function (data,status,xhr) {   // success callback function
                        $('#articals').empty();
                        for(var i=0;i<data.length ;i++){
                            $('#articals').append(
                                "<div class='col-lg-3 col-md-6 col-sm-12 single-trainer' style=' text-align: center ;background:white;margin-right:30px;padding-top: 10px;padding-bottom: 30px; '>" +
                                "<p class='single_sidebar_widget author_widget'> <h4 style='color: #f7ac06;'>"
                                +data[i].title
                                +"</h4> " +
                                "<h4 style='color:#002347;'>----------------"
                                +data[i].number_of_visits+
                                "</h4> " +
                                "<p>posted by:</p>" +
                                "<h4>"
                                +data[i].teacher_name+
                                "</h4>"
                                +data[i].date+
                                "</p>" +
                                "<a href='"+
                                "<?php echo base_url('Articals/open/')?>"+
                                data[i].id+"' class='primary-btn2 mb-3 mb-sm-0'>" +
                                "Show article" +
                                "</a> " +
                                "<div class='br'>" +
                                "</div> " +
                                "</aside>" +
                                " </div>");
                        }
                    },
                    error: function (jqXhr, textStatus, errorMessage) { // error callback
                        // $('#articals').append('Error: ' + errorMessage);
                    }
                },
            );
        }
    );
    // ajax demo
    $('#ajax').jstree({
        "plugins": ["themes", "html_data", "checkbox", "sort", "ui", "search"],
        "search": {
            "case_sensitive": false,
            "show_only_matches": true
        }
        , 'core': {
            'data': {
                "url": "<?php echo base_url('articals/')?>/get_subjects",
                "dataType": "json" // needed only if you do not supply JSON headers
            },
            'themes': {
                'name': 'proton',
                'responsive': true
            }
        }
    }).bind("loaded.jstree", function (event, data) {
        // $(this).jstree("open_all");
    });
    $(document).ready(function () {
        $('.nice-select').hide();
        $('#sort_by').show();
        $(".search-input").keyup(function () {
            var searchString = $(this).val();
            $('#ajax').jstree('search', searchString);
        });
        $('#my_select').multiSelect({
            afterSelect: function(){

                // use array "selections" here..
            }
        });
    });
</script>

</body>
</html>
