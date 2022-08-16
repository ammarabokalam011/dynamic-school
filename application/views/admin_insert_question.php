<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edustage Education</title>
    <?php $this->load->view('include/css')?>

</head>

<body><?php $this->load->view('include/teacher_header')?>

<!--================Home Banner Area =================-->
<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="banner_content text-center">
                        <h2>About Us</h2>
                        <div class="page_link">
                            <a href="<?php echo base_url()?>">Home</a>
                            <a href="<?php echo base_url('main/')?>about-us">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================End Home Banner Area =================-->
<!--================ Start Editor Area =================-->

<input id="num" type="number" value="0">
<button id="set-form">Set</button>
<form id="form" action="<?php echo base_url('uplode/insert_question/');?>" method="post">
    <label for="grade"><b>grade</b></label>
    <input type="number" name="grade">
    <label for="subject"><b>subject</b></label>
    <input type="number" name="subject">
    <label for="level"><b>level</b></label>
    <input type="number" name="level">
    <table id ="text_areas">
        <tr>
            <td><label for="question_body"><b>question</b></label></td>
            <td ><textarea name="question_body" class="ckeditor" form="form"></textarea></td>
        </tr>

    </table>
    <input type="submit" id="insert_question" value="insert question"/>
</form>
<!--================ End Editor Area =================-->
<?php $this->load->view('include/js')?>

<script>
    CKEDITOR.config.extraPlugins = 'uploadimage';
    CKEDITOR.config.uploadUrl= '<?php echo base_url("main")?>/upload';
    document.getElementById('set-form').onclick=
        function () {
            var f = document.getElementById("form");
            var i=1;
            var num=document.getElementById('num').value;
            var td,s;
            number=num;
            for(;i<=num;i++){
                var tr=document.createElement("tr");
                td=document.createElement("td");
                td.innerHTML='<label for="choice[]"><b>choice'+i+'</b></label>';
                tr.appendChild(td);
                td=document.createElement("td");
                td.innerHTML='<textarea name="choice[]" id="choice'+i+'" class="ckeditor" form="form"></textarea>';
                tr.appendChild(td);
                $('#text_areas').append(tr);
                tr=document.createElement("tr");
                td=document.createElement("td");
                td.innerHTML='<label for="mark[]"><b>mark'+i+'</b></label>';
                tr.appendChild(td);
                td=document.createElement("td");
                td.innerHTML='<input name="mark[]" id="mark'+i+'" type="number" form="form"></input>';
                tr.appendChild(td);
                $('#text_areas').append(tr);
                CKEDITOR.replace( 'choice'+i );

            }
        };

</script>
</body>
</html>
