<?php
ob_start();
require_once '../../../config/config.php';
require_once '../../../connection/db.php';
require_once BASE_PATH . 'controllers/MainCategoryController.php';
require_once BASE_PATH . 'controllers/SubCategoryController.php';
require_once BASE_PATH . 'controllers/UserController.php';
require_once BASE_PATH . 'controllers/ArticleController.php';

$title = "Edit Article";
$id = isset($_GET['id']) ? $_GET['id'] : null;

$ArticleController = new ArticleController();
$art = $ArticleController->edit($id);
?>
<div class="d-flex justify-content-between align-items-center mb-4">
    <h4 class="fw-bold mb-0">Edit Article</h4>
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
                                    $main_rows = $MainCategoryController->listForSelect();
                                    foreach ($main_rows as $row):
                                    $selected = ($row['ID'] == $art['MAIN_CATEGORY_ID']) ? 'selected' : '';
                                    ?>
                                        <option value="<?php echo $row['ID']; ?>" <?php echo $selected ?>>
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
                                    value="<?php echo isset($art['TITLE']) ? $art['TITLE'] : ''; ?>" placeholder="Example" />
                            </div>
                        </div>
                        
                        <!-- <input type="hidden" name="TxtPublishedDate" class="form-control"
                        value="<?php echo $current_date ?>"/> -->
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Author</label>
                                <input type="text" name="TxtAuthorID" class="form-control"
                                    value="<?php echo isset($art['AUTHOR_ID']) ? $art['AUTHOR_ID'] : ''; ?>" placeholder="Example" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Reference</label>
                                <input type="text" name="TxtReference" class="form-control"
                                    value="<?php echo isset($art['REFERENCE']) ? $art['REFERENCE'] : ''; ?>" placeholder="Example" />
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="defaultSelect" class="form-label">Status</label>
                                <select name="TxtStatus" class="form-select">
                                    <option select hidden>--------------------------------------------------------------------------------------------------------------------------------------------------</option>
                                    <option value="Published" <?php echo ($art['STATUS'] == 'Published') ? 'selected' : ''; ?>>Published</option>
                                    <option value="Draft" <?php echo ($art['STATUS'] == 'Draft') ? 'selected' : ''; ?>>Draft</option>
                                    <option value="Archived" <?php echo ($art['STATUS'] == 'Archived') ? 'selected' : ''; ?>>Archived</option>
                                    <option value="Slide" <?php echo ($art['STATUS'] == 'Slide') ? 'selected' : ''; ?>>Slide</option>
                                </select>
                            </div>
                        </div>
                        <?php
                        $current_date = date("Y-m-d");
                        ?>
                        <div class="col-sm-4">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Published Date</label>
                                <input type="text" name="TxtPublishedDate" class="form-control"
                                    value="<?php echo $current_date ?>" placeholder="Example" />
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Contents</label>
                                <textarea cols="206" rows="10" id="Description" name="TxtContent">
                                    <?php echo isset($art['CONTENT']) && $art['CONTENT'] instanceof OCILob ? $art['CONTENT']->load() : ''; ?>
                                </textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Image</label>
                                <input class="form-control" value="" accept="image/*" onchange="loadFile(event)" name="TxtImageURL" type="file" id="upload">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Old Image</label>
                                <img src="<?php echo BASE_URL . 'storage/uploads/article/' . $art['IMAGE_URL']; ?>" class="d-block rounded" height="261" width="500">
                                <input type="hidden" name="ExistingImage" value="<?php echo isset($art['IMAGE_URL']) ? $art['IMAGE_URL'] : ''; ?>">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Preview</label>
                                <img  class="d-block rounded" height="261" width="500" id="output">
                            </div>
                        </div>
                    </div>
                    <input class="form-control" type="hidden" name="id" value="<?php echo $id; ?>">
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
                                    $sub_rows = $SubCategoryController->list();
                                    foreach ($sub_rows as $row):
                                    $selected = ($row['ID'] == $art['SUB_CATEGORY_ID']) ? 'selected' : '';
                                    ?>
                                        <option value="<?php echo $row['ID']; ?>" <?php echo $selected ?>>
                                            <?php echo $row['NAME']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div> -->