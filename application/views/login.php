<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>UTeM Reporting Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="<?=base_url()?>resources/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="<?=base_url()?>resources/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="<?=base_url()?>resources/vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?=base_url()?>resources/css/sb-admin.css" rel="stylesheet">
    <style>
    h2 {color: #3b3b3b; }
    p {color: red;}
    </style>
</head>

<body>

 <div class="container-fluid">

     <?php
     echo form_open('login', array(
         'method' => 'post',
         'class' => 'form-signin'
     ));

     if(isset($error)) {
         //echo $error;
     }
     ?>

     <span id="form-error" class="text-danger small"></span>
     <h1 style="text-align: center; width: 100%; ">UTeM UC Reporting<br><br>
         <span></span>
     </h1>
        <p><?php
            if ($error == 1) { echo "Too Many Login Attempts"; }
            if ($error == 2) { echo "Invalid Login Credentials."; }
        ?></p> 
        <input style="margin-bottom: 10px" type="username" name="username" class="form-control" placeholder="Username" required autofocus>
        <input style="margin-bottom: 10px" type="password" name="password" class="form-control" placeholder="Password" required>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Sign in">
      </form>

    </div> <!-- /container -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?=base_url()?>resources/vendor/jquery/jquery.min.js"></script>
    <script src="<?=base_url()?>resources/vendor/tether/tether.min.js"></script>
    <script src="<?=base_url()?>resources/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?=base_url()?>resources/vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="<?=base_url()?>resources/vendor/chart.js/Chart.min.js"></script>
    <script src="<?=base_url()?>resources/vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?=base_url()?>resources/vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?=base_url()?>resources/js/sb-admin.min.js"></script>

</body>

</html>
