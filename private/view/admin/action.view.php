<?php $this->view("admin/admin-includes/header") ?>

<div class="container-fluid p-0 admin-wrapper">

       <?php $this->view("admin/admin-includes/sidebar") ?>

    <div class="content p-3 px-4 position-relative">

        <?php $this->view("admin/admin-includes/topbar") ?>


        <!-- Fetch all queries start -->
        <div class="container">
            <div class="row py-4">
                <div class="col rounded p-3 shadow-sm bg-white">
                    <?php if($rows): ?>
                    <div class="card border-0">
                        <div class="row">
                            <div class="col">
                                <div class="card">
                                    <img src="<?=BASE ?>uploads/<?=$rows[0]->image; ?>" class="card-img-top" alt="...">
                                </div>
                            </div>
                            <div class="col">
                            <div class="card">
                                <video src="<?=BASE ?>uploads/<?=$rows[0]->video; ?>" class="card-img-top" controls></video>
                             </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header bg-white fw-bold">Subject of the spot</div>
                                    <div class="card-body">
                                        <div class="card-text fw-bold"><?=$rows[0]->title; ?></div>
                                        <div class="card-text"><?=$rows[0]->description; ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row py-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header bg-white fw-bold">Location of the spot</div>
                                    <div class="card-body">
                                        <div class="card-text"><?=$rows[0]->location; ?></div>
                                        <p class="card-text"><small class="text-muted"><?=$rows[0]->date; ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row py-3">
                            <div class="col">
                                <div class="card">
                                    <div class="card-header bg-white fw-bold">Take a action</div>
                                    <div class="card-body">
                                        <a href="<?=BASE ?>actions/taken/<?=$rows[0]->feedbacks_id; ?>" class="btn btn-sm btn-info">Action Taken</a>
                                        <a href="<?=BASE ?>actions/forwarded/<?=$rows[0]->feedbacks_id; ?>" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Forwarded to Next Authority</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Fetch all queries end -->

    </div>
    
</div>


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form method="POST" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Forward to Other Authority</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
         <div>
              <?php
                 $authority = new Dapartment();
                 $department = $authority->findAll();
                 if($department):
              ?>
              <select name="department_id" class="form-control">
                <option selected disabled>Select authority</option>
                <?php foreach($department as $row): ?>
                <option value="<?=$row->dapartments_id; ?>"><?=$row->dapartment; ?></option>
                <?php endforeach; ?>
              </select>
              <?php endif; ?>

              <select name="state" class="form-control my-3">
                <option selected disabled>Select State</option>
                <option value="up">Uttar Pradesh</option>
                <option value="gujrat">Gujrat</option>
                <option value="vihar">Vihar</option>
              </select>

              <select name="city" class="form-control my-3">
                <option selected disabled>Select City</option>
                <option value="Lucknow">Lucknow</option>
                <option value="Kanpur">Kanpur</option>
                <option value="Noida">Noida</option>
              </select>
         </d>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Forward</button>
      </div>
    </form>
  </div>
</div>

<?php $this->view("admin/admin-includes/footer") ?>