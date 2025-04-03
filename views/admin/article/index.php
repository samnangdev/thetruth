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
<?php

$limit = 10; // Number of articles per page
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

$ArticleController = new ArticleController();
$rows = $ArticleController->list($limit, $page);

// Fetch total article count
$queryTotal = "SELECT COUNT(*) AS total FROM article_tbl";
$stidTotal = oci_parse($conn, $queryTotal);
oci_execute($stidTotal);
$totalRow = oci_fetch_assoc($stidTotal);
$totalArticles = $totalRow['TOTAL'];
oci_free_statement($stidTotal);

$totalPages = ceil($totalArticles / $limit);

// $ArticleController = new ArticleController();
// $rows = $ArticleController->list();
foreach ($rows as $row):
    $content = $row['CONTENT'];
    if ($content instanceof OCILob) {
        $content = $content->load();
    }
    $published_date = !empty($row['PUBLISHED_DATE']) ? date("F j, Y", strtotime($row['PUBLISHED_DATE'])) : "Unknown Date";
?>

    <div class="row mb-1">
        <div class="col-md">
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="card-img card-img-left" src="<?php echo BASE_URL . 'storage/uploads/article/' . $row['IMAGE_URL']; ?>" alt="Card image">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body d-flex flex-column h-100">
                            <h5 class="card-title"><?php echo $row['TITLE']; ?></h5>
                            <div class="td-excerpt">
                                <p class="card-text">
                                    <!-- <?php
                                            echo (mb_strlen($content, 'UTF-8') > 20) ? mb_substr($content, 0, 200, 'UTF-8') . '...' : $content;
                                            ?> -->
                                </p>
                                <p class="card-text">
                                    <?php
                                    // Remove the leading number and the dot (e.g., "1." or "១.")
                                    $filtered_content = preg_replace('/^\d+\.\s+|^\p{N}+\.\s+/u', '', $content);
                                    echo (mb_strlen($filtered_content, 'UTF-8') > 200) ? mb_substr($filtered_content, 0, 200, 'UTF-8') . '...' : $filtered_content;
                                    ?>
                                </p>
                            </div>
                            <p class="card-text"><?php echo $row['NAME_KH']  ?> <small class="text-muted"><?php echo $row['STATUS'] . " - " . $published_date ?></small></p>

                            <!-- Button action container aligned to the bottom-right -->
                            <div class="mt-auto d-flex justify-content-end gap-3">
                                <a class="text-success" title="Publish" href="<?php echo BASE_URL ?>controllers/ArticleController.php?published_id=<?php echo $row['ID']; ?>">
                                    <i class='bx bx-cloud-upload'></i>
                                </a>
                                <a class="text-warning" title="Archive" href="<?php echo BASE_URL ?>controllers/ArticleController.php?archive_id=<?php echo $row['ID']; ?>">
                                    <i class='bx bx-archive-in'></i>
                                </a>
                                <!-- <a class="text-info" href="javascript:void(0);" title="Details">
                                <i class='bx bx-detail'></i>
                            </a> -->
                                <a class="text-primary" href="edit.php?id=<?php echo $row['ID']; ?>" title="Edit">
                                    <i class="bx bxs-edit"></i>
                                </a>
                                <a class="text-danger btnDelete" title="Delete" data-bs-toggle="modal" data-bs-target="#deleteModal" data-id="<?php echo $row['ID']; ?>" href="javascript:void(0);">
                                    <i class="bx bxs-trash"></i>
                                </a>
                            </div>
                            <!-- /Button action container -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $No = 1;
endforeach; ?>


<nav aria-label="Page navigation">
    <ul class="pagination justify-content-center">
        <?php if ($page > 1): ?>
            <li class="page-item prev">
                <a class="page-link" href="?page=<?php echo ($page - 1); ?>"><i class="tf-icon bx bx-chevrons-left"></i></a>
            </li>
        <?php else: ?>
            <li class="page-item prev disabled">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-left"></i></a>
            </li>
        <?php endif; ?>

        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li class="page-item <?php echo ($i == $page) ? 'active' : ''; ?>">
                <a class="page-link" href="?page=<?php echo $i; ?>"><?php echo $i; ?></a>
            </li>
        <?php endfor; ?>

        <?php if ($page < $totalPages): ?>
            <li class="page-item next">
                <a class="page-link" href="?page=<?php echo ($page + 1); ?>"><i class="tf-icon bx bx-chevrons-right"></i></a>
            </li>
        <?php else: ?>
            <li class="page-item next disabled">
                <a class="page-link" href="javascript:void(0);"><i class="tf-icon bx bx-chevrons-right"></i></a>
            </li>
        <?php endif; ?>
    </ul>
</nav>




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