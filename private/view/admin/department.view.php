<?php 
  $this->view("includes/header");
  $this->view("includes/navigation");

  if(count($errors)>0){
      show($errors);
  }
?>
<div id="box" class="p-5">
    <br>
   <center><h3 class="ms-sm-5 mb-sm-2">Add Athorities</h3></center> 
   <br><br>
    <form method="POST">
    <div class="row">
        <div class="col">
            <select name="dapartment" class="form-control">
               <option selected disabled>Select Level of department</option>
               <option value="rural level">Rural Level</option>
               <option value="regional level">Regional Level</option>
               <option value="national level">National Level</option>
           </select>
        </div>
    </div>
    <br><br>


    <div class="row">
        <div class="col">
           <select name="state" class="form-control">
               <option selected disabled>Select State</option>
               <option value="up">Uttar Pradesh</option>
               <option value="gujarat">Gujarat</option>
               <option value="panjab">Panjab</option>
               <option value="vihar">Vihar</option>
           </select>
        </div>
        <div class="col">
           <select name="city" class="form-control">
               <option selected disabled>Select City</option>
               <option value="Lucknow">Lucknow</option>
               <option value="Kanpur">Kanpur</option>
               <option value="Hardoi">Hardoi</option>
               <option value="Sitapur">Sitapur</option>
           </select>
        </div>
    </div>
    <br><br>

    <div class="row">
        <div class="col-3 px-5">
            <button class="btn btn-sm btn-primary" type="submit">Add Department</button>
        </div>
    </div>
    </form>

</div>


<?php
  $this->view("includes/footer");
?>