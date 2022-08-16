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
<div>
    <table>
        <tr>
            <td style="text-align: center"><input type="text" name="qs" style="border: none;" placeholder="Homework Question:"></td>
            <td style="text-align: center"><input type="text" name="ans" style="border: none;" placeholder="Homework Answer:"></td>
        </tr>
        <tr>
            <td ><textarea name="question_body" class="ckeditor" form="form"></textarea></td>
            <td><textarea name="answer" class="ckeditor" form="form"></textarea></td>
        </tr>

    </table>

<form id="form" action="<?php echo base_url('uplode/insert_homework/');?>" method="post">
    <table>
        <tr>
            <td><input type="text" style="border: none;" placeholder="Homwork for level:"></td>
            <td><input name="level" type="number" value="0"></td>
        </tr>
        <tr>
            <td><input type="text" style="border: none;" placeholder="Homwork for subject:"></td>
            <td><input name="subject" type="number" value="0"></td>
        </tr>
        <tr>
            <td><input type="text" style="border: none;" placeholder="Homwork for grade:"></td>
            <td><input name="grade" type="number" value="0"></td>
        </tr>
        <tr>
            <td><input type="submit" id="insert_homework" value="Add"/></td>
        </tr>

    </table>

</form>
</div>
<!--================ =================-->

<script type="text/javascript">
    CKEDITOR.replace( 'question_body' );
    CKEDITOR.add
    CKEDITOR.replace( 'answer' );
    CKEDITOR.add
    CKEDITOR.config.extraPlugins = 'uploadimage';
    CKEDITOR.config.uploadUrl= '<?php echo base_url("main")?>/upload';
    document.getElementById('show_editor1').onclick=show1();
    document.getElementById('show_editor2').onclick=show2();

    function () {
        var data = CKEDITOR.instances.question_body.getData();
        var data2 = CKEDITOR.instances.editor2.getData();
        alert(data);
        alert(data2);

    };
    $("#form").submit( function(eventObj) {
        $("<input />").attr("type", "hidden")
            .attr("name", "question_body")
            .attr("value", CKEDITOR.instances.editor1.getData())
            .appendTo("#form");
        $("<input />").attr("type", "hidden")
            .attr("name", "homework_id")
            .attr("value",<?php echo $homework_id?>)
            .appendTo("#form");

        return true;
    });


</script>
</body>
</html>
