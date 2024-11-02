<?php
// Include database connection file
require_once "db.php";
include("auth_session.php");

    $result = mysqli_query($conn,"SELECT * FROM course WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
  
?>
 
 <!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>View Course</title>
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

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />

    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<body class="theme-red">
<?php include ("nav.php");   ?>

    <section class="content">
        <div class="container-fluid">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-3">
                    <div class="card profile-card">
                        <div class="profile-header">&nbsp;</div>
                        <div class="profile-body">
                            <div class="image-area">
                                <img src="images/user-lg.jpg" alt="AdminBSB - Profile Image" />
                            </div>
                            <div class="content-area">
                                <h3><?php echo $row["int_name"]; ?></h3>
                                <p><?php echo $row["course_name"]; ?></p>
                                <p><?php echo $row["course_id"]; ?></p>
                            </div>
                        </div>
                        <div class="profile-footer">
                            <ul>
                                <li>
                                    <span>Classes</span>
                                    <span>10</span>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="card card-about-me">
                        <div class="header">
                            <h2>Instructor</h2>
                        </div>
                    
                    </div>
                </div>
                    <div class="col-xs-12 col-sm-9">
                        <div class="card">
                            <div class="body">
                                    <div>
                                    <table>
                                        <tr>
                                            <th>Course ID</th>
                                            <th>Course Name</th>
                                            <th>Instructor Name</th>
                                        </tr>
                                        <tr>
                                            <!-- Assuming $row contains the relevant data -->
                                            <td><?php echo $row["course_id"]; ?></td>
                                            <td><?php echo $row["course_name"]; ?></td>
                                            <td><?php echo $row["int_name"]; ?></td>
                                        </tr>
                                        <!-- Add more rows if needed -->
                                    </table>
                                
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    <script src="js/pages/examples/profile.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>





