<?php
ob_start();
require_once '../../../config/config.php';
require_once '../../../connection/db.php';
require_once BASE_PATH . 'controllers/ReportController.php';

$title = "Report";

// Get filter values
$dateFrom = isset($_GET['TxtDateFrom']) ? $_GET['TxtDateFrom'] : null;
$dateTo = isset($_GET['TxtDateTo']) ? $_GET['TxtDateTo'] : null;

$reportController = new ReportController();
$articles = $reportController->articleReport($dateFrom, $dateTo);
?>

<div class="card mb-2">
    <h4 class="card-header fw-bold">Select</h4>
    <div class="card-body">
        <form method="GET">
            <div class="row">
                <div class="col-sm-4">
                    <div class="mb-3">
                        <label class="form-label">Report</label>
                        <select name="TxtReport" class="form-select" required>
                            <option selected hidden value="">------------------------------------------------------------------------------------------</option>
                            <option value="1" <?= (isset($_GET['TxtReport']) && $_GET['TxtReport'] == "1") ? 'selected' : '' ?>>Article Report</option>
                            <option value="2" <?= (isset($_GET['TxtReport']) && $_GET['TxtReport'] == "2") ? 'selected' : '' ?>>User Report</option>
                            <!-- <option value="3" <?= (isset($_GET['TxtReport']) && $_GET['TxtReport'] == "3") ? 'selected' : '' ?>>Viewer Report</option> -->
                        </select>
                    </div>
                </div>
                <div class="col-sm-3">
    <div class="mb-3">
        <label class="form-label">From</label>
        <input type="date" id="TxtDateFrom" name="TxtDateFrom" class="form-control" 
               value="<?= isset($_GET['TxtDateFrom']) ? $_GET['TxtDateFrom'] : '' ?>" />
    </div>
</div>
<div class="col-sm-3">
    <div class="mb-3">
        <label class="form-label">To</label>
        <input type="date" id="TxtDateTo" name="TxtDateTo" class="form-control" 
               value="<?= isset($_GET['TxtDateTo']) ? $_GET['TxtDateTo'] : '' ?>" />
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        let today = new Date().toISOString().split("T")[0];

        document.getElementById("TxtDateFrom").setAttribute("max", today);
        document.getElementById("TxtDateTo").setAttribute("max", today);
    });
</script>

                <div class="col-sm-2">
                    <div class="mb-3">
                        <label class="form-label">&nbsp;</label>
                        <button type="submit" class="btn form-control text-white" style="background-color: #ba0000;">Filter</button>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
<style>
    .report {
        background: #fff;
        border-radius: 12px;
        padding: 25px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        /* max-width: 900px; */
        /* margin: auto; */
        border-top: 5px solid crimson;
    }

    .report-title {
        font-size: 26px;
        font-weight: bold;
        text-transform: uppercase;
        align-items: center;
    }
</style>
<?php if ($reportType == "1") : ?>
    <!-- Article Report Table -->
    <div class="card report">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="mb-2">
                <img src="http://localhost/factnews/storage/uploads/logo/logo-1.png" width="100px">
            </div>
            <div class="d-flex justify-content-center flex-grow-2" style="margin-left: 100px;">
                <h4 class="fw-bold report-title">Article Report</h4>
            </div>
            <?php
// Get date values from URL parameters
$fromDate = isset($_GET['TxtDateFrom']) ? $_GET['TxtDateFrom'] : '';
$toDate = isset($_GET['TxtDateTo']) ? $_GET['TxtDateTo'] : '';

// Format the dates if they exist
$formattedFromDate = !empty($fromDate) ? date("F j, Y", strtotime($fromDate)) : '';
$formattedToDate = !empty($toDate) ? date("F j, Y", strtotime($toDate)) : '';
?>

<div>
    Date: <?= $formattedFromDate ?> - <?= $formattedToDate ?>
</div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>CreatedDate</th>
                        <th>Status</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $No = 1;
                    foreach ($data as $article) :
                        $publishedDate = !empty($article['PUBLISHED_DATE'])
                            ? DateTime::createFromFormat('d-M-y h.i.s.u A', $article['PUBLISHED_DATE'])->format("d M y")
                            : "Unknown Date";

                    ?>
                        <tr>
                            <td><?= $No ?></td>
                            <td><?= htmlspecialchars($article['TITLE']) ?></td>
                            <td><?= htmlspecialchars($article['NAME_KH']) ?></td>
                            <td><?= $publishedDate ?></td>
                            <td><?= htmlspecialchars($article['STATUS']) ?></td>
                            <td><?= htmlspecialchars($article['USERNAME']) ?></td>
                            <!-- <td><img src="<?= htmlspecialchars($article['IMAGE_URL']) ?>" width="50"></td> -->
                        </tr>

                    <?php
                        $No++;
                    endforeach; ?>
                </tbody>
            </table>
            <style>
                /* Hide the print button when printing */
                @media print {
                    #printButton {
                        display: none;
                    }
                }
            </style>
            <div class="row mt-2">
                <div class="col-sm-12 text-end">
                    <button onclick="printReport()" id="printButton" type="button" name="btnSave" class="btn btn-primary"><i class='bx bx-printer'></i></button>
                </div>
            </div>
        </div>
    </div>
<?php elseif ($reportType == "2") : ?>
    <!-- User Report Table -->
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <div class="mb-2">
                <img src="http://localhost/factnews/storage/uploads/logo/logo-1.png" width="100px">
            </div>
            <div class="d-flex justify-content-center flex-grow-2" style="margin-left: 100px;">
                <h4 class="fw-bold report-title">User Report</h4>
            </div>
            <div>
                Date: March 23, 2025 - March 34, 2025
            </div>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $No = 1;
                    foreach ($data as $user) :
                    ?>
                        <tr>
                            <td><?= $No ?></td>
                            <td><?= htmlspecialchars($user['USERNAME']) ?></td>
                            <td><?= htmlspecialchars($user['EMAIL']) ?></td>
                            <td><?= htmlspecialchars($user['NAME_EN']) ?></td>
                            <td><?= $user['STATUS'] == 1 ? 'Active' : 'Inactive' ?></td>

                        </tr>
                    <?php
                        $No++;
                    endforeach;
                    ?>
                </tbody>
            </table>
            <style>
                /* Hide the print button when printing */
                @media print {
                    #printButton {
                        display: none;
                    }
                }
            </style>
            <div class="row mt-2">
                <div class="col-sm-12 text-end">
                    <button onclick="printReport()" id="printButton" type="button" name="btnSave" class="btn btn-primary"><i class='bx bx-printer'></i></button>
                </div>
            </div>
        </div>
    </div>
<?php elseif ($reportType == "3") : ?>
    <!-- Viewer Report Table -->
    <div class="card">
        <h4 class="card-header fw-bold">Viewer Report</h4>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Viewer Name</th>
                        <th>Viewed Article</th>
                        <th>View Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $viewer) : ?>
                        <tr>
                            <td><?= htmlspecialchars($viewer['ID']) ?></td>
                            <td><?= htmlspecialchars($viewer['VIEWER_NAME']) ?></td>
                            <td><?= htmlspecialchars($viewer['ARTICLE_TITLE']) ?></td>
                            <td><?= htmlspecialchars($viewer['VIEW_DATE']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
<?php endif; ?>
<script>
    function printReport() {
        // Hide unnecessary content from the page
        var content = document.querySelector('.report');

        // Print only the content of the .report card
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = content.outerHTML;

        // Trigger the print dialog
        window.print();

        // Restore the original content after printing
        document.body.innerHTML = originalContents;
    }
</script>

<?php
$content = ob_get_clean();
include BASE_PATH . 'views/admin/master.php';
?>