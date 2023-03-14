<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Lab 7</title>

   <!-- Bootstrap core CSS -->
   <link href="bootstrap3_defaultTheme/dist/css/bootstrap.css" rel="stylesheet">

   <!-- Custom styles for this template -->
   <link href="css/lab7.css" rel="stylesheet">

</head>

<body>
<div class="container">
   <div class="row">
      <div class="col-md-3">
      </div>
      <div class="col-md-6">
         <div id="login">
            <div class="page-header">
               <h2>Login</h2>
            </div>
            <form role="form">
               <?php
               include "lab7-data.php";
               $error = '';
               if(empty($email)){
                  $error = "has-error";
               }
               echo '<div class ="form-group'.$error.'">';
               ?>
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" name="email" value="">
                <p class="help-block">Enter an email</p>
              </div>
              <?php
                  include 'lab7-data.php';
                  $error = '';
                  if(empty($password)){
                     $error = 'has-error';
                  }
                  echo '<div class="form-group'.$error.'">';
               ?>
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" value="">
                <p class="help-block">Email and password not found</p>
              </div>
              <div class="form-group">
                <label for="exampleInputFile">Server</label>
                <select name="server" class="form-control">
                  <!--Replace the following elements with PHP-->
                  <?php
                     $options = array("Server 1", "Server 2", "Server 3", "Server 4", "Server 5");
                     for($i =0; $i<count($options); $i++)
                     {
                        echo "<option>".$options[$i]."</option>";
                     }
                  ?>                  
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
         </div>
      </div>
      <div class="col-md-3">
      </div>
   </div>
</div>  <!-- end container -->

 <!-- Bootstrap core JavaScript
 ================================================== -->
 <!-- Placed at the end of the document so the pages load faster -->
 <script src="bootstrap3_defaultTheme/assets/js/jquery.js"></script>
 <script src="bootstrap3_defaultTheme/dist/js/bootstrap.min.js"></script>
</body>
</html>