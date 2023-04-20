<!-- Header start -->
<nav class="navbar shadow-sm sticky-top navbar-expand-lg tw-navigation py-3">
  <div class="container-fluid">
    <a href="<?=BASE ?>" class="thewebsources-logo">
        <img src="<?=ASSETS ?>images/mortarboard.png" alt="thewebsources icon">
        <span class="theweb">Theweb <small class="sources">sources</small></span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-md-5 ms-3 mb-2 mb-lg-0 tws-topnav">
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
             if(Auth::loggedIn()){
                echo '<a href="'.BASE.'logout" class="nav-link fw-bold button px-3 rounded-pill">Logout</a>';
             }else{
                echo '<a class="nav-link fw-bold button px-3 rounded-pill" href="'.BASE.'signup">Signup</a>';
             }
           ?>
        </li>
        </ul>

    </div>
  </div>
</nav>

<!-- Header end -->