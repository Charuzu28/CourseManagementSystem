<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- JQuery DataTable Css -->
    <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <?php include ("nav.php");   ?>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>
                    COURSE DATATABLES
                    <small>Taken from <a href="https://datatables.net/" target="_blank">datatables.net</a></small>
                </h2>
            </div>
            <!-- Course Table-->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                COURSES
                            </h2>
                            <ul class="header-dropdown m-r--5">
                            <a href="create.php" class="btn btn-primary float-right">Add New Course</a>

                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            <?php
                    include_once 'db.php';
                    $result = mysqli_query($conn,"SELECT * FROM course");
                    ?>

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>Course</th>
                                            <td>Instructor</td>
                                            <th>Course ID</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Course</th>
                                            <td>instructor</td>
                                            <th>Course</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    
                                    <tbody>
                                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                                    <tr>
                                    <td><?php echo $row["int_name"]; ?></td>
                                    <td><?php echo $row["course_name"]; ?></td>
                                    <td><?php echo ($row["course_id"])?($row["course_id"]):('N/A'); ?></td>
                                    <td>
                                    <a href="view.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary" title='View Record'>View</a>
                                    <a href="update.php?id=<?php echo $row["id"]; ?>" class="btn btn-success" title='Update Record'>Update</a>
                                    <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger" title='Delete Record'>Delete</a>
                                    </td>  

                                    </tr>
                                    <?php
                                        $i++;
                                        }
                                        ?>
                                    </tbody>
                                    
                                </table>
                                <?php
                                }
                                else{
                                    echo "No result found";
                                }
                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Basic Examples -->
            <!-- Exportable Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                EXPORTABLE TABLE
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Help</a></li>
                                        <li><a href="javascript:void(0);">Customer Support</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                            </div>
                   <?php
                    include_once 'db.php';
                    $result = mysqli_query($conn,"SELECT * FROM course");
                    ?>

                    <?php
                    if (mysqli_num_rows($result) > 0) {
                    ?>
                                <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                                    <thead>
                                        <tr>
                                            <th>Course</th>
                                            <td>Instructor</td>
                                            <th>Course ID</th>
                                            <td>Action</td>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Course</th>
                                            <td>Instructor</td>
                                            <th>Course ID</th>
                                            <td>Action</td>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($result)) {
                    ?>
                                    <tr>
                                    
                                    <td><?php echo $row["course_name"]; ?></td>
                                    <td><?php echo $row["int_name"]; ?></td>
                                    <td><?php echo ($row["course_id"])?($row["course_id"]):('N/A'); ?></td>
                                    <td>
                                    <a href="view.php?id=<?php echo $row["id"]; ?>" class="btn btn-primary" title='View Record'>View</a>
                                    <a href="update.php?id=<?php echo $row["id"]; ?>" class="btn btn-success" title='Update Record'>Update</a>
                                    <a href="delete.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger" title='Delete Record'>Delete</a>
                                    </td>  
                                    <?php
                                        $i++;
                                        }
                                        ?>    
                                </tbody>
                                    
                                </table>
                                <?php
                                }
                                else{
                                    echo "No result found";
                                }
                    ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Exportable Table -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery DataTable Plugin Js -->
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/tables/jquery-datatable.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
