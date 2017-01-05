(function(angular) {
  'use strict';
angular.module('MyApp', ['ngRoute'])

  .controller('MyController', ['$scope', function($scope) {
    $scope.user = {name: "Charles", lastName: "Andre"};
    }])




})(window.angular);
