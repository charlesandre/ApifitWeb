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
		
			$http.post("php/register.php",{'uname':$scope.name, 'ulastname':$scope.lastname, 'uemail':$scope.email, 'password':$scope.password, 'phone':$scope.phone})
		.success(function(data, status, headers, config){
			alert("data inserted successfully");
		});
			
			$window.location.href = '/ApifitWeb/';
		

	}
	$scope.text = 'me@example.com';
    $scope.emailFormat = /^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/;


});

app.controller('contactCtrl', function($window, $scope, $http, $location) {
	$scope.submit = function() {
		
			$http.post("php/mail.php",{'uname':$scope.first_name, 'ulastname':$scope.family_name, 'uemail':$scope.email, 'content':$scope.com, 'phone':$scope.phone})
		.success(function(data, status, headers, config){
			alert("Mail sent");
		});
		

	}
	$scope.text = 'me@example.com';
    $scope.emailFormat = /^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/;


});


})(window.angular);


