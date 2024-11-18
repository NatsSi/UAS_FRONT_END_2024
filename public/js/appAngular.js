var yogo = angular.module('yogo', ['ngRoute', 'appControllers'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('[[');
    $interpolateProvider.endSymbol(']]');
  });

yogo.config(function ($routeProvider, $locationProvider) {
    $locationProvider.hashPrefix('');
    $routeProvider
    .when("/", {
        templateUrl: "/home",
        controller: "MainController"
    })
    .otherwise({
        redirectTo: "/"
    });
});