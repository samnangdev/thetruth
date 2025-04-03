<?php
ob_start();
require_once '../../../config/config.php';
require_once '../../../connection/db.php';
require_once '../../../controllers/MainCategoryController.php';
require_once '../../../controllers/SubCategoryController.php';
$title = "Create Article";
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">Add An New Article</h4>
    <a href="index.php">
        <button type="button" style="font-size:8px;" class="btn btn-primary">
            <!-- <i class='bx bx-arrow-back'></i> -->
            <i class='bx bx-chevrons-left'></i>
        </button>
    </a>
</div>
<div class="row">
    <!-- Form controls -->
    <div class="col-md-12">
        <div class="card mb-4">
            <div class="card-body">
                <form action="<?php echo BASE_URL ?>controllers/ArticleController.php" enctype="multipart/form-data" method="POST">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Main Category</label>
                                <select name="TxtMainCategoryID" class="form-select">
                                    <option select hidden>
                                        --------------------------------------------------------------------------------------------------------------------------------------------------
                                    </option>
                                    <?php
                                    $MainCategoryController = new MainCategoryController();
                                    $rows = $MainCategoryController->listForSelect();
                                    foreach ($rows as $row):
                                    ?>
                                        <option value="<?php echo $row['ID']; ?>">
                                            <?php echo $row['NAME_KH']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Title</label>
                                <input type="text" name="TxtTitle" class="form-control"
                                    value="" placeholder="Example" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Author</label>
                                <input disabled type="text" value="<?php echo $_SESSION['username'] ?>" name="" class="form-control"
                                     placeholder="Example" />
                                <input type="hidden" value="<?php echo $_SESSION['user_id'] ?>" name="TxtAuthorID" class="form-control"
                                     placeholder="Example" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Reference</label>
                                <input type="text" name="TxtReference" class="form-control"
                                    value="" placeholder="Example" />
                            </div>
                        </div>
                        <?php
                        $current_date = date("Y-m-d");
                        ?>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Status</label>
                                <select name="TxtStatus" class="form-select">
                                    <!-- <option select hidden>
                                        --------------------------------------------------------------------------------------------------------------------------------------------------
                                    </option> -->
                                    <option selected value="Published">Published</option>
                                    <option value="Draft">Draft</option>
                                    <option value="Archived">Archived</option>
                                    <option value="Slide">Slide</option>
                                        
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Published Date</label>
                                <input disabled type="date" name="TxtPublishedDate" class="form-control"
                                    value="<?php echo $current_date ?>" placeholder="Example" />
                            </div>
                        </div>
                        <!-- <input type="hidden" name="TxtPublishedDate" class="form-control"
                        value="<?php echo $current_date ?>"/> -->
                        <!-- <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Author</label>
                                <input type="text" name="TxtAuthorID" class="form-control"
                                    value="" placeholder="Example" />
                            </div>
                        </div> -->
                        
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Contents</label>
                                <textarea cols="206" rows="10" id="Description" name="TxtContent"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" accept="image/*" onchange="loadFile(event)" name="TxtImageURL" type="file" id="upload">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Preview</label>
                                <img  class="d-block rounded" height="261" width="500" id="output">
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
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script> 
<?php
$content = ob_get_clean();
include BASE_PATH . 'views/admin/master.php';
?>
<!-- <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Sub Category</label>
                                <select name="TxtSubCategoryID" class="form-select">
                                    <option select hidden>
                                        --------------------------------------------------------------------------------------------------------------------------------------------------
                                    </option>
                                    <?php
                                    $SubCategoryController = new SubCategoryController();
                                    $rows = $SubCategoryController->list();
                                    foreach ($rows as $row):
                                    ?>
                                        <option value="<?php echo $row['ID']; ?>">
                                            <?php echo $row['NAME']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div> -->