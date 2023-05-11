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
                   Hello
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
    