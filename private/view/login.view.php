<?php 
  $this->view("includes/header");
  $this->view("includes/navigation");
?>
<div id="box" class="p-5">
    <br>
   <center><h3 class="ms-sm-5 mb-sm-2">Login</h3></center> 
   <small class="text-danger"><?=isset($errors['email']) ? $errors['email'] : "" ?></small>
   <br><br>
    <form method="POST">
    <div class="row">
        <div class="col">
           <input type="email" name="email" value="<?=get_val("email")?>" class="form-control" id="exampleFormControlInput1" placeholder="your email">
          </div>
    </div>
    <br><br>


    <div class="row">
        <div class="col">
          <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" >
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


<?php
  $this->view("includes/footer");
?>