
<?php $this->view('includes/header'); ?>
<?php $this->view('includes/navigation'); ?>

<div class="container-fluid bg-white">
    <div class="row">
        <div class="col-6 d-none d-md-block py-4 userFormImage userLoginForm"></div>

        <div class="col-12 col-md-6 d-flex flex-column pt-5" style="min-height: 90vh">
             <h1 class="text-center py-4 text-uppercase fw-bold text-muted fs-2 ">Email Verification</h1>
            <form method="post" class="userForm px-5">
                <div class="input-group" id="lemail">
                    <input type="text" name="otp" class="form-control shadow-none p-3" autocomplete="off" placeholder="Enter 6 digit otp" value="<?=get_val('otp'); ?>">
                </div>
                <button type="submit" id="button"  class="border-0 btn btn-danger fs-5 text-uppercase mx-0 p-3 formBTN">Verify</button>
            </form>
            <small class="py-4 mx-5">OTP is expired. <a href="<?=BASE ?>verify_email/otpsend" class="text-danger fw-bold">Send again</a></small>
        </div>
        
    </div>
</div>

<?php $this->view('includes/footer'); ?>