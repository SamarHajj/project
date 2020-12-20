<?php
include 'connection.php';
include 'check.php';
$query= " select * from  orderr;";
$result= mysqli_query($db, $query);





?>
<!DOCTYPE html>
<html class="no-js" lang="">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Transcend CRM</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
    <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                 
                   <li>
                        <a href="index.php"><i class="menu-icon fa fa-laptop"></i>Tables </a>
                    </li>
                    
                          <li>
                        <a href="addorder.php"><i class="menu-icon fa fa-th"></i>Add Order</a>
                    </li>
   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                          <a class="navbar-brand" href="./"><img src="images/transcend-logo.png" alt="Logo" width="50" height="40"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/transcend-logo.png" alt="Logo" ></a>
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">
                    <div class="header-left">
                      
                        

                        
                    </div>

                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle active" " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                       <i class="fa fa-user"></i>
                        </a>

                        <div class="user-menu dropdown-menu">
                            

                         

                            

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i>Logout</a>
                        </div>
                    </div>
                </div>
            </div>
        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-12">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Orders Table</h1>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Table</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
   <?php

echo' 
                                        <tr>
                                            <th>Order ID</th>
    <th>Phone Number </th>
    <th>Order Date Time</th>
    <th>Delivery Date Time</th>
      <th>Total Price </th>
    <th>Email</th>
    <th>Customer Name</th>
    <th>Worker Name</th>
    <th>Description</th>
  <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tbody>'; 
              
                                     while($row = mysqli_fetch_array($result)){
$id = $row['OrderID'];

echo "<tr>";
echo "<td>" . $id . "</td>";
echo "<td>" . $row['PhoneNumber'] . "</td>";
echo "<td>" . $row['OrderDateTime'] . "</td>";
echo "<td>" . $row['DeliveryDateTime'] . "</td>";
echo "<td>" . $row['TotalPrice'] . "</td>";
echo "<td>" . $row['Email'] . "</td>";
echo "<td>" . $row['CustomertName'] . "</td>";
echo "<td>" . $row['WorkerId'] . "</td>";
echo "<td>" . $row['descr'] . "</td>";
echo "<td>  <div class='dropdown'>
                        <a href='#' class='dropdown-toggle ' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                       <i class='fa fa-edit'></i>
                        </a>

                        <div class='user-menu dropdown-menu'>
                            

                         

                            

                            <a class='nav-link' href='update.php?var=" . $id . "'></i>edit</a>


<a href='javascript:void(0);' NAME='Error Handling'  id='a' title='ZeroDivisionError handling' onClick=window.open('delete.php?var=" . $id . "','Ratting','width=550,height=170,left=150,top=200,toolbar=0,status=0,');>Delete</a>



                        </div>
                    </div></td>";



echo "</tr>


";
} 


 ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->
        <div class="clearfix"></div>

        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2018 Ela Admin
                    </div>
                    <div class="col-sm-6 text-right">
                        Designed by <a href="https://colorlib.com">Colorlib</a>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- /#right-panel -->

    <!-- Right Panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/init/datatables-init.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
      } );


</script>
</body>
</html>
