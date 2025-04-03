<?php
ob_start();
require_once '../../../config/config.php';
require_once '../../../connection/db.php';
require_once BASE_PATH . 'controllers/MainCategoryController.php';

$title = "Edit Main Category";
$id = isset($_GET['id']) ? $_GET['id'] : null;

$MainCategoryController = new MainCategoryController();
$row = $MainCategoryController->edit($id);
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
                <form action="<?php echo BASE_URL ?>controllers/MainCategoryController.php" method="POST">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">NameKH</label>
                                <input type="text" name="TxtNameKH" class="form-control"
                                    value="<?php echo isset($row['NAME_KH']) ? $row['NAME_KH'] : ''; ?>" placeholder="Example" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">NameEN</label>
                                <input type="text" name="TxtNameEN" class="form-control"
                                    value="<?php echo isset($row['NAME_EN']) ? $row['NAME_EN'] : ''; ?>" placeholder="Example" />
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                <textarea name="TxtDesc" class="form-control" id="exampleFormControlTextarea1" rows="5"><?php echo $row['DESCRIPTION']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Status</label>
                                <select name="TxtStatus" class="form-select">
                                    <option value="1" <?php echo isset($row['STATUS']) && $row['STATUS'] == 1 ? 'selected' : ''; ?>>
                                        Active
                                    </option>
                                    <option value="0" <?php echo isset($row['STATUS']) && $row['STATUS'] == 0 ? 'selected' : ''; ?>>
                                        Inactive
                                    </option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <input type="hidden" name="id" value="<?= $row['ID'] ?? '' ?>">

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