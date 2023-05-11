<?php 
  $this->view("includes/header");
  $this->view("includes/navigation");

?>

<div class="row">
 <div class="col-2 mt-sm-5 ms-sm-5 border border-3 " > <br> 
   <select class="w-100 fs-4">
      <option value="option1">State
      </option>
      <option value="option2">up</option>
      <option value="option3">bihar</option>
    </select> <br> <br><br><br>
    <select class="w-100 fs-4">
      <option value="option1">City
      </option>
      <option value="option2">lucknow</option>
      <option value="option3">kanpur</option>
    </select>
  </div>
  <div class="col-1">

  </div>
  <div class="col-8 mt-sm-5">
    <div class="row border border-2 pt-sm-2 pb-sm-2">
      <div class="col-2">
      <img src="<?=ASSETS ?>images/img4.jpg" alt="" class="ms-sm-2 " height="130s" >
      </div>
      <div class="col-10 ">
      <h2>Title</h2>
      <br>
      <p >Description</p>
      <span  >location</span>
      <span class="ms-sm-5">user name</span>
      <span  class="ms-sm-5">Date</span>
      </div>
    </div> <br> <br>
    <div class="row border border-2 pt-sm-2 pb-sm-2">
      <div class="col-2">
      <img src="<?=ASSETS ?>images/img4.jpg" alt="" class="ms-sm-2 " height="130s" >
      </div>
      <div class="col-10 ">
      <h2>Title</h2>
      <br>
      <p >Description</p>
      <span  >location</span>
      <span class="ms-sm-5">user name</span>
      <span  class="ms-sm-5">Date</span>
      </div>
    </div> <br>
    <div class="row border border-2 pt-sm-2 pb-sm-2">
      <div class="col-2">
      <img src="<?=ASSETS ?>images/img4.jpg" alt="" class="ms-sm-2 " height="130s" >
      </div>
      <div class="col-10 ">
      <h2>Title</h2>
      <br>
      <p >Description</p>
      <span  >location</span>
      <span class="ms-sm-5">user name</span>
      <span  class="ms-sm-5">Date</span>
      </div>
    </div>
   </div>
  </div>
</div>
<br><br>
<?php
  $this->view("includes/footer");
?>
    