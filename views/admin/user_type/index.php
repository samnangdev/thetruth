<?php
ob_start();
require_once '../../../config/config.php';
require_once '../../../connection/db.php';
require_once BASE_PATH . 'controllers/UserTypeController.php';

$title = "List User Type";
?>
<h4 class="fw-bold mb-2 d-flex justify-content-between align-items-center">
    List User Type
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
                            NameKH
                        </th>
                        <th>
                            NameEN
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
                    $UserTypeController = new UserTypeController();
                    $rows = $UserTypeController->list();
                    $No = 1;
                    foreach ($rows as $row): 
                    ?>
                    <tr>
                        <td><?php echo $No ?></td>
                        <td><?php echo $row['ID']; ?></td>
                        <td><?php echo empty($row['NAME_KH']) ? 'N/A' : $row['NAME_KH'] ?></td>
                        <td><?php echo empty($row['NAME_EN']) ? 'N/A' : $row['NAME_EN'] ?></td>
                        <td>
                                <div class="d-flex justify-content-center">
                                    <div class="form-check form-switch">
                                        <input
                                            class="form-check-input toggle-status <?php echo ($_SESSION['user_type_name'] === 'Author') ? 'disabled-link' : ''; ?>"
                                            type="checkbox"
                                            role="switch"
                                            id="flexSwitchCheckChecked_<?php echo $row['ID']; ?>"
                                            data-id="<?php echo $row['ID']; ?>"
                                            <?php echo ($row['STATUS'] == 1) ? 'checked' : ''; ?>>
                                    </div>
                                </div>
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
<!-- Script change status -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll(".toggle-status").forEach(function(checkbox) {
            checkbox.addEventListener("change", function() {
                let id = this.getAttribute("data-id"); // Get category ID
                let newStatus = this.checked ? 1 : 0; // Get status (1 = checked, 0 = unchecked)

                // Redirect with parameters
                window.location.href = `<?php echo BASE_URL ?>controllers/UserTypeController.php?update_id=${id}&status=${newStatus}`;
            });
        });
    });
</script>
<!-- Script confirm delete -->
<script>
$(document).ready(function () {
    $('.btnDelete').on('click', function () {
        var deleteId = $(this).data('id');
        var deleteUrl = '<?php echo BASE_URL ?>controllers/UserTypeController.php?delet_id=' + deleteId;
        $('#confirmDelete').attr('href', deleteUrl);
    });
});
</script>
<?php
    $content = ob_get_clean();
    include BASE_PATH . 'views/admin/master.php';
?>
