<?php 
  $this->view("includes/header");
  $this->view("includes/navigation");
?>
<div class="container pt-5">
            <div class="row p-5">
                <?php if($rows): ?>
                <div class="col rounded p-3 shadow-sm bg-white">
                <?php foreach($rows as $row): ?>
                <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                    <img src="<?=BASE ?>uploads/<?=$row->image; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title"><?=$row->title; ?></h5>
                        <p class="card-text"><?=$row->description; ?></p>
                        <p class="card-text"><small class="text-muted"><?=$row->date; ?></small></p>
                        <?php 
                          if($row->status == 0){
                              $statu = "Feedback Pendding";
                          }else if($row->status == 1){
                             $statu = "Feedback On Progress";
                          }else{
                            $statu = "Feedback is forworded";
                          }
                        ?>
                        <span class="badge bg-primary"><?=$statu; ?></span>
                    </div>
                    </div>
                </div>
                </div>
                <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
<?php
  $this->view("includes/footer");
?>
    