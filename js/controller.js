(function(angular) {
	  'use strict';
var app = angular.module('mainApp', ['ngRoute', 'ngMessages', 'ngPassword']);

app.controller('loginCtrl', function($scope, $location) {
	$scope.submit = function() {
		var uemail = $scope.username;
		var password = $scope.password;
		
		$location.path('home.html');	
		

	};

});

app.controller('signupCtrl', function($window, $scope, $http, $location) {
	$scope.submit = function() {
		if($scope.password != $scope.password2) {
			alert("Password don't match");
		} else {


			$http.post("php/register.php",{'uname':$scope.name, 'ulastname':$scope.lastname, 'uemail':$scope.email, 'password':$scope.password, 'phone':$scope.phone});
			
			$window.location.href = '/ApifitWeb/';
		};

	}
	$scope.text = 'me@example.com';
    $scope.emailFormat = /^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/;


}, function Ctrl($scope) {
  $scope.text = 'me@example.com';
  $scope.emailFormat = /^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/;
});


})(window.angular);


