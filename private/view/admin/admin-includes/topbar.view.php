<nav class="navbar rounded sticky-top navbar-expand-lg navbar-light bg-white shadow-sm topbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Pannel</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center">
        <li class="nav-item">
          <a class="nav-link fs-5 mx-1" href="<?=BASE ?>" target="_blank">
             <i class="fa-solid fa-arrow-up-right-from-square text-muted"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link fs-5 mx-1" href="#">
             <i class="fa-regular fa-bell text-muted"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle toggleProfile" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
             <img src="<?=ASSETS ?>images/user.png" alt="">
          </a>
          <ul class="dropdown-menu shadow-sm border-0 border-top dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li class="dropdown-item fs-6 text-center fw-bold text-muted">Santosh Kumar</li>
            <small class="dropdown-item text-center text-muted p-0">Admin</small>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fa-regular fa-user text-muted me-2"></i> Profile</a></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-gear text-muted me-2"></i> Settings</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><i class="fa-solid fa-arrow-right-from-bracket text-muted me-2"></i> Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>