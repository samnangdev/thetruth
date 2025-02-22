<?php
    ob_start();
    require_once '../../../config/config.php';
    require_once '../../../connection/db.php';
    $title      = "List Year";
    $select_row = "SELECT * FROM tblyear";
    $result     = mysqli_query($conn, $select_row);
?>
<h4 class="fw-bold mb-2 d-flex justify-content-between align-items-center">
    បញ្ជី ឆ្នាំ
    <a href="create.php" style="font-size:30px;" class="text-primary">
        <i class="bi bi-plus-square-fill "></i>
    </a>
</h4>
<div class="card">
    <div class="card-body">
        <div class="table-responsive text-nowrap">
            <table class="table table-bordered table-sm">
                <thead class="table-secondary text-center">
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Name KH
                        </th>
                        <="th>
                            Name EN
                        </th>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                            while ($row = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $row['YearID'] . "</td>";
                                echo "<td>" . $row['YearNameKH'] . "</td>";
                                echo "<td>" . $row['YearNameEN'] . "</td>";
                            ?>
                            <td class="text-center">
                                <a href="edit.php?id=<?php echo $row['YearID']; ?>">
                                    <i class="bx bxs-edit"></i>
                                </a>
                                &nbsp;
                                <a href="javascript:void(0);" class="btnDelete" data-id="<?php echo $row['YearID']; ?>" name="btnDelete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                    style="color:red;">
                                    <i class="bx bxs-trash"></i>
                                </a>
                            </td>
                        <?php
                            echo "</tr>";
                            }
                        ?>
                    </tr>
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
            var deleteUrl = '<?php echo BASE_URL ?>actions/YearAction.php?id=' + deleteId;
            $('#confirmDelete').attr('href', deleteUrl);
        });
    });
</script>
<?php
    $content = ob_get_clean();
    include BASE_PATH . 'views/admin/master.php';
?>