<?php
  session_start();
  include("../inc/conn.php");

  $provinceSqlCmd = "Select * from Province order By province_id";
  $provinceResult = $conn->query($provinceSqlCmd);


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
            Add Image
          </div>

          <div class="dropdown" style = "float: right;">
              <ul class="dropdown-menu">
                <li><a href="#">Catagory1</a></li>
                <li><a href="#">Catagory2</a></li>
                <li><a href="#">Catagory3</a></li>
              </ul>
          </div>
        
         
        </ol>    
            <!-- Card Columns Example Social Feed -->
            <p><!--Alignment-->
            <hr class="mt-2">
              <!-- Example Social Card -->
              <div>
                <form action="images_save.php" method="post" enctype="multipart/form-data" >
                <div class="row" >
                  <!--Left-->
                  <div class="col-md-6">
                    <div class="form-group">
                        <label for="usr">Images</label>
                        <input type="file" name="pic" accept="image/*" required>
                    </div>
                  </div>

                  <!--Right-->
                  <div class="col-md-6">
                      <!--Catagory -->

                      <div class="row">
                        
                        <div class="form-group">
                          <label for="usr">Catagory</label>
                          <select name="cateId" class="form-control">
                            <option value="saab">Catagory1</option>
                            <option value="saab">Catagory2</option>
                          </select>
                        </div>

                      </div>

                      <div class="row">

                        <div class="form-group">
                          <label for="usr">Province</label>
                          <select  class="form-control" name="PROVINCE_NAME" required>
                            <option value="">จังหวัด</option>
                            <?php
                              while ($provinceData = $provinceResult->fetch_array()) {
                            ?>
                            
                            <option value="saab"><?=$provinceData['PROVINCE_NAME'] ?></option>
                            
                            <?php
                              }                     
                            ?>
                          </select>
                        </div>

                      </div>

                      <div class="row">
                 
                        <!--District -->
                        <div class="form-group">
                          <label for="usr">District</label>
                          <select name="distID" class="form-control" required>
                            <option value="">อำเภอ</option>
                            <?php
                              $districtSqlCmd = "Select * from amphur order By AMPHUR_ID ";
                              $districtQeury = $conn->query($districtSqlCmd);

                              while($districtData = $districtQeury->fetch_array()) {
                            ?>
                              if(provinceID == <?=$districtData['PROVINCE_ID']?>){
                                <option value="saab">
                                  <?=$districtData['AMPHUR_NAME'] ?>
                                </option>
                              }                            
                            <?php
                              }                     
                            ?>
                         </select>
                        </div>            

                      </div>
                       <!--Province -->

                      <div class="row">
                          <input type="submit" value="Submit">
                      </div>
                  

                    <!--Button Submit-->
                    
                  </div>

                
                </div> 
                </form>
              </div>
            <!--Alignment-->
    </div>
  </div>

    <!-- Scroll to Top Button -->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>

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
