<?php
ob_start();
require_once '../../../config/config.php';
require_once '../../../connection/db.php';
require_once '../../../controllers/MainCategoryController.php';

$title = "Create Sub Catagory";
?>
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h4 class="fw-bold mb-0">Add New Sub Category</h4>
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
                        <form action="<?php echo BASE_URL ?>controllers/SubCategoryController.php" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlInput1" class="form-label">Name</label>
                                        <input type="text" name="TxtName" class="form-control"
                                            value="" placeholder="Example" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">Main Category</label>
                                        <select name="TxtMainCategoryID" class="form-select">
                                            <option select hidden>
                                                --------------------------------------------------------------------------------------------------------------------------------------------------
                                            </option>
                                            <?php 
                                                $MainCategoryController = new MainCategoryController();
                                                $rows = $MainCategoryController->list();
                                                foreach ($rows as $row):
                                            ?> 
                                                <option value="<?php echo $row['ID']; ?>">
                                                    <?php echo $row['NAME']; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                                        <textarea name="TxtDesc" class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="mb-3">
                                        <label for="defaultSelect" class="form-label">Status</label>
                                        <select name="TxtStatus" class="form-select">
                                            <option select hidden>
                                                --------------------------------------------------------------------------------------------------------------------------------------------------
                                            </option>
                                            <option value="1" selected>Active</option>
                                            <option value="0">Inactive</option>
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