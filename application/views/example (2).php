<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
</head>
<body>
	<div>
        <a href='<?php echo base_url('admin/article')?>'>article </a> |
        <a href='<?php echo base_url('admin/article_level_subject')?>'>article_level_subject  </a> |
        <a href='<?php echo base_url('admin/choices')?>'>choices  </a> |
        <a href='<?php echo base_url('admin/location')?>'>location  </a> |
        <a href='<?php echo base_url('admin/homework')?>'>homework  </a> |
        <a href='<?php echo base_url('admin/homework_level_subject')?>'>homework_level_subject </a> |
        <a href='<?php echo base_url('admin/level')?>'>level  </a> |
		<a href='<?php echo base_url('admin/quiz')?>'>quiz  </a> |
		<a href='<?php echo base_url('admin/questions_in_quiz')?>'>questions_in_quiz  </a> |
		<a href='<?php echo base_url('admin/question')?>'>question  </a> |
        <a href='<?php echo base_url('admin/request')?>'>request  </a> |
        <a href='<?php echo base_url('admin/request_student')?>'>request_student </a> |
        <a href='<?php echo base_url('admin/student')?>'>student </a> |
        <a href='<?php echo base_url('admin/request_teacher')?>'>request_teacher </a> |
        <a href='<?php echo base_url('admin/student_homework')?>'>student_homework </a> |
        <a href='<?php echo base_url('admin/student_level_subject')?>'>student_level_subject </a> |
        <a href='<?php echo base_url('admin/subject')?>'>subject </a> |
		<a href='<?php echo base_url('admin/teacher')?>'>teacher  </a>|
		<a href='<?php echo base_url('admin/user_in_quiz')?>'>user_in_quiz  </a>|
		<a href='<?php echo base_url('admin/user_register_quiz')?>'>user_register_quiz  </a>



	</div>
	<div style='height:20px;'></div>  
    <div style="padding: 10px">
		<?php echo $output; ?>
    </div>
    <?php foreach($js_files as $file): ?>
        <script src="<?php echo $file; ?>"></script>
    <?php endforeach; ?>
</body>
</html>
