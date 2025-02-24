<?php
ob_start();
require_once '../../../config/config.php';
require_once '../../../connection/db.php';
require_once BASE_PATH . 'controllers/SubCategoryController.php';

$title = "List Sub Category";
// var_dump(BASE_URL, BASE_PATH);
// die();

?>
<h4 class="fw-bold mb-2 d-flex justify-content-between align-items-center">
    List Sub Category
    <a href="create.php" style="font-size:30px;" class="text-primary">
        <i class="bi bi-plus-square-fill"></i>
    </a>
</h4>
<div class="card">
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered table-sm">
                <thead class="table-secondary text-center">
                    <tr>
                        <th>
                            No.
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Desc
                        </th>
                        <th>
                            Slug
                        </th>
                        <th>
                            Main Category
                        </th>
                        <th>
                            Status
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $SubCategoryController = new SubCategoryController();
                    $rows = $SubCategoryController->list();
                    foreach ($rows as $row): 
                    $No = 1;
                    ?>
                    <tr>
                        <td><?php echo $No ?></td>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo $row['NAME']; ?></td>
                        <td><?php echo empty($row['DESCRIPTION']) ? 'N/A' : $row['DESCRIPTION']; ?></td>
                        <td><?php echo $row['SLUG']; ?></td>
                        <td><?php echo $row['MAIN_CATEGORY_NAME']; ?></td>
                        <td class="text-center">
                        <?php
                        if ($row['STATUS'] == 1){
                            ?>
                            <span class="badge bg-label-primary me-1">Active</span>
                            <?php
                        }else{
                            ?>
                            <span class="badge bg-label-danger me-1">Inactive</span>
                        <?php 
                        }
                        ?>
                        </td>
                        <td class="text-center">
                                <a href="edit.php?id=<?php echo $row['ID']; ?>">
                                    <i class="bx bxs-edit"></i>
                                </a>
                                &nbsp;
                                <a href="javascript:void(0);" class="btnDelete" data-id="<?php echo $row['ID']; ?>" name="btnDelete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                style="color:red;">
                                    <i class="bx bxs-trash"></i>
                                </a>
                            </td>
                    </tr>
                    <?php 
                    $No++;
                    endforeach; 
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Script confirm delete -->
<script>
$(document).ready(function () {
    $('.btnDelete').on('click', function () {
        var deleteId = $(this).data('id');
        var deleteUrl = '<?php echo BASE_URL ?>controllers/SubCategoryController.php?delet_id=' + deleteId;
        $('#confirmDelete').attr('href', deleteUrl);
    });
});
</script>
<?php
    $content = ob_get_clean();
    include BASE_PATH . 'views/admin/master.php';
?>
