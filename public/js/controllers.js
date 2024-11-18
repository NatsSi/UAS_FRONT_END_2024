var appControllers = angular.module('appControllers', []);

appControllers.controller('LoginController', ['$scope', '$http', function ($scope, $http) {
    $scope.pesan = 'coba'
}]);

appControllers.controller('SignupController', ['$scope', '$http', function ($scope, $http) {

}]);

appControllers.controller('MainController', ['$scope', '$http', function ($scope, $http) {
    $scope.pesan = "Coba";
}]);