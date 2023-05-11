<?php 
  $this->view("includes/header");
  $this->view("includes/navigation");
?>
<div id="box" class="p-5">
    <br>
   <center><h3 class="ms-sm-5 mb-sm-2">Signup and Send Feedback</h3></center> 
   <br>
    <form method="POST">
    <div class="row">
        <div class="col">
          <input type="text" name="name" value="<?=get_val("name")?>" class="form-control" id="exampleFormControlInput1" placeholder="your name" >
          <small class="text-danger"><?=isset($errors['name']) ? $errors['name'] : "" ?></small>
        </div>
        <div class="col">
           <input type="email" name="email" value="<?=get_val("email")?>" class="form-control" id="exampleFormControlInput1" placeholder="your email">
           <small class="text-danger"><?=isset($errors['email']) ? $errors['email'] : "" ?></small>
          </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
           <input type="tel" name="phone" value="<?=get_val("phone")?>" class="form-control" id="exampleFormControlInput1" placeholder="Enter phone">
           <small class="text-danger"><?=isset($errors['phone']) ? $errors['phone'] : "" ?></small>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
          <input type="password" name="password" class="form-control" id="exampleFormControlInput1" placeholder="Password" >
          <small class="text-danger"><?=isset($errors['password']) ? $errors['password'] : "" ?></small>
        </div>
        <div class="col">
          <input type="password" name="cpassword" class="form-control" id="exampleFormControlInput1" placeholder="Password" >
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col">
          <small>I have already an account. <a href="<?=BASE ?>login" class="badge bg-primary">Login</a></small>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-3 px-2">
            <button class="btn btn-sm btn-primary" type="submit">Signup</button>
        </div>
    </div>
    </form>

</div>


<?php
  $this->view("includes/footer");
?>