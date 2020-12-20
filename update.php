<?php

  $var = $_GET['var'];

include 'connection.php';
include 'check.php';
 if(isset($_POST['PhoneNumber']) ){

	
	$PhoneNumber=$_POST['PhoneNumber'];
	$OrderDateTime=$_POST['OrderDateTime'];
	$DeliveryDateTime=$_POST['DeliveryDateTime'];
	$TotalPrice=$_POST['TotalPrice'];
	$Email=$_POST['Email'];
	$CustomertName=$_POST['CustomertName'];
$desc=$_POST['comment'];


     
	$sql="UPDATE orderr SET PhoneNumber= '$PhoneNumber'  , DeliveryDateTime = '$DeliveryDateTime' , TotalPrice = '$TotalPrice' , Email = '$Email' , CustomertName = '$CustomertName' , descr = '$desc' WHERE OrderID = '" .$var. "'  ;";

	
    
 mysqli_query($db, $sql);
     
     
}
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
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
                                <h1>Table > Update Order</h1>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
    <div class="row m-0">
   <div class="col-sm-2">
</div> 
                    <div class="col-sm-6">
<div class="login-form">
<?php
  




 $usql = "SELECT * FROM `orderr` WHERE OrderID = '" .$var. "'  ;";


      $result = mysqli_query($db, $usql);

   while($row = mysqli_fetch_array($result)){


echo'    <form action="" method="post" >
                        <div class="form-group">
<div class="form-group">
                            <label>Customer Name</label>
                            <input type="text" name="CustomertName" class="form-control" placeholder="' . $row['CustomertName'] . '">
                        </div>
                            <label>Phone Number</label>
                            <input type="text" name="PhoneNumber" class="form-control" placeholder="' . $row['PhoneNumber'] . '">
                        </div>
                     
<div class="form-group">
                            <label>Password</label>
                            <input type="datetime-local" name="DeliveryDateTime" class="form-control" placeholder="' . $row['DeliveryDateTime'] . '">
                        </div>
<div class="form-group">
                            <label>Email</label>
                            <input type="email" name="Email" class="form-control" placeholder="' . $row['Email'] . '">
                        </div>

<div class="form-group">
                            <label>Order Description</label>
                         <input type="text" name="comment" class="form-control" placeholder="' . $row['descr'] . '"">
                        </div>
<div class="form-group">
                            <label>Total Price</label>
                         <input type="text" name="TotalPrice" class="form-control" placeholder="' . $row['TotalPrice'] . '"">
                        </div>


                        <button type="text" class="btn btn-success btn-flat m-b-30 m-t-30">Edit</button>
                  
                    
                    </form>';
}
                 ?>
     
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


</body>
</html>
