<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Dashboard | School Management System </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App css -->

        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

        <!-- Begin page -->
        <div id="wrapper">


            <?php include 'topbar/top_bar.php'; ?>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                    
                    <?php include 'Menu/sidebar.php'; ?>

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->
         
            <div class="content-page">
                <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-9 m-auto">
                            <div class="card">
                                <div class="card-header bg-info text-center text-white">Add New Student</div>
                                <div class="card-body">
                                    <form>
                                        <div class="row">
                                            <div class="card-title"><b>Personal Information</b></div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Name</label>
                                                    <input type="text" id="name" class="form-control" placeholder="Enter Your Name">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Father Name</label>
                                                    <input type="text" id="father_name" class="form-control" placeholder="Enter Father Name">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Mother Name</label>
                                                    <input type="text" id="mother_name" class="form-control" placeholder="Enter Mother Name">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Guardian Name</label>
                                                    <input type="text" id="guardian_name" class="form-control" placeholder="Enter Mother Name">
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Mobile Number 1</label>
                                                    <input type="text" id="mobile_number1" class="form-control" placeholder="Type Mobile Number 1" />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Mobile Number 2</label>
                                                    <input type="text" id="mobile_number2" class="form-control" placeholder="Type Mobile Number 2" />
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Gender</label>
                                                    <select type="text" id="gender" class="form-select">
                                                        <option value="">select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Religion</label>
                                                    <select type="text" id="religion" class="form-select">
                                                        <option value="">Select</option>
                                                        <option value="Islam">Islam</option>
                                                        <option value="Hindu">Hindu</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Nationality</label>
                                                    <select type="text" id="nationality" class="form-select">
                                                        <option value="">Select</option>
                                                        <option value="Bangladesh">Bangladesh</option>
                                                        <option value="India">India</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Present Address</label>
                                                    <input type="text" id="present_address" class="form-control" placeholder="Enter Present Address">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Permanent Address</label>
                                                    <input type="text" id="permanent_address"  class="form-control" placeholder="Enter Permanent Address"/>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Date Of Birth</label>
                                                    <input type="date" id="dob" class="form-control" />
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Blood Group</label>
                                                    <select type="text" id="blood_group" class="form-select" placeholder="Type Your Reference" >
                                                        <option>Select Blood </option>
                                                        <option>A+</option>
                                                        <option>A-</option>
                                                        <option>B+</option>
                                                        <option>B-</option>
                                                        <option>O+</option>
                                                        <option>O-</option>
                                                        <option>AB+</option>
                                                        <option>AB-</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                        <div class="card-title"><b>Educational Information</b></div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Class</label>
                                                    <select name="" id="student_class" class="form-select">
                                                        <option value="">Select</option>
                                                        <option value="">5</option>
                                                        <option value="">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Section</label>
                                                    <select name="" id="section" class="form-select">
                                                        <option value="">Select</option>
                                                        <option value="A">A</option>
                                                        <option value="B">B</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm">
                                                <div class="form-group mb-2">
                                                    <label>Department</label>
                                                    <select  id="department" class="form-select">
                                                        <option value="">Select</option>
                                                    </select>
                                                </div>
                                            </div>
                                            

                                        </div>
                                       
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button type="button" onclick="history.back()" class=" btn btn-danger">Back</button>
                                    <button class=" btn btn-primary" id="addBtn">Add Now</button>
                                </div>
                            </div>      
                        </div> 
                    </div>                       
                </div> <!-- container-fluid -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <?php include 'Footer/footer.php';?>
                <!-- end Footer -->

            </div>
            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">

            <div data-simplebar class="h-100">

                <div class="rightbar-title">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
                </div>
        
                <!-- Tab panes -->
                <div class="tab-content pt-0">  

                    <div class="tab-pane active" id="settings-tab" role="tabpanel">

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, Layout, etc.
                            </div>

                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                                    id="light-mode-check" checked />
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                                    id="dark-mode-check" />
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-size" value="fluid" id="fluid" checked />
                                <label class="form-check-label" for="fluid-check">Fluid</label>
                            </div>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-size" value="boxed" id="boxed" />
                                <label class="form-check-label" for="boxed-check">Boxed</label>
                            </div>

                            <!-- Menu positions -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-position" value="fixed" id="fixed-check"
                                    checked />
                                <label class="form-check-label" for="fixed-check">Fixed</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-position" value="scrollable"
                                    id="scrollable-check" />
                                <label class="form-check-label" for="scrollable-check">Scrollable</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light" />
                                <label class="form-check-label" for="light-check">Light</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark" checked/>
                                <label class="form-check-label" for="dark-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand" />
                                <label class="form-check-label" for="brand-check">Brand</label>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient" />
                                <label class="form-check-label" for="gradient-check">Gradient</label>
                            </div>

                            <!-- size -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="default"
                                    id="default-size-check" checked />
                                <label class="form-check-label" for="default-size-check">Default</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed"
                                    id="condensed-check" />
                                <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact"
                                    id="compact-check" />
                                <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                            </div>

                            <!-- User info -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="sidebar-user" value="true" id="sidebaruser-check" />
                                <label class="form-check-label" for="sidebaruser-check">Enable</label>
                            </div>


                            <!-- Topbar -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                                    checked />
                                <label class="form-check-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="form-check-label" for="lighttopbar-check">Light</label>
                            </div>

                            <div class="d-grid mt-4">
                                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                                <a href="https://1.envato.market/admintoadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>



  
        <!-- Dashboar init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>