<?php
  session_start();
  include("../inc/conn.php");

  $sqlCmd = "Select * from image order By img_id desc";
  $result = $conn->query($sqlCmd);

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>Make Mai House - Admin</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="fixed-nav" id="page-top">

    <!-- Navigation -->
<?php

      include("menu.php");

?>

    <div class="content-wrapper py-3">

      <div class="container-fluid">

        <!-- Breadcrumbs -->
        <ol class="breadcrumb">
          <div class="breadcrumb-item active" style="font-size:24px">
            My Admin</a>
          </div>

          <div class="dropdown" style = "float: right;">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Search By...
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li><a href="#">Catagory1</a></li>
                <li><a href="#">Catagory2</a></li>
                <li><a href="#">Catagory3</a></li>
              </ul>
          </div>
        
         
        </ol>
            
            <!-- Card Columns Example Social Feed -->
            <div class="mb-0 mt-4">
              All Image</div>
            <hr class="mt-2">
            <div class="card-columns">

              <?php
                while ($data = $result->fetch_array()) {
                   //echo $data['img_name']."<br>";
                 
              ?>
              
              <!-- Example Social Card -->
              <div class="card mb-3">
                <a href="#">
                  <img class="card-img-top img-fluid w-100" src="../image/upload/<?=sprintf("%08d.%s",$data['img_id'],$data['img_extension'])?>" alt="">
                </a>
                <div class="card-body">
                  <h6 class="card-title mb-1">
                    <a href="#"><?=$data['img_name'] ?> <?=sprintf("%08d.%s",$data['img_id'],$data['img_extension'])?></a>
                  </h6>
                  <p class="card-text small"><?=$data['img_district'] ?>
                    
                  </p>
                </div>                
                <div class="card-footer small text-muted">
                  Posted 32 mins ago
                </div>
              </div>
            
              <?php
                }
                 
?>

            

                
                
              </div>

            </div>
            <!-- /Card Columns -->

          </div>
        </div>
      </div>
    </div>

          

        

    </div>
    <!-- /.content-wrapper -->

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            Select "Logout" below if you are ready to end your current session.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/popper/popper.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../vendor/chart.js/Chart.min.js"></script>
    <script src="../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/sb-admin.min.js"></script>

  </body>

</html>
