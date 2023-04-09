<?php $this->view("includes/header") ?>

  <div class="container">
    <div class="row">
        <div class="col">
            <?php 
              
              if(count($errors)>0){
                show($errors);
              }
            
            ?>
        </div>
    </div>
    
    <div class="row">
        <div class="col"><h1 class="text-center">TheWebSource.com</h1></div>
    </div>
    <div class="row">
        <div class="col-5 m-auto py-5">
            <form method="POST">
                <div class="input-group">
                    <input type="text" class="form-control shadow-none my-3" name="firstname" placeholder="First name">
                </div>
                <div class="input-group">
                    <input type="text" class="form-control shadow-none my-3" name="lastname" placeholder="Last name">
                </div>
                <div class="input-group">
                    <input type="email" class="form-control shadow-none my-3" name="email" placeholder="Email address">
                </div>
                <div class="input-group">
                    <input type="submit" class="btn btn-sm btn-secondary" name="signup" value="Submit">
                </div>
            </form>
        </div>
    </div>
  </div>

<?php $this->view("includes/footer") ?>