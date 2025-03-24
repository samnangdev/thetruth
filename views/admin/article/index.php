<?php
ob_start();
require_once '../../../config/config.php';
require_once '../../../connection/db.php';
require_once BASE_PATH . 'controllers/ArticleController.php';

$title = "List Article";
// var_dump(BASE_URL, BASE_PATH);
// die();

?>
<h4 class="fw-bold mb-2 d-flex justify-content-between align-items-center">
    List Article
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
                            Title
                        </th>
                        <!-- <th>
                            Main Cate
                        </th> -->
                        <th>
                            Category
                        </th>
                        <!-- <th>
                            Slug
                        </th> -->
                        <th>
                            Author
                        </th>
                        <th>
                            Published
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
                    $ArticleController = new ArticleController();
                    $rows = $ArticleController->list();
                    foreach ($rows as $row):
                        $No = 1;
                    ?>
                        <tr>
                            <!-- <td>
                            <img src="<?php echo BASE_URL . 'storage/uploads/article/' . $row['IMAGE_URL']; ?>" 
                            alt="Article Image" width="100">
                        </td> -->
                            <td><?php echo $No; ?></td>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['TITLE']; ?></td>
                            <td><?php echo $row['NAME']; ?></td>
                            <!-- <td><?php echo $row['SLUG']; ?></td> -->
                            <td><?php echo $row['AUTHOR_ID']; ?></td>
                            <td>
                                <?php
                                $published_date = $row['PUBLISHED_DATE'];
                                $date = DateTime::createFromFormat('d-M-y h.i.s.u A', $published_date);
                                echo $date->format('Y-m-d'); // Change to your desired format
                                ?>
                            </td>
                            <!-- <td><?php echo empty($row['NAME_EN']) ? 'N/A' : $row['NAME_EN'] ?></td> -->
                            <td class="text-center">
                                <?php
                                $status = $row['STATUS']; // Get status from database

                                switch ($status) {
                                    case 'Published':
                                        $badgeClass = 'bg-label-success';
                                        $statusText = 'Published';
                                        break;
                                    case 'Draft':
                                        $badgeClass = 'bg-label-warning';
                                        $statusText = 'Draft';
                                        break;
                                    case 'Archived':
                                        $badgeClass = 'bg-label-danger';
                                        $statusText = 'Archived';
                                        break;
                                    default:
                                        $badgeClass = 'bg-label-secondary';
                                        $statusText = 'N/A';
                                        break;
                                }
                                ?>
                                <span class="badge <?= $badgeClass ?> me-1"><?= $statusText ?></span>
                            </td>
                            <td class="text-center">
                                <!-- <a href="edit.php?id=<?php echo $row['ID']; ?>">
                                    <i class="bx bxs-edit"></i>
                                </a>
                                &nbsp;
                                <a href="javascript:void(0);" class="btnDelete" data-id="<?php echo $row['ID']; ?>" name="btnDelete" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                style="color:red;">
                                    <i class="bx bxs-trash"></i>
                                </a> -->
                                <button type="button" class="btn btn-sm btn-primary btn-icon rounded-pill dropdown-toggle hide-arrow" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <style>
                                    .dropdown-menu {
                                        min-width: 60px !important;
                                        padding: 5px 0;
                                    }
                                </style>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li><a class="dropdown-item text-primary" href="edit.php?id=<?php echo $row['ID']; ?>" title="Edit"><i class="bx bxs-edit"></i></a></li>
                                    <li><a class="dropdown-item text-danger btnDelete" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?php echo $row['ID']; ?>" href="javascript:void(0);"><i class="bx bxs-trash"></i></a></li>
                                    <!-- <li><a class="dropdown-item text-success" title="publish" href="<?php echo BASE_URL ?>controllers/ArticleController.php?post_id=<?php echo $row['ID']; ?>"><i class='bx bx-cloud-upload'></i></a></li> -->
                                    <?php if ($row['STATUS'] === 'Published') : ?>
                                        <!-- Show Archive if Published -->
                                        <li>
                                            <a class="dropdown-item text-warning" title="Archive" href="<?php echo BASE_URL ?>controllers/ArticleController.php?archive_id=<?php echo $row['ID']; ?>">
                                                <i class='bx bx-archive-in'></i>
                                            </a>
                                        </li>
                                    <?php else : ?>
                                        <!-- Show Publish if not Published -->
                                        <li>
                                            <a class="dropdown-item text-success" title="Publish" href="<?php echo BASE_URL ?>controllers/ArticleController.php?published_id=<?php echo $row['ID']; ?>">
                                                <i class='bx bx-cloud-upload'></i>
                                            </a>
                                        </li>
                                    <?php endif; ?>
                                    <li><a class="dropdown-item text-info" href="javascript:void(0);"><i class='bx bx-detail'></i></a></li>
                                </ul>
                            </td>
                        </tr>
                    <?php $No = 1;
                    endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- Script confirm delete -->
<script>
    $(document).ready(function() {
        $('.btnDelete').on('click', function() {
            var deleteId = $(this).data('id');
            var deleteUrl = '<?php echo BASE_URL ?>controllers/ArticleController.php?delete_id=' + deleteId;
            $('#confirmDelete').attr('href', deleteUrl);
        });
    });
</script>
<?php
$content = ob_get_clean();
include BASE_PATH . 'views/admin/master.php';
?>