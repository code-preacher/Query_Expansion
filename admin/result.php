<?php
ob_start();
require_once '../library/lib.php';
require_once '../classes/crud.php';

$lib=new Lib;
$crud=new Crud;

$lib->check_login2();
?>


              <!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>QUERY EXPANSION ON SEARCH ENGINE | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
   <link href="../font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="../plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="../plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
        <!-- DATA TABLES -->
    <link href="../plugins/style.css" rel="stylesheet" type="text/css" />

    <!-- Daterange picker -->
    <link href="../plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="../dist/css/AdminLTE.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="skin-blue">
    <div class="wrapper">
      
<?php
include 'header.php';
?>
      <!-- Left side column. contains the logo and sidebar -->
<?php
include 'sidebar.php';
?>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
       <section class="content-header">
          <h1>View Topic Info Result for <?=$_GET['name']?>
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">View Topic Info</li>
          </ol>
        </section>
        <!-- Main content -->
        <section class="content">
 <div class="col-md-4">
                           <a href="view-topic.php" class="btn btn-success btn-block btn-flat"><i class="fa fa-arrow-left"></i>&nbsp;Back</a>
                           </div>
              <!-- Container fluid  -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <div class="row">
                <div class="col-md-12">
                  <div class="card"><?php $lib->msg(); ?>
                  <div class="card-body">
                    <div class="table-responsive m-t-40">
                      <table id="example1" class="table table-bordered table-striped" cellspacing="0" width="100%">

                          <thead>
                           <tr>
                             <th>S/N</th>
                             <th>Name</th>
                             <th>All Info</th>
                           </tr>
                         </thead>
                         <tfoot>
                          <tr>
                            <th>S/N</th>
                            <th>Name</th>
                            <th>All Info</th>
                          </tr>
                        </tfoot>
                        <tbody>
                         <?php
                          $qt=$crud->displayAllSpecificWithOrderAndLike('topic','name',$_GET['name'],'id','desc');
                         $c=1;
                         if ($qt) {

                           foreach($qt as $dy){
                            ?>
                            <tr>
                             <td><?php echo $c++; ?></td>
                             <td><?php echo ucfirst($dy['name']); ?></td>
                             <td><a href="view-topic-info.php?id=<?php echo $dy['id']; ?>" ><i class="fa fa-book text-primary"></i></a></td>
                            </tr>
                            <?php
                          }

                        } else {
                          echo "<tr><td colspan='4'><center>No Topic at the moment</center</td></tr>";
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>

            </div></section></div>

  <?php
include 'footer.php';
    ?>
  </body>
</html>