<?php
    require_once('./frontend/component/header.php')
?>

<div class="container d-flex align-items-center justify-content-center" style="height: 550px">
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8 p-5 border border-success rounded" >
            <form class="row g-3 needs-validation" action="./frontend/controller/loginController.php" method="post" novalidate>
                <div class="row">
                    <div class="col">
                        <label for="validationCustom01" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="validationCustom01" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="validationCustom01" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="validationCustom01" required>
                        <div class="valid-feedback">
                        Looks good!
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Are you new to this website? register <a href="./register.php">here</a></p>
                    </div>
                </div>
                <div class="col-12 d-flex">
                    <button class="btn btn-primary" type="submit">Login</button>
                </div>
            </form>
        </div>
        <div class="col-2"></div>
    </div>
</div>


<?php
    require_once('./frontend/component/footer.php')
?>