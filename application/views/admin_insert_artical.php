<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edustage Education</title>
    <?php $this->load->view('include/css')?>

</head>

<body>
<?php $this->load->view('include/teacher_header')?>
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
<form id="form" action="<?php echo base_url('uplode/insert_artical')?>" method="post">
<textarea name="artical" class="ckeditor" form="form"></textarea>
<input name="title" type="text" value="title">
<input name="teacher" type="text" value="rawan">
<label for="level"><b>level :</b></label>
<input name="level" type="number" value="0">
<label for="subject"><b>subject :</b></label>
<input name="subject" type="number" value="0">
<label for="grade"><b>grade :</b></label>
<input name="grade" type="number" value="0">
<input type="submit" value="insert artical"></form>
<!--================ End Editor Area =================-->
<?php $this->load->view('include/js')?>
</body>
</html>
