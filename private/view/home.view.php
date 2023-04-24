<?php $this->view("includes/header") ?>
<?php $this->view("includes/navigation") ?>

<?php $this->view('includes/subnav') ?>


<!-- home image banner style start -->
<div class="container-fluid py-5 bg-white">
    <div class="row tw-homeimg px-3 px-sm-5 py-2">
        <div class="col-lg-6 col-12">
            <div class="card border-md border-0">
            <h1 class="h1 py-3 thewebsources-banner-title">Create your own digital masterpiece with our step-by-step projects and tutorials. hello santosh</h1>
            
            <div class="thewebsources-home-banner-search ">
            <form action="">
                    <div class="thewebsource-input-group rounded-pill bg-white">
                        <button class="thewebsources-search-button rounded-pill bg-transparent"><i class="fa-solid fa-search"></i></button>
                        <input type="search" class="form-control border-0 shadow-none outline-none" placeholder="Search project you want to create...">
                        <button class="thewebsources-search-button search-icon rounded-circle"><i class="fa-solid fa-arrow-right"></i></button>
                    </div>
                </form>
            </div>

            <div class="button_group d-flex align-items-center flex-wrap py-4">
                    <a href="#" class="button p-3 text-white fw-bold rounded-pill"><span>Learn Code</span></a>
                    <a href="<?=BASE ?>/tutorials" class="button p-3 text-white fw-bold rounded-pill"><span>Download Code</span></a>
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


<!-- thewebsources home cards style start -->
<div class="container-fluid thewebsources-card-container">
    <div class="thewebsources-cards px-md-5 px-3 py-5">
        <div class="card thewebsources-card d-flex flex-row justify-content-center align-items-center">
            <div class="home-card-icon rounded-circle"><i class="fa-solid fa-user-group"></i></div>
            <div class="home-card-text ms-3">
                <h1 class="fs-3 fw-bold">300K+</h1>
                <h5 class="fs-6">Online Students</h5>
            </div>
        </div>
        <div class="card thewebsources-card d-flex flex-row flex-row justify-content-center align-items-center">
            <div class="home-card-icon rounded-circle"><i class="fa-solid fa-user-graduate"></i></div>
            <div class="home-card-text ms-3">
                <h1 class="fs-3 fw-bold">25K+</h1>
                <h5 class="fs-6">Online Courses</h5>
            </div>
        </div>
        <div class="card thewebsources-card d-flex flex-row flex-row justify-content-center align-items-center">
            <div class="home-card-icon rounded-circle"><i class="fa-solid fa-pen-ruler"></i></div>
            <div class="home-card-text ms-3">
                <h1 class="fs-3 fw-bold">15K+</h1>
                <h5 class="fs-6">Online Students</h5>
            </div>
        </div>
        <div class="card thewebsources-card d-flex flex-row flex-row justify-content-center align-items-center">
            <div class="home-card-icon rounded-circle"><i class="fa-solid fa-award"></i></div>
            <div class="home-card-text ms-3">
                <h1 class="fs-3 fw-bold">30K+</h1>
                <h5 class="fs-6">Ceritified Courses</h5>
            </div>
        </div>
    </div>
</div>
<!-- thewebsources home cards style end -->


<!-- thewebsources category style start -->

<div class="container-fluid bg-white thewebsources-categories-section py-5">
    <div class="heading-section d-flex align-items-center justify-content-between pb-5 px-md-5 px-3">
       <h1 class="fs-3 fw-bold">Top Category</h1>
       <a href="#" class="home-categories-button">All Categories</a>
    </div>
    <div class="thewebsources-categories-cards px-md-5 px-3">
        <a href="#" class="card category-card d-flex flex-row justify-content-center align-items-center">
             <div class="category-image-box">
                <i class="fa-brands fa-html5"></i>
             </div>
             <div class="categories-text">
                <h1 class="fs-6 fw-bold text-uppercase">Learn html</h1>
             </div>
        </a>
        <a href="#" class="card category-card d-flex flex-row justify-content-center align-items-center">
             <div class="category-image-box">
                <i class="fa-brands fa-css3-alt"></i>
             </div>
             <div class="categories-text">
                <h1 class="fs-6 fw-bold text-uppercase">Learn css</h1>
             </div>
        </a>
        <a href="#" class="card category-card d-flex flex-row justify-content-center align-items-center">
             <div class="category-image-box">
                <i class="fa-solid fa-database"></i>
             </div>
             <div class="categories-text">
                <h1 class="fs-6 fw-bold text-uppercase">Learn mysql</h1>
             </div>
        </a>
        <a href="#" class="card category-card d-flex flex-row justify-content-center align-items-center">
             <div class="category-image-box">
             <i class="fa-brands fa-js"></i>
             </div>
             <div class="categories-text">
                <h1 class="fs-6 fw-bold text-uppercase">Learn javascript</h1>
             </div>
        </a>
        <a href="#" class="card category-card d-flex flex-row justify-content-center align-items-center">
             <div class="category-image-box">
             <i class="fa-brands fa-php"></i>
             </div>
             <div class="categories-text">
                <h1 class="fs-6 fw-bold text-uppercase">Learn php</h1>
             </div>
        </a>
    </div>
</div>

<!-- thewebsources category style end -->




<!-- home project section style start -->
<div class="container-fluid bg-white pb-5">
            <div class="row px-md-5 px-3 py-4">
                <h1 class="col h4 fw-bold text-dark lang_heading text-uppercase">Download Projects</h1>
                <div class="col-3 d-flex justify-content-end align-items-center"><a href="<?=BASE ?>projects" class="button">View More</a></div>
            </div>
            <div class="row px-md-5 px-3">
                 <div class="col">

                    <div class="course_card_group">

                        <a href="<?=BASE ?>" class="card bg-white course_card p-3 rounded-3">
                            <img src="<?=ASSETS ?>images/634249the-web30background45.jpg" class="card-img-top rounded-3" alt="...">
                            <div class="card-body pb-0">
                            <span class="time rounded-pill">4th Jan 2023</span>
                            <h1 class="card-title text-dark pt-3 pb-2 h5">How to create navigation using html css</h1>
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
                            <h1 class="card-title text-dark pt-3 pb-2 h5">How to create navigation using html css</h1>
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
                            <h1 class="card-title text-dark pt-3 pb-2 h5">How to create navigation using html css</h1>
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
                            <h1 class="card-title text-dark pt-3 pb-2 h5">How to create navigation using html css</h1>
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