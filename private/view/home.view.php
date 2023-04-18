<?php $this->view("includes/header") ?>
<?php $this->view("includes/navigation") ?>

<?php $this->view('includes/subnav') ?>


<!-- home image banner style start -->
<div class="container-fluid py-5 bg-white">
    <div class="row tw-homeimg px-3 px-sm-5 py-2">
        <div class="col-lg-6 col-12">
            <div class="card border-md border-0">
            <h1 class="h1 py-3">Learn web technologies<br> And Programming</h1>
            <p class="home_description">Unlock your coding potential with our extensive library of free project source codes, templates, and programming courses. Learn from experienced instructors, improve your coding skills, and take on new challenges. Join our community of aspiring and professional developers today, and level up your coding game for free!</p>
            <div class="button_group d-flex align-items-center flex-wrap py-4">
                    <a href="#" class="button p-3 text-white fw-bold"><span>Learn Code</span></a>
                    <a href="<?=BASE ?>/tutorials" class="button p-3 text-white fw-bold"><span>Courses</span></a>
            </div>
            </div>
        </div>
        <div class="col-lg-6 order-lg-last order-first col-12">
            <div class="card  border-0">
                <img src="<?=ASSETS ?>/images/home-image.png" class="img-fluid" alt="...">
            </div>
        </div>
    </div>
</div>
<!-- home image banner style end -->



<!-- home project section style start -->
<div class="container-fluid bg-light pb-5">
        <div class="container py-4">
            <div class="row py-4">
                <h1 class="col h4 fw-bold text-dark lang_heading text-uppercase">Download Projects</h1>
                <div class="col-3 d-flex justify-content-end align-items-center"><a href="<?=BASE ?>projects" class="button">View More</a></div>
            </div>
            <div class="row">
                 <div class="col">

                    <div class="course_card_group">

                        <a href="<?=BASE ?>" class="card bg-white course_card p-3 rounded-3">
                            <img src="<?=ASSETS ?>images/634249the-web30background45.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body pb-0">
                            <span class="time rounded-pill">4th Jan 2023</span>
                            <h1 class="card-title text-dark pt-1 h6">How to create navigation using html css</h1>
                            <div class="details py-2 d-flex justify-content-between align-items-center">
                                <section class="d-flex justify-content-center align-items-center">
                                    <span class="me-2 fs-6"><i class="fa fa-download"></i></span>
                                    <span class="me-2">2.5K</span>
                                </section>
                                <section class="price_details">
                                <span class="price py-1 px-3 fs-5 text-success rounded-pill">Free</span>
                                </section>
                            </div>
                            </div>
                        </a>

                        <a href="<?=BASE ?>" class="card bg-white course_card p-3 rounded-3">
                            <img src="<?=ASSETS ?>images/634249the-web30background45.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body pb-0">
                            <span class="time rounded-pill">4th Jan 2023</span>
                            <h1 class="card-title text-dark pt-1 h6">How to create navigation using html css</h1>
                            <div class="details py-2 d-flex justify-content-between align-items-center">
                                <section class="d-flex justify-content-center align-items-center">
                                    <span class="me-2 fs-6"><i class="fa fa-download"></i></span>
                                    <span class="me-2">2.5K</span>
                                </section>
                                <section class="price_details">
                                <span class="price py-1 px-3 fs-5 text-success rounded-pill">Free</span>
                                </section>
                            </div>
                            </div>
                        </a>


                        <a href="<?=BASE ?>" class="card bg-white course_card p-3 rounded-3">
                            <img src="<?=ASSETS ?>images/634249the-web30background45.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body pb-0">
                            <span class="time rounded-pill">4th Jan 2023</span>
                            <h1 class="card-title text-dark pt-1 h6">How to create navigation using html css</h1>
                            <div class="details py-2 d-flex justify-content-between align-items-center">
                                <section class="d-flex justify-content-center align-items-center">
                                    <span class="me-2 fs-6"><i class="fa fa-download"></i></span>
                                    <span class="me-2">2.5K</span>
                                </section>
                                <section class="price_details">
                                <span class="price py-1 px-3 fs-5 text-success rounded-pill">Free</span>
                                </section>
                            </div>
                            </div>
                        </a>

                        <a href="<?=BASE ?>" class="card bg-white course_card p-3 rounded-3">
                            <img src="<?=ASSETS ?>images/634249the-web30background45.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body pb-0">
                            <span class="time rounded-pill">4th Jan 2023</span>
                            <h1 class="card-title text-dark pt-1 h6">How to create navigation using html css</h1>
                            <div class="details py-2 d-flex justify-content-between align-items-center">
                                <section class="d-flex justify-content-center align-items-center">
                                    <span class="me-2 fs-6"><i class="fa fa-download"></i></span>
                                    <span class="me-2">2.5K</span>
                                </section>
                                <section class="price_details">
                                <span class="price py-1 px-3 fs-5 text-success rounded-pill">Free</span>
                                </section>
                            </div>
                            </div>
                        </a>

                    </div>

                 </div>
            </div>
        </div>
   </div>
<!-- home project section style end -->


<?php $this->view('includes/testimonial'); ?>

  <!-- <div class="container">
    <div class="row">
        <div class="col">
            <?php 
              
              if(count($errors)>0){
                show($errors);
              }
            
            ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col"><h1 class="text-center">TheWebSource.com</h1></div>
    </div>
    <div class="row">
        <div class="col-5 m-auto py-5">
            <form method="POST">
                <div class="input-group">
                    <input type="text" class="form-control shadow-none my-3" name="firstname" placeholder="First name">
                </div>
                <div class="input-group">
                    <input type="text" class="form-control shadow-none my-3" name="lastname" placeholder="Last name">
                </div>
                <div class="input-group">
                    <input type="email" class="form-control shadow-none my-3" name="email" placeholder="Email address">
                </div>
                <div class="input-group">
                    <input type="submit" class="btn btn-sm btn-secondary" name="signup" value="Submit">
                </div>
            </form>
        </div>
    </div>
  </div> -->

<?php $this->view("includes/footer") ?>