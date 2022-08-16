<!--================ Start Header Menu Area =================-->
<header class="header_area white-header">
    <div class="main_menu">
        <div class="search_input" id="search_input_box">
            <div class="container">
                <form class="d-flex justify-content-between" method="" action="">
                    <input
                        type="text"
                        class="form-control"
                        id="search_input"
                        placeholder="Search Here"
                    />
                    <button type="submit" class="btn"></button>
                    <span
                        class="ti-close"
                        id="close_search"
                        title="Close Search"
                    ></span>
                </form>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand" href="<?php echo base_url()?>">
                    <img class="logo-2" src="<?php echo base_url('assest/')?>img/logo2.png" alt="" />
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-toggle="collapse"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div
                    class="collapse navbar-collapse offset"
                    id="navbarSupportedContent"
                >
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('teacher/')?>">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url('uplode/')?>homework">Uplode Homework</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('uplode/')?>detect_question">Uplode Quiz</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('uplode/artical')?>">Uplode Artical</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('teacher/requests')?>">requests</a>
                        </li>
                        <?php
                        if($this->session->has_userdata('teacher_name')){
                            echo '<li class="nav-item">
                            <a  class="nav-link search" id="search" href="'.base_url("/teacher/").'Logout">Logout</a></li> 
                        <li class="nav-item">
                            <a class="nav-link" href="">'.$this->session->userdata('teacher_name').'</a>
                        </li>';
                        }else{
                            redirect('teacher');
                        }
                        ?><li class="nav-item">
                            <a href="#" class="nav-link search" id="search">
                                <i class="ti-search"></i>
                            </a>
                        </li>

                    </ul>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->
