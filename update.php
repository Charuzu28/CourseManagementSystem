<?php
// Include database connection file
require_once "db.php";
include("auth_session.php");


    if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE course set  name='" . $_POST['course_name'] . "', course_id='" . $_POST['course_id'] . "' ,int_name='" . $_POST['int_name'] . "' WHERE id='" . $_POST['id'] . "'");
     
    echo '<script>alert("Course has updated added.")</script>';
    echo "<script>window.location.href ='dashboard.php'</script>";
    }
    $result = mysqli_query($conn,"SELECT * FROM course WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
  
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Course Management System</title>
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

    <!-- Sweet Alert Css -->
    <link href="plugins/sweetalert/sweetalert.css" rel="stylesheet" />

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
                <h2>FORM EXAMPLES</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                VERTICAL LAYOUT
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                        <form action="<?php echo htmlspecialchars(basename($_SERVER['REQUEST_URI'])); ?>" method="post">
                                <label for="name">Course</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="name" class="form-control" value="<?php echo $row["course_name"]; ?>" maxlength="50" placeholder="Enter Course name" name="name">
                                    </div>
                                </div>
                                <label for="int-name">Instructor</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" id="email_address" class="form-control" value="<?php echo $row["int_name"]; ?>" maxlength="30"  placeholder="Enter the instructor name" name="int_name">
                                    </div>
                                </div>
                                <label for="mobile">Course ID</label>
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="mobile" id="mobile" class="form-control" value="<?php echo $row["course_id"]; ?>" maxlength="12" placeholder="Enter your Number" name="mobile">
                                    </div>
                                </div>
                                <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
                                <input type="submit" class="btn btn-primary m-t-15 waves-effect" name="save" value="submit">
                                 <a href="dashboard.php" class="btn btn-danger m-t-15 waves-effect">Cancel</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
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

    <!-- Custom Js -->
    <script src="js/admin.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
