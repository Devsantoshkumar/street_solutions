<?php $this->view("admin/admin-includes/header") ?>

<div class="container-fluid p-0 admin-wrapper">

       <?php $this->view("admin/admin-includes/sidebar") ?>

    <div class="content p-3 px-4 position-relative">

        <?php $this->view("admin/admin-includes/topbar") ?>

        <!-- Fetch all queries start -->
        <div class="container">
            <div class="row py-4">
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
                         <a href="<?=BASE ?>actions/<?=$row->feedbacks_id; ?>" class="btn btn-sm btn-info">Take Action</a>
                    </div>
                    </div>
                </div>
                </div>
                <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
        <!-- Fetch all queries end -->

    </div>
    
</div>

<?php $this->view("admin/admin-includes/footer") ?>