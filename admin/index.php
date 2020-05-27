<?php

//index.php

session_start();

?>
<!DOCTYPE html>
<html>
 <head>
  <title>Admin Login</title>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.5/angular.min.js"></script>
  <script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
  <script src="../js/popper.min.js"></script>
  <script src="../js/bootstrap3.min.js"></script>
  <link href="../css/bootstrap3.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <style>
  .form_style
  {
   width: 600px;
   margin: 0 auto;
  }
  </style>
 </head>
 <body>
  <br />
   <h3 align="center">Admin Login</h3>
  <br />

  <div ng-app="login_register_app" ng-controller="login_register_controller" class="container form_style">
   <?php
   if(!isset($_SESSION["name"]))
   {
   ?>
   <div class="alert {{alertClass}} alert-dismissible" ng-show="alertMsg">
    <a href="#" class="close" ng-click="closeMsg()" aria-label="close">&times;</a>
    {{alertMessage}}
   </div>

   <div class="panel panel-default" ng-show="login_form">
    <div class="panel-heading">
     <h3 class="panel-title">Login</h3>
    </div>
    <div class="panel-body">
     <form method="post" ng-submit="submitLogin()">
      <div class="form-group">
       <label>Enter Your Email</label>
       <input type="text" name="email" ng-model="loginData.email" class="form-control" />
      </div>
      <div class="form-group">
       <label>Enter Your Password</label>
       <input type="password" name="password" ng-model="loginData.password" class="form-control" />
      </div>
      <div class="form-group" align="center">
       <input type="submit" name="login" class="btn btn-primary" value="Login" />
      </div>
     </form>
    </div>
   </div>

   
   <?php
   }
   else
   {
    ob_start();
    header('Location: home.php');
    ob_end_flush();
    die();
   }
   ?>

  </div>
 </body>
</html>

<script>
var app = angular.module('login_register_app', []);
app.controller('login_register_controller', function($scope, $http){
 $scope.closeMsg = function(){
  $scope.alertMsg = false;
 };

 $scope.login_form = true;

 $scope.submitLogin = function(){
    $http({
    method:"POST",
    url:"login.php",
    data:$scope.loginData
    })
    .then(function(response) {
      data = response.data
      if(data.error != '')
      {
        $scope.alertMsg = true;
        $scope.alertClass = 'alert-danger';
        $scope.alertMessage = data.error;
      }
      else
      {
        location.reload();
      }
    }, function(error){
      location.reload();
    });
  };

});
</script>