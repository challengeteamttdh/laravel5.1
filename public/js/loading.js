angular.module('myApp', ['angular-loading-bar', 'ngAnimate']).config(['cfpLoadingBarProvider', function (cfpLoadingBarProvider) {
        cfpLoadingBarProvider.latencyThreshold = 1500;
    }]);

