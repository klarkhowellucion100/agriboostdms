<?php include 'heading.php'; ?>

<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title>AgriBOOST Data Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="icons/icon192.png">

    <!-- Bootstrap Css -->
    <link href="function/dashed/assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="function/dashed/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="function/dashed/assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <link href="function/datatable/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="function/datatable/assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />


    <!-- Responsive datatable examples -->
    <link href="function/datatable/assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations-v1.0.0.js"></script>
    <script type="text/javascript" src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"> </script>

    <link rel="apple-touch-icon" href="icons/icon192.png">
    <link rel="manifest" href="manifest.json">

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>

<body data-layout="horizontal" data-topbar="colored">







    <style>
        /* Styles for the loader container */
        .loader-container {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            z-index: 9999;
            justify-content: center;
            align-items: center;
        }

        /* Styles for the loader GIF image */
        .loader {
            width: 100px;
            /* Adjust the width and height as needed */
            height: 100px;
        }
    </style>
    <!-- Loader Container -->
    <div class="loader-container" id="loader-container">
        <img src="icons/loader.gif" alt="Loader" class="loader">
    </div>

    <script>
        // Show the loader while the page is loading
        document.addEventListener("DOMContentLoaded", function() {
            // Display the loader container
            const loaderContainer = document.getElementById("loader-container");
            loaderContainer.style.display = "flex"; // You can also use "block" if you prefer

            // Hide the loader when the page is fully loaded
            window.addEventListener("load", function() {
                loaderContainer.style.display = "none";
            });
        });
    </script>




    <!-- Begin page -->
    <div id="layout-wrapper">

        <header id="page-topbar">
            <div class="navbar-header">
                <div class="d-flex">
                    <!-- LOGO -->
                    <div class="navbar-brand-box">
                        <a href="home.php" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="icons/icon192.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="icons/icon192.png" alt="" height="20">
                            </span>
                        </a>

                        <a href="home.php" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="icons/icon192.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="icons/icon192.png" alt="" height="20">
                            </span>
                        </a>
                    </div>

                    <button type="button" class="btn btn-sm px-3 font-size-16 d-lg-none header-item waves-effect waves-light" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                        <i class="fa fa-fw fa-bars"></i>
                    </button>

                    <!-- App Search-->
                    <form class="app-search d-none d-lg-block">
                        <div class="position-relative">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="uil-search"></span>
                        </div>
                    </form>
                </div>

                <div class="d-flex">

                    <div class="dropdown d-inline-block">
                        <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="rounded-circle header-profile-user" src="icons/icon192.png" alt="Header Avatar">
                            <span class="d-none d-xl-inline-block ms-1 fw-medium font-size-15"><?php echo $userprofile; ?></span>
                            <i class="uil-angle-down d-none d-xl-inline-block font-size-15"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <!-- item-->
                            <!--<a class="dropdown-item" href="#"><i class="uil uil-user-circle font-size-18 align-middle text-muted me-1"></i> <span class="align-middle">View Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="uil uil-wallet font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">My Wallet</span></a>
                    <a class="dropdown-item d-block" href="#"><i class="uil uil-cog font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Settings</span> <span class="badge bg-success-subtle text-success rounded-pill mt-1 ms-2">03</span></a>
                    <a class="dropdown-item" href="#"><i class="uil uil-lock-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Lock screen</span></a>-->
                            <a class="dropdown-item" href="agriboostdmstransactions/logoutprocess.php"><i class="uil uil-sign-out-alt font-size-18 align-middle me-1 text-muted"></i> <span class="align-middle">Sign out</span></a>
                        </div>
                    </div>

                </div>
            </div>
            <div class="container-fluid">
                <div class="topnav">

                    <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">

                                <li class="nav-item">
                                    <a class="nav-link" href="home.php">
                                        <i class="uil-home-alt me-2"></i> Dashboard
                                    </a>
                                </li>

                                <?php if ($component == "Admin" || $component == "AgriBloom") { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="farmerregistration.php">
                                            <i class="uil-apps me-2"></i> AgriBloom
                                        </a>
                                    </li>
                                <?php } ?>

                                <?php if ($component == "Admin" || $component == "AgriMart") { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="vendorregistration.php">
                                            <i class="uil-apps me-2"></i> AgriMart
                                        </a>
                                    </li>
                                <?php } ?>

                                <?php if ($component == "Admin" || $component == "AgriComms") { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="eventsagricomm.php">
                                            <i class="uil-apps me-2"></i> AgriComms
                                        </a>
                                    </li>
                                <?php } ?>

                                <?php if ($component == "Admin") { ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="userapproval.php">
                                            <i class="uil-apps me-2"></i> Admin
                                        </a>
                                    </li>
                                <?php } ?>

                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </header>

        <?php $year_num = date('Y'); ?>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            <div class="page-content">
                <div class="container-fluid">

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-flex align-items-center justify-content-between">
                                <h4 class="mb-0">Dashboard</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Data</a></li>
                                        <li class="breadcrumb-item active">Dashboard</li>
                                    </ol>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- end page title -->





                    <!--########################################################################################### START DASHBOARD AJAX LINE ######################################################################-->
                    <div id='dashboardfetchajaxlines'>




                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card">
                                    <div class="card-body">

                                        <h4 class="card-title mb-4">AgriBOOST Data Management System Dashboard</h4>



                                        <div class="mt-12">
                                            <div id="chart_div01" style="width: 100%; height: 1500px; max-width: 100%; max-height: 100%;"><iframe title="AgriBOOST Data Management" width="100%" height="100%" src="https://app.powerbi.com/view?r=eyJrIjoiOGU1ODdlMTItMTNmOC00NmU0LTkwOWItNGRjNWY5YzU5ZGQ2IiwidCI6ImIzZTVkYjVlLTI5NDQtNDgzNy05OWY1LTc0ODhhY2U1NDMxOSIsImMiOjh9" frameborder="0" allowFullScreen="true"></iframe></div>


                                        </div>
                                    </div>
                                    <!-- end card-body-->
                                </div>
                                <!-- end card-->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->
                    </div>
                    <!--########################################################################################### END DASHBOARD AJAX LINE ######################################################################-->

                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->


            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            <script>
                                document.write(new Date().getFullYear())
                            </script> © AgriBOOST DMS.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-end d-none d-sm-block">
                                Crafted with <i class="mdi mdi-heart text-danger"></i> by <a href="#" target="_blank" class="text-reset">KlarkSites</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!-- Right Sidebar -->
    <div class="right-bar">
        <div data-simplebar class="h-100">
            <div class="rightbar-title d-flex align-items-center p-3">

                <h5 class="m-0 me-2">Settings</h5>

                <a href="javascript:void(0);" class="right-bar-toggle ms-auto">
                    <i class="mdi mdi-close noti-icon"></i>
                </a>
            </div>

            <!-- Settings -->
            <hr class="m-0" />

            <div class="p-4">
                <h6 class="mb-3">Layout</h6>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-vertical" value="vertical">
                    <label class="form-check-label" for="layout-vertical">Vertical</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout" id="layout-horizontal" value="horizontal">
                    <label class="form-check-label" for="layout-horizontal">Horizontal</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Mode</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-light" value="light">
                    <label class="form-check-label" for="layout-mode-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-mode" id="layout-mode-dark" value="dark">
                    <label class="form-check-label" for="layout-mode-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Layout Width</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-fuild" value="fuild" onchange="document.body.setAttribute('data-layout-size', 'fluid')">
                    <label class="form-check-label" for="layout-width-fuild">Fluid</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-width" id="layout-width-boxed" value="boxed" onchange="document.body.setAttribute('data-layout-size', 'boxed')">
                    <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Topbar Color</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-light" value="light" onchange="document.body.setAttribute('data-topbar', 'light')">
                    <label class="form-check-label" for="topbar-color-light">Light</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="topbar-color" id="topbar-color-dark" value="dark" onchange="document.body.setAttribute('data-topbar', 'dark')">
                    <label class="form-check-label" for="topbar-color-dark">Dark</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Size</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-default" value="default" onchange="document.body.setAttribute('data-sidebar-size', 'lg')">
                    <label class="form-check-label" for="sidebar-size-default">Default</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-compact" value="compact" onchange="document.body.setAttribute('data-sidebar-size', 'small')">
                    <label class="form-check-label" for="sidebar-size-compact">Compact</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-size" id="sidebar-size-small" value="small" onchange="document.body.setAttribute('data-sidebar-size', 'sm')">
                    <label class="form-check-label" for="sidebar-size-small">Small (Icon View)</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2 sidebar-setting">Sidebar Color</h6>

                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-light" value="light" onchange="document.body.setAttribute('data-sidebar', 'light')">
                    <label class="form-check-label" for="sidebar-color-light">Light</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-dark" value="dark" onchange="document.body.setAttribute('data-sidebar', 'dark')">
                    <label class="form-check-label" for="sidebar-color-dark">Dark</label>
                </div>
                <div class="form-check sidebar-setting">
                    <input class="form-check-input" type="radio" name="sidebar-color" id="sidebar-color-colored" value="colored" onchange="document.body.setAttribute('data-sidebar', 'colored')">
                    <label class="form-check-label" for="sidebar-color-colored">Colored</label>
                </div>

                <h6 class="mt-4 mb-3 pt-2">Direction</h6>

                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-ltr" value="ltr">
                    <label class="form-check-label" for="layout-direction-ltr">LTR</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="layout-direction" id="layout-direction-rtl" value="rtl">
                    <label class="form-check-label" for="layout-direction-rtl">RTL</label>
                </div>

            </div>

        </div>
        <!-- end slimscroll-menu-->
    </div>
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    <div class="rightbar-overlay"></div>




    <script src="chartfilter.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="src/index.js"></script>


    <!-- Datatable init js -->
    <script src="function/datatable/assets/js/pages/datatables.init.js"></script>
    <script src="function/dashed/assets/libs/jquery/jquery.min.js"></script>
    <script src="function/dashed/assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="function/dashed/assets/libs/metismenu/metisMenu.min.js"></script>
    <script src="function/dashed/assets/libs/simplebar/simplebar.min.js"></script>
    <script src="function/dashed/assets/libs/node-waves/waves.min.js"></script>
    <script src="function/dashed/assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="function/dashed/assets/libs/jquery.counterup/jquery.counterup.min.js"></script>

    <!-- apexcharts -->
    <script src="function/dashed/assets/libs/apexcharts/apexcharts.min.js"></script>

    <script src="function/dashed/assets/js/pages/dashboard.init.js"></script>

    <!-- App js -->
    <script src="function/dashed/assets/js/app.js"></script>


    <!-- jquery step -->
    <script src="function/wizard/assets/libs/jquery-steps/build/jquery.steps.min.js"></script>

    <!-- form wizard init -->
    <script src="function/wizard/assets/js/pages/form-wizard.init.js"></script>


    <script src="function/datatable/assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="function/datatable/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="function/datatable/assets/libs/jszip/jszip.min.js"></script>
    <script src="function/datatable/assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="function/datatable/assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-buttons/js/buttons.php5.min.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="function/datatable/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="function/datatable/assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="function/datatable/assets/js/pages/datatables.init.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script src="https://cdn.datatables.net/buttons/2.3.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.php5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.2/js/buttons.print.min.js"></script>





    <!-- parsleyjs -->
    <script src="function/formvalidation/assets/libs/parsleyjs/parsley.min.js"></script>

    <script src="function/formvalidation/assets/js/pages/form-validation.init.js"></script>


</body>

</html>