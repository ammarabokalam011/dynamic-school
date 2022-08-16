<!--================ Start Header Menu Area =================-->
<header class="header_area white-header">
    <div class="main_menu">


        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand" href="<?php echo base_url()?>">
                    <img class="logo-2" src="<?php echo base_url('assest/')?>img/logo2.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button"
                        data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span> <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('main/')?>">Home</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url('Detect/')?>">Detect Quiz</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url()?>Articals">Lectures</a>
                        </li>
                        <li class="nav-item ">
                            <a class="nav-link" href="<?php echo base_url()?>user_quiz">Contest</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo base_url('Homework/')?>">Exercises</a>
                        </li>
                        <?php
                        if($this->session->has_userdata('user_name')){
                            echo '<li class="nav-item">
                                      <a  class="nav-link search"  href="'.base_url("/Login/").'Logout">Logout</a>
                                  </li> 
                                  <li class="nav-item">
                                      <a class="nav-link" href="">'.$this->session->userdata('user_name').'</a>
                                  </li>';
                        }
                        else{
                            echo '<li class="nav-item">
                                     <a class="nav-link search"  href="'.base_url("/").'Login">Login</a>
                                  </li>';
                        }
                        ?>


                    </ul>

                </div>
            </div>
        </nav>
    </div>
</header>
<!--================ End Header Menu Area =================-->
