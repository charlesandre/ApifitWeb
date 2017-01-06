(function(angular) {
	  'use strict';
var app = angular.module('mainApp', ['ngRoute', 'ngMessages', 'ngPassword']);

app.controller('loginCtrl', function($scope, $location) {
	$scope.submit = function() {
		var uemail = $scope.username;
		var password = $scope.password;
		
		$location.path('home.html');	
		

	};



s
});

app.controller('signupCtrl', function($scope, $http, $location) {
	$scope.submit = function() {
		if($scope.password != $scope.password2) {
			alert("Password don't match");
		} else {


			$http.post("php/register.php",{'uname':$scope.name, 'ulastname':$scope.lastname, 'uemail':$scope.email, 'password':$scope.password, 'phone':$scope.phone})
			.success(function(data, status, headers, config){
				alert("data inserted successfully");
			});
			


		};

	}

});


})(window.angular);


