<?php
ob_start();
require_once '../../../config/config.php';
require_once '../../../connection/db.php';
require_once BASE_PATH . 'controllers/UserController.php';

$title = "List User";
// var_dump(BASE_URL, BASE_PATH);
// die();

?>
<h4 class="fw-bold mb-2 d-flex justify-content-between align-items-center">
    List User
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
                            No
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            Username
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Password
                        </th>
                        <th>
                            Type
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
                    $UserController = new UserController();
                    $users = $UserController->listUser();
                    $No = 1;
                    foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo $No; ?></td>
                        <td><?php echo $user['USERID']; ?></td>
                        <td><?php echo $user['USERNAME']; ?></td>
                        <td><?php echo $user['EMAIL']; ?></td>
                        <td>********</td>
                        <td><?php echo empty($user['NAME_EN']) ? 'N/A' : $user['NAME_EN'] ?></td>
                        <td class="text-center">
                        <?php
                        if ($user['STATUS'] == 1){
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
                                <a href="edit.php?id=<?php echo $user['USERID']; ?>">
                                    <i class="bx bxs-edit"></i>
                                </a>
                                &nbsp;
                                <a href="javascript:void(0);" class="btnDelete" data-id="<?php echo $user['USERID']; ?>" name="btnDelete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                style="color:red;">
                                    <i class="bx bxs-trash"></i>
                                </a>
                            </td>
                    </tr>
                    <?php $No++; endforeach; ?>
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
        var deleteUrl = '<?php echo BASE_URL ?>controllers/UserController.php?delet_id=' + deleteId;
        $('#confirmDelete').attr('href', deleteUrl);
    });
});
</script>
<?php
    $content = ob_get_clean();
    include BASE_PATH . 'views/admin/master.php';
?>
