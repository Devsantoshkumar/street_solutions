<!-- Header start -->
<nav class="navbar shadow-sm sticky-top navbar-expand-lg tw-navigation py-3">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?=BASE ?>">TW sources</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-5 mb-2 mb-lg-0 tws-topnav">
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark" href="<?=BASE ?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark" href="<?=BASE ?>projects">Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark" href="<?=BASE ?>comming">Collage Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark" href="<?=BASE ?>comming">Internship Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark" href="<?=BASE ?>comming">Templates</a>
        </li>
        <li class="nav-item">
          <a class="nav-link fw-bold px-lg-3 px-0 text-dark" href="<?=BASE ?>comming">Courses</a>
        </li>
        </ul>

        
        <ul class="navbar-nav ms-auto">
        <li class="nav-item">
           <?php 
             if(false){
                echo '<a href="'.BASE.'/logout" id="tw-user" class="fw-bold px-3 text-dark">'.Auth::user('firstname').'</a>';
             }else{
                echo '<a class="nav-link fw-bold button" href="'.BASE.'signup">Signup</a>';
             }
           ?>
        </li>
        </ul>

    </div>
  </div>
</nav>

<!-- Header end -->