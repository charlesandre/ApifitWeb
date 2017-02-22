(function(angular) {
	  'use strict';
var app = angular.module('mainApp', ['ngRoute', 'ngMessages', 'ngPassword']);

app.controller('loginCtrl', function($scope, $location) {
	$scope.submit = function() {
		//$http.post("php/loginUser.php",{'email':$scope.email, 'password':$scope.password})
	};
});


app.controller('signupCtrl', function($window, $scope, $http, $location) {
	$scope.submit = function() {
			$http.post("php/registerUser.php",{'firstname':$scope.name, 'lastname':$scope.last_name, 'email':$scope.email, 'password':$scope.password, 'phone':$scope.phone})
		//$http.post("php/----- le mail d'envoi d'inscription ---.php",{'uname':$scope.name, 'ulastname':$scope.lastname, 'uemail':$scope.email, 'password':$scope.password, 'phone':$scope.phone})
		//modification de la fenêtre d'inscription disant qu'il faut consulter ses mails
	}

	$scope.text = 'me@example.com';
  $scope.emailFormat = /^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/;


});

app.controller('contactCtrl', function($window, $scope, $http, $location) {
	$scope.submit = function() {
			$http.post("php/mail.php",{'uname':$scope.name, 'ulastname':$scope.lastname, 'uemail':$scope.email, 'content':$scope.com, 'phone':$scope.phone})
	}
	$scope.text = 'me@example.com';
  $scope.emailFormat = /^[a-z]+[a-z0-9._]+@[a-z]+\.[a-z.]{2,5}$/;
});

})
(window.angular);
