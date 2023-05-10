<?php 
  $this->view("includes/header");
  $this->view("includes/navigation");

?>
<div id="box">
    <br>
   <center><h3 class="ms-sm-5 mb-sm-2">Signup and Send Feedback</h3></center> 
   <br><br>
    <div class="row">
        <div class="col-4 ms-sm-3">
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="your name" >

        </div>
        <div class="col-3">
           <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="your email">

        </div>
        <div class="col-4 ms-sm-2">
          <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="service">
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col-3 px-5">
            <button class="btn btn-sm btn-primary" type="submit">Signup</button>
        </div>
    </div>

</div>


<?php
  $this->view("includes/footer");
?>