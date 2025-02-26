<?php
ob_start();
require_once '../../../config/config.php';
require_once '../../../connection/db.php';
require_once BASE_PATH . 'controllers/UserController.php';
require_once '../../../controllers/UserTypeController.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

$title = "Edit User";
$id = isset($_GET['id']) ? $_GET['id'] : null;

$UserController = new UserController();
$user = $UserController->editUser($id);
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">Edit User</h4>
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
                                <label for="exampleFormControlInput1" class="form-label">Username</label>
                                <input type="text" name="TxtUsername" class="form-control"
                                    value="<?php echo isset($user['USERNAME']) ? $user['USERNAME'] : ''; ?>" placeholder="Example" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email</label>
                                <input type="email" name="TxtEmail" class="form-control"
                                    value="<?php echo isset($user['EMAIL']) ? $user['EMAIL'] : ''; ?>" placeholder="Example@example.com" />
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
                                    value="<?php echo isset($user['PASSWORD']) ? $user['PASSWORD'] : ''; ?>" placeholder="********" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Confirm Password <span
                                        class="text-danger">*</span></label>
                                <input type="password" name="TxtConfirmPassword" class="form-control"
                                    value="<?php echo isset($user['PASSWORD']) ? $user['PASSWORD'] : ''; ?>" placeholder="********" />
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
                                    <?php
                                    $UserTypeController = new UserTypeController();
                                    $usertypes = $UserTypeController->list();
                                    foreach ($usertypes as $usertype):
                                        $selected = ($usertype['ID'] == $user['USERTYPEID']) ? 'selected' : '';
                                    ?>
                                        <option value="<?php echo $usertype['ID']; ?>" <?php echo $selected; ?>>
                                            <?php echo $usertype['NAME_EN']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Status</label>
                                <select name="TxtStatus" class="form-select">
                                    <option value="1" <?php echo isset($user['STATUS']) && $user['STATUS'] == 1 ? 'selected' : ''; ?>>
                                        Active
                                    </option>
                                    <option value="0" <?php echo isset($user['STATUS']) && $user['STATUS'] == 0 ? 'selected' : ''; ?>>
                                        Inactive
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $user['USERID'] ?? '' ?>">

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