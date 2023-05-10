<?php $this->view("admin/admin-includes/header") ?>

<div class="container-fluid p-0 admin-wrapper">

       <?php $this->view("admin/admin-includes/sidebar") ?>

    <div class="content p-3 px-4 position-relative">

        <?php $this->view("admin/admin-includes/topbar") ?>

        <!-- Fetch all queries start -->
        <div class="container">
            <div class="row py-4">
                <div class="col rounded p-3 shadow-sm bg-white">
                     <div class="row d-flex justify-content-center">
                        <div class="col-6">
                            <form method="POST">
                                <input type="text" name="dapartment" class="form-control my-3" placeholder="Enter the departement name">
                                <button type="submit" class="btn btn-success">Add Department</button>
                            </form>
                        </div>
                     </div>
                </div>
            </div>

            <div class="row py-4">
                <div class="col rounded p-3">
                <?php if($rows): ?>
                <table class="table table-hover">
                    <tr>
                        <th>S.No.</th>
                        <th>Authority name</th>
                    </tr>
                    <?php foreach($rows as $row): ?>
                    <tr>
                        <td><?=$row->dapartments_id; ?></td>
                        <td><?=$row->dapartment; ?></td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Fetch all queries end -->

    </div>
    
</div>

<?php $this->view("admin/admin-includes/footer") ?>