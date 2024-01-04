<?php
    require_once('./frontend/component/header.php')
?>



<div class="container d-flex align-items-center justify-content-center" style="height: 550px">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 p-5 border border-success rounded" >
            <form class="row g-3 needs-validation" action="./frontend/controller/registrationController.php" method="post" novalidate>
                <div class="col-12">
                    <label for="validationCustom01" class="form-label">Full Name</label>
                    <input type="text" class="form-control" name="fname" id="validationCustom01" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <label for="validationCustom01" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="validationCustom01" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <label for="validationCustom01" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="validationCustom01" required>
                    <div class="valid-feedback">
                    Looks good!
                    </div>
                </div>
                <div class="col-12">
                    <label for="validationCustom04" class="form-label">Please Select your Role</label>
                    <select class="form-select" id="validationCustom04" name="role_id" required>
                        <option selected disabled value="">Choose...</option>
                        <option value='1'>Student</option>
                        <option value='2'>Tutor</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid state.
                    </div>
                </div>
                <div class="col-12">
                    <p>Already have an account? login <a href="./login.php">here</a></p>
                </div>
                <div class="col-12 d-flex">
                    <button class="btn btn-primary" type="submit">Registger</button>
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>

















<?php
    require_once('./frontend/component/footer.php')
?>