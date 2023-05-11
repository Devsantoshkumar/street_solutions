<?php
  $this->view("includes/header");
  $this->view("includes/navigation");
  // $this->view("includes/section");
  
?>
   
<div class="container-fluid">
  <div class="row">
    <div class="col p-0 homePage">
      <div class="bg-imgbox">
        <img src="<?=ASSETS ?>images/img1.jpg" alt="">
      </div>
      <div class="overlay">
          <div class="container">
            <div class="row p-5">
              <div class="col pt-5">
                <div class="card border-0 p-4 homelogin">
                   <form method="POST">
                    <div class="row">
                       <h4 class="text-center text-light py-2">Login</h4>
                    </div>
                   <div class="row">
                      <div class="col">
                        <input type="email" name="email" value="<?=get_val("email")?>" class="form-control inputFields" id="exampleFormControlInput1" placeholder="your email">
                        <small class="text-danger text-danger"><?=isset($errors['email']) ? $errors['email'] : "" ?></small>
                        </div>
                  </div>
                  <br><br>


                <div class="row">
                    <div class="col">
                      <input type="password" name="password" class="form-control inputFields" id="exampleFormControlInput1" placeholder="Password" >
                      <small class="text-danger text-danger"><?=isset($errors['password']) ? $errors['password'] : "" ?></small>
                    </div>
                </div>
                <br><br>

            <div class="row">
                <div class="col">
                  <small class="text-light">Create new account. <a href="<?=BASE ?>signup" class="badge bg-primary">Signup</a></small>
                </div>
            </div>
            <br><br>

          <div class="row">
              <div class="col-3 px-3">
                  <button class="btn text-nowrap btn-sm btn-primary" type="submit">Login and Send Feedback</button>
              </div>
          </div>
        </form>
     
                </div>
             </div>
            </div>



          <div class="row">
            <div class="col">
                <div class="card card-stats">
                <div class="card-header text-center text-light py-3">Pendding Feedbacks</div>
                <div class="card-body">
                    <h2 class="text-center text-light">5</h2>
                </div>
                </div>
            </div>
            <div class="col">
              <div class="card card-stats">
                <div class="card-header text-center text-light py-3">Pendding Feedbacks</div>
                <div class="card-body">
                    <h2 class="text-center text-light">20</h2>
                </div>
              </div>
            </div>
            <div class="col">
                <div class="card card-stats">
                <div class="card-header text-center text-light py-3">Pendding Feedbacks</div>
                <div class="card-body">
                    <h2 class="text-center text-light">25</h2>
                </div>
                </div>
            </div>
          </div>


          </div>
      </div>
    </div>
  </div>
</div>


<?php
  $this->view("includes/footer");
?>
    