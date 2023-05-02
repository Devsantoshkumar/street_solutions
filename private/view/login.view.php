
<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navigation'); ?>

<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-6 d-none d-md-block py-4 userFormImage userLoginForm"></div>

        <div class="col-12 col-md-6 d-flex flex-column pt-5" style="min-height: 90vh">
             <h1 class="text-center py-4 text-uppercase fw-bold text-muted fs-2 ">Login user</h1>
            <form method="post" class="userForm px-5">
                <div class="input-group" id="lemail">
                    <input type="email" name="email" class="form-control shadow-none p-3" autocomplete="off" placeholder="Email" value="<?=get_val('email'); ?>">
                </div>
                <div class="input-group" id="lpassword">
                    <input type="password" name="password" class="form-control shadow-none p-3" autocomplete="off" placeholder="password">
                </div>
                <button type="submit" id="button"  class="border-0 btn btn-danger fs-5 text-uppercase mx-0 p-3 formBTN">login</button>
            </form>
        </div>
    </div>
</div>

<?php $this->view('includes/footer'); ?>