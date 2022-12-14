<html>
<head>
	<?php $this->load->view('include/header') ?>
	<?php $this->load->view('include/css')?>

	<title>user_quiz</title>
    <meta name="description" content="User profile example page">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <link href="<?php echo base_url();?>assets/mohanad/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />

    <link href="<?php echo base_url();?>/assets/mohanad/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

    <link rel="shortcut icon" href="<?php echo base_url();?>assets/mohanad/demo/default/media/img/logo/favicon.ico" />

</head>
<body>

<section class="banner_area ">
	<div class="banner_inner d-flex align-items-center ">
		<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="banner_content text-center">
						<h2>contest</h2>

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
					<h2 class="mb-3">Compete your colleagues</h2>
					<p>
						an easy way to practice
					</p>
				</div>
			</div>
		</div>


    <div class="row">

        <div class="col-xl-12 col-lg-12">
            <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">
                <div class="m-portlet__head">
                    <div class="m-portlet__head-tools">
                        <ul class="nav nav-tabs m-tabs m-tabs-line   m-tabs-line--left m-tabs-line--primary" role="tablist">
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link active" data-toggle="tab" href="#m_user_profile_tab_1" role="tab">
                                    <i class="flaticon-share m--hide"></i>
                                    ?????????????????? ?????????????? ??????

                                </a>
                            </li>
                            <li class="nav-item m-tabs__item">
                                <a class="nav-link m-tabs__link" data-toggle="tab" href="#m_user_profile_tab_2" role="tab">
                                    ???? ??????????????????
                                </a>
                            </li>

                        </ul>
                    </div>

                </div>
                <div class="tab-content">
                    <div class="tab-pane active" id="m_user_profile_tab_1">

                        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>??????????????</th>
                                <th>?????????? ???????? ??????????</th>
                                <th>?????????? ???????? ????????????????</th>
                                <th>????????????</th>

                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            if($user_quiz!=null) {
                                foreach ($user_quiz as $row) {
                                    echo '<tr>' .
                                        '<td>' . $row['id'] . '</td><td>' . $row['title'] . '</td><td>' . $row['start_date_time'] . '</td><td>' . $row['end_date_time'] . '</td>';
                                    if($row['start_date_time']> date('Y-m-d H:i:s') && $row['end_date_time']> date('Y-m-d H:i:s')){
                                        $datetime1 = strtotime($row['start_date_time']);
                                        $datetime2 = strtotime(date('Y-m-d H:i:s'));

                                        $secs = $datetime1 - $datetime2;// == <seconds between the two times>
                                        $hour = $secs / 3600;
                                        $all_minut =explode('.',$hour);
                                        $final_hour = $all_minut[0];
                                        $minut = '0.'.$all_minut[1];
                                        $final_minut = $minut*60;
                                        $final_minut= explode('.',$final_minut);
                                        $final_minut = $final_minut[0];

                                        echo '<td> <span class="m-badge m-badge--brand m-badge--wide">???? ???????????? ?????? ???????????????? ??????  '.$final_hour.'???????? ?? '.$final_minut.'??????????'.'</span></td>';
                                    }elseif($row['start_date_time']< date('Y-m-d H:i:s') && $row['end_date_time']< date('Y-m-d H:i:s')){
                                        echo '<td> <span class="m-badge m-badge--brand m-badge--danger">???????????????? ????????????</span></td>';
                                    }elseif($row['start_date_time']< date('Y-m-d H:i:s') && $row['end_date_time']> date('Y-m-d H:i:s')){
                                        echo '<td> '.
                                            '<form action="'.base_url('user_quiz/login_quiz').'" method="post">'.
                                                 '<input type="hidden" name="id_quiz" value="'.$row['id'].'">'.
                                                 '<input type="hidden" name="id_user" value="'.$user_id.'">'.
                                                 '<button type="submit" class="m-badge m-badge--brand m-badge--accent">???????? ????????????????</button></td>'.
                                            '</form>';
                                    }

                                }
                            }

                            ?>

                            </tbody>
                        </table>

                    </div>
                    <div class="tab-pane " id="m_user_profile_tab_2">

                        <!--begin: Datatable -->
                        <table class="table table-striped- table-bordered table-hover table-checkable" id="m_table_1">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>??????????????</th>
                                <th>?????????? ???????? ??????????</th>
                                <th>?????????? ???????? ????????????????</th>
                                <th>????????????</th>

                            </tr>
                            </thead>
                            <tbody>
<?php

                        foreach ($all_quiz as $row) {
                            echo'<tr>'.
                                '<td>'.$row['id'].'</td><td>  '.$row['title'].'  </td><td>'.$row['start_date_time'].'</td><td>  '.$row['end_date_time'].'</td>'.
                            '<td><form action="'.base_url('user_quiz/Participate_competition').'" method="post">'.
                                '<input type="hidden" name="id_quiz" value="'.$row['id'].'">'.
                                '<input type="hidden" name="id_user" value="'.$user_id.'">'.
                                '<button type="submit" class="btn m-btn m-btn--gradient-from-danger m-btn--gradient-to-warning">????????????</button>'.
                            '</form> </td>'.


                            '</tr>';
                        }
                        ?>
                            </tbody>

                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</section>


<script src="<?php echo base_url();?>assets/mohanad/vendors/base/vendors.bundle.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>assets/mohanad/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
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
