<?php
require_once '../../config/config.php';
require_once '../../connection/db.php';


session_start();

$error = isset($_SESSION['error']) ? $_SESSION['error'] : ""; // Retrieve error message
unset($_SESSION['error']); // Clear error message after displaying

if (isset($_SESSION['user_id'])) {
  if ($_SESSION['user_type_id'] == 3) {
    header("Location: " . BASE_URL . "views/admin/index.php");
  } elseif ($_SESSION['user_type_id'] == 4) {
    header("Location: " . BASE_URL . "views/admin/index.php");
  } elseif ($_SESSION['user_type_id'] == 5) {
    header('location: ./student/index.php');
  }
  exit;
}

// if (isset($_POST['btnLogin'])) {
//   $Email = mysqli_real_escape_string($conn, $_POST['Email']);
//   $Password = mysqli_real_escape_string($conn, $_POST['Password']);

//     $query = "SELECT * FROM tbluser WHERE Email = '$Email' AND Password_hash = '$Password'";


//   $result = mysqli_query($conn, $query);

//   if (mysqli_num_rows($result) > 0) {

//     $user = mysqli_fetch_array($result);
//     if ($Role == 5 && md5($Password) == md5(1234)) {
//       $_SESSION['StudentID'] = $user['StudentID'];
//       // $_SESSION['ImageName'] = $user['Photo'];
//       header('location: ./verify.php');
//       exit;
//     }

//     $_SESSION['Username'] = $user['Username'] ?? $user['LecturerNameKH'] ?? $user['NameInLatin'];
//     $_SESSION['UserID'] = $user['UserID'] ?? $user['LecturerID'] ?? $user['StudentID'];
//     $_SESSION['ImageName'] = $user['Photo'];
//     $_SESSION['UserTypeID'] = $Role;
//     $UserTypeName = mysqli_fetch_assoc(mysqli_query($conn, "SELECT UserTypeName FROM tblusertype WHERE UserTypeID = $Role"))['UserTypeName'] ?? '';
//     $_SESSION['UserTypeName'] = $UserTypeName;

//     if ($Role == 1 || $Role == 3) {
//       header('location: ./admin/index.php');
//     } elseif ($Role == 4) {
//       header('location: ./lecturer/index.php');
//     } elseif ($Role == 5) {
//       $_SESSION['StudentID'] = $user['StudentID'];
//       $_SESSION['ImageName'] = $user['Photo'];
//       header('location: ./student/index.php');
//     }
//     exit;
//   } else {
//     $error_message = "Invalid email, student ID, or password.";
//   }
// }
// 
?>

<!DOCTYPE html>
<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default"
  data-assets-path="<?php echo BASE_URL; ?>public/admin/assets/" data-template="vertical-menu-template-free">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Login</title>

  <meta name="description" content="" />

  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?> public/admin/assets/img/favicon/logo-3.ico" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public/admin+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
    rel="stylesheet" />

  <!-- Icons. Uncomment required icon fonts -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/admin/assets/vendor/fonts/boxicons.css" />

  <!-- Core CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/admin/assets/vendor/css/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/admin/assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/admin/assets/css/demo.css" />

  <!-- Vendors CSS -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

  <!-- Page CSS -->

  <!-- Page -->
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>public/admin/assets/vendor/css/pages/page-auth.css" />
  <!-- Helpers -->
  <script src="<?php echo BASE_URL; ?>public/admin/assets/vendor/js/helpers.js"></script>
  <script src="<?php echo BASE_URL; ?>public/admin/assets/js/config.js"></script>
</head>

<body>
  <!-- Content -->

  <div class="container-xxl">
    <div class="authentication-wrapper authentication-basic container-p-y">
      <div class="authentication-inner">
        <!-- Register -->
        <div class="card">
          <div class="card-body">
            <!-- Logo -->
            <div class="mb-3 app-brand justify-content-center">
              <a href="<?php echo BASE_URL ?>views/" class="app-brand-link gap-2">
                <span class="app-brand-logo demo">
                  <img width="120px" src="<?php echo BASE_URL; ?>storage/uploads/logo/logo-1.png">
                </span>
              </a>
            </div>
            <?php if (!empty($error)) { ?>
              <p class="mb-2 text-center text-danger">
                <?php echo $error; ?>
              </p>
            <?php } else { ?>
              <h6 class="mb-3 text-center">Welcome back! Please log in to continue.</h6>
            <?php } ?>
            <form action="<?php echo BASE_URL ?>controllers/auth/LoginController.php" enctype="multipart/form-data" method="POST" id="formAuthentication" class="mb-3">
              <div class="mb-2">
                <label for="email" style="font-size: 14px;" class="form-label">Email</label>
                <input type="text" required class="form-control" id="email" name="TxtEmail"
                  placeholder="Email or Username" />
              </div>
              <div class="mb-3 form-password-toggle">
                <div class="d-flex justify-content-between">
                  <label class="form-label" style="font-size: 14px;" for="password">Password</label>
                </div>
                <div class="input-group input-group-merge">
                  <input type="password" required id="password" class="form-control" name="TxtPassword"
                    placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                    aria-describedby="password" />
                  <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                </div>
                <a href="#" class="float-end text-light">
                  <small>Forgot Password?</small>
                </a>
              </div>
              <div class="mb-3">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="remember-me" />
                  <label class="form-check-label" for="remember-me"> Remember Me </label>
                </div>
              </div>
              <div class="mb-3">
                <button class="btn btn-login text-white d-grid w-100" style="background-color:rgb(201, 0, 0);" name="btnLogin" type="submit">SIGN IN</button>
              </div>
              <style>
                button.btn-login:hover {
                  background-color: rgb(154, 1, 1) !important;
                }
              </style>
            </form>
          </div>
        </div>
        <!-- /Register -->
      </div>
    </div>
  </div>

  <!-- / Content -->

  <!-- Core JS -->
  <!-- build:js assets/vendor/js/core.js -->
  <script src="<?php echo BASE_URL; ?>public/admin/assets/vendor/libs/jquery/jquery.js"></script>
  <script src="<?php echo BASE_URL; ?>public/admin/assets/vendor/libs/popper/popper.js"></script>
  <script src="<?php echo BASE_URL; ?>public/admin/assets/vendor/js/bootstrap.js"></script>
  <script src="<?php echo BASE_URL; ?>public/admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

  <script src="<?php echo BASE_URL; ?>public/admin/assets/vendor/js/menu.js"></script>
  <!-- endbuild -->

  <!-- Vendors JS -->

  <!-- Main JS -->
  <script src="<?php echo BASE_URL; ?>public/admin/assets/js/main.js"></script>

  <!-- Page JS -->

  <!-- Place this tag in your head or just before your close body tag. -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>