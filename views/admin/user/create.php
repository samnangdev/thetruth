<?php
ob_start();
require_once '../../../config/config.php';
require_once '../../../connection/db.php';
require_once '../../../controllers/UserTypeController.php';
$title = "Create User";
?>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">Add New User</h4>
            <a href="index.php">
                <button type="button" style="font-size:8px;" class="btn btn-primary">
                    <i class='bx bx-arrow-back'></i>
                </button>
            </a>
        </div>
        <div class="row">
            <!-- Form controls -->
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <form action="<?php echo BASE_URL ?>controllers/UserController.php" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Name In Kh</label>
                                        <input type="text" name="TxtNameInKh" class="form-control"
                                            value="" placeholder="Example" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Username</label>
                                        <input type="text" name="TxtUsername" class="form-control"
                                            value="" placeholder="Example" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Email</label>
                                        <input type="email" name="TxtEmail" class="form-control"
                                            value="" placeholder="Example@example.com" />
                                        <!-- @if ($errors->has('TxtEmail'))
                                            <div class="form-text text-danger">{{ $errors->first('TxtEmail') }}
                                            </div>
                                        @endif -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" name="TxtPassword" class="form-control"
                                            value="" placeholder="********" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Confirm Password <span
                                                class="text-danger">*</span></label>
                                        <input type="password" name="TxtConfirmPassword" class="form-control"
                                            value="" placeholder="********" />
                                        <!-- @if ($errors->has('TxtConfirmPassword'))
                                            <div class="form-text text-danger">{{ $errors->first('TxtConfirmPassword') }}
                                            </div>
                                        @endif -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">UserType</label>
                                        <select name="TxtUserTypeID" class="form-select">
                                            <option select hidden>
                                                --------------------------------------------------------------------------------------------------------------------------------------------------
                                            </option>
                                            <?php 
                                                $UserTypeController = new UserTypeController();
                                                $usertypes = $UserTypeController->list();
                                                foreach ($usertypes as $usertype):
                                            ?> 
                                                <option value="<?php echo $usertype['ID']; ?>">
                                                    <?php echo $usertype['NAME_EN']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-end">
                                    <button type="submit" name="btnSave" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php
    $content = ob_get_clean();
    include BASE_PATH . 'views/admin/master.php';
?>