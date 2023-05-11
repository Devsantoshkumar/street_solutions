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
            <div class="row">
              <div class="col">
                <div class="card border-0 p-4 homelogin">
                   <form action="">
                    <div class="row">
                       <h4 class="text-center text-light py-2">Login</h4>
                    </div>
                   <div class="row">
        <div class="col">
           <input type="email" name="email" value="<?=get_val("email")?>" class="form-control inputFields" id="exampleFormControlInput1" placeholder="your email">
          </div>
    </div>
    <br><br>


    <div class="row">
        <div class="col">
          <input type="password" name="password" class="form-control inputFields" id="exampleFormControlInput1" placeholder="Password" >
          <small class="text-danger"><?=isset($errors['password']) ? $errors['password'] : "" ?></small>
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col">
          <small>I have already an account. <a href="<?=BASE ?>signup" class="badge bg-primary">Signup</a></small>
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col-3 px-5">
            <button class="btn btn-sm btn-primary" type="submit">Signup</button>
        </div>
    </div>
    </form>
     
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
    