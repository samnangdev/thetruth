<?php
    // Create variable to store more path of admin
    $Admin_Url = "views/admin/"
?>
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="index.html" class="app-brand-link">
            <span class="app-brand-text demo menu-text fw-bolder">
                <img src="http://localhost/factnews/storage/uploads/logo/logo-1.png" width="65px" alt="LOGO"> 
            </span>
            <h4 style="margin-top: 20px; margin-left: 11px; font-weight:bold; color:brown;">The TRUTH</h4>
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>

    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item active">
        <a href="<?php echo BASE_URL . $Admin_Url ?>index.php" class="menu-link">
            <i class='menu-icon bx bx-home'></i>
            <div data-i18n="Analytics">Dashboard</div>
        </a>
    </li>
    
    <?php
    if ($_SESSION['user_type_name'] !== 'Author') :
    ?>
        <!-- Reports -->
        <li class="menu-item">
            <a href="<?php echo BASE_URL . $Admin_Url ?>report/index.php" class="menu-link">
                <i class="menu-icon tf-icons bx bxs-report"></i>
                <div data-i18n="Basic">Reports</div>
            </a>
        </li>
        <!-- User Management -->
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class='menu-icon bx bx-user'></i>
                <div data-i18n="Layouts">Users</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="<?php echo BASE_URL . $Admin_Url ?>user/index.php" class="menu-link">
                        <div data-i18n="Without menu">Users</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?php echo BASE_URL . $Admin_Url ?>user_type/index.php" class="menu-link">
                        <div data-i18n="Without navbar">User Types</div>
                    </a>
                </li>
            </ul>
        </li>
    <?php endif; ?>

    <!-- Articles -->
    <li class="menu-item">
        <a href="<?php echo BASE_URL . $Admin_Url ?>article/index.php" class="menu-link">
            <i class='menu-icon bx bx-news'></i>
            <div data-i18n="Basic">Articles</div>
        </a>
    </li>

    <!-- Tags -->
    <li class="menu-item">
        <a href="<?php echo BASE_URL . $Admin_Url ?>tag/index.php" class="menu-link">
            <i class='menu-icon bx bx-purchase-tag'></i>
            <div data-i18n="Basic">Tags</div>
        </a>
    </li>

    <!-- Categories -->
    <li class="menu-item">
        <a href="javascript:void(0);" class="menu-link menu-toggle">
            <i class='menu-icon bx bx-category-alt'></i>
            <div data-i18n="Layouts">Categories</div>
        </a>
        <ul class="menu-sub">
            <li class="menu-item">
                <a href="<?php echo BASE_URL . $Admin_Url ?>main_category/index.php" class="menu-link">
                    <div data-i18n="Without menu">Main</div>
                </a>
            </li>
            <li class="menu-item">
                <a href="<?php echo BASE_URL . $Admin_Url ?>sub_category/index.php" class="menu-link">
                    <div data-i18n="Without navbar">Sub</div>
                </a>
            </li>
        </ul>
    </li>
</ul>

</aside>

<!-- <script>
    document.addEventListener("DOMContentLoaded", function () {
    let menuItems = document.querySelectorAll(".menu-item a");

    // Get stored active menu item
    let activeMenu = localStorage.getItem("activeMenu");

    if (activeMenu) {
        document.querySelectorAll(".menu-item").forEach(item => {
            if (item.querySelector("a").href === activeMenu) {
                item.classList.add("active");
            } else {
                item.classList.remove("active");
            }
        });
    }

    menuItems.forEach(item => {
        item.addEventListener("click", function () {
            // Remove active class from all menu items
            document.querySelectorAll(".menu-item").forEach(i => i.classList.remove("active"));

            // Add active class to the clicked menu item
            this.parentElement.classList.add("active");

            // Store active menu in localStorage
            localStorage.setItem("activeMenu", this.href);
        });
    });
});

</script> -->

<!-- <style>
.menu-item.active > .menu-link {
    background-color: rgba(0, 123, 255, 0.3); /* Light blue background */
    border-radius: 5px;
}

.menu-item.active > .menu-link i {
    color: inherit; /* Keep original icon color */
}

.menu-item.active > .menu-link div {
    font-weight: normal; /* Keep text normal, not bold */
    color: inherit; /* Keep original text color */
}

</style> -->








<!-- <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-account-settings-account.html" class="menu-link">
                        <div data-i18n="Account">Account</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-notifications.html" class="menu-link">
                        <div data-i18n="Notifications">Notifications</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-account-settings-connections.html" class="menu-link">
                        <div data-i18n="Connections">Connections</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-lock-open-alt"></i>
                <div data-i18n="Authentications">Authentications</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="auth-login-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Login</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-register-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Register</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="auth-forgot-password-basic.html" class="menu-link" target="_blank">
                        <div data-i18n="Basic">Forgot Password</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-cube-alt"></i>
                <div data-i18n="Misc">Misc</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="pages-misc-error.html" class="menu-link">
                        <div data-i18n="Error">Error</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="pages-misc-under-maintenance.html" class="menu-link">
                        <div data-i18n="Under Maintenance">Under Maintenance</div>
                    </a>
                </li>
            </ul>
        </li> -->
        <!-- Components -->
        <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Components</span></li> -->

        <!-- User interface -->
        <!-- <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-box"></i>
                <div data-i18n="User interface">User interface</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="ui-accordion.html" class="menu-link">
                        <div data-i18n="Accordion">Accordion</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-alerts.html" class="menu-link">
                        <div data-i18n="Alerts">Alerts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-badges.html" class="menu-link">
                        <div data-i18n="Badges">Badges</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-buttons.html" class="menu-link">
                        <div data-i18n="Buttons">Buttons</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-carousel.html" class="menu-link">
                        <div data-i18n="Carousel">Carousel</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-collapse.html" class="menu-link">
                        <div data-i18n="Collapse">Collapse</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-dropdowns.html" class="menu-link">
                        <div data-i18n="Dropdowns">Dropdowns</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-footer.html" class="menu-link">
                        <div data-i18n="Footer">Footer</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-list-groups.html" class="menu-link">
                        <div data-i18n="List Groups">List groups</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-modals.html" class="menu-link">
                        <div data-i18n="Modals">Modals</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-navbar.html" class="menu-link">
                        <div data-i18n="Navbar">Navbar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-offcanvas.html" class="menu-link">
                        <div data-i18n="Offcanvas">Offcanvas</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-pagination-breadcrumbs.html" class="menu-link">
                        <div data-i18n="Pagination &amp; Breadcrumbs">Pagination &amp; Breadcrumbs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-progress.html" class="menu-link">
                        <div data-i18n="Progress">Progress</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-spinners.html" class="menu-link">
                        <div data-i18n="Spinners">Spinners</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-tabs-pills.html" class="menu-link">
                        <div data-i18n="Tabs &amp; Pills">Tabs &amp; Pills</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-toasts.html" class="menu-link">
                        <div data-i18n="Toasts">Toasts</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-tooltips-popovers.html" class="menu-link">
                        <div data-i18n="Tooltips & Popovers">Tooltips &amp; popovers</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="ui-typography.html" class="menu-link">
                        <div data-i18n="Typography">Typography</div>
                    </a>
                </li>
            </ul>
        </li> -->

        <!-- Extended components -->
        <!-- <li class="menu-item">
            <a href="javascript:void(0)" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-copy"></i>
                <div data-i18n="Extended UI">Extended UI</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="extended-ui-perfect-scrollbar.html" class="menu-link">
                        <div data-i18n="Perfect Scrollbar">Perfect scrollbar</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="extended-ui-text-divider.html" class="menu-link">
                        <div data-i18n="Text Divider">Text Divider</div>
                    </a>
                </li>
            </ul>
        </li> -->

        <!-- <li class="menu-item">
            <a href="icons-boxicons.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-crown"></i>
                <div data-i18n="Boxicons">Boxicons</div>
            </a>
        </li> -->

        <!-- Forms & Tables -->
        <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Forms &amp; Tables</span></li> -->
        <!-- Forms -->
        <!-- <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Elements">Form Elements</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="forms-basic-inputs.html" class="menu-link">
                        <div data-i18n="Basic Inputs">Basic Inputs</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="forms-input-groups.html" class="menu-link">
                        <div data-i18n="Input groups">Input groups</div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="menu-item">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-detail"></i>
                <div data-i18n="Form Layouts">Form Layouts</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item">
                    <a href="form-layouts-vertical.html" class="menu-link">
                        <div data-i18n="Vertical Form">Vertical Form</div>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="form-layouts-horizontal.html" class="menu-link">
                        <div data-i18n="Horizontal Form">Horizontal Form</div>
                    </a>
                </li>
            </ul>
        </li> -->
        <!-- Tables -->
        <!-- <li class="menu-item">
            <a href="tables-basic.html" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Tables">Tables</div>
            </a>
        </li> -->
        <!-- Misc -->
        <!-- <li class="menu-header small text-uppercase"><span class="menu-header-text">Misc</span></li>
        <li class="menu-item">
            <a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-support"></i>
                <div data-i18n="Support">Support</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank"
                class="menu-link">
                <i class="menu-icon tf-icons bx bx-file"></i>
                <div data-i18n="Documentation">Documentation</div>
            </a>
        </li> -->