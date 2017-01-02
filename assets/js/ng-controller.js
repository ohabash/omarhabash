angular.module('OmarHabash')
	.controller('ListenController', function ($scope, $rootScope, $location) {
		// $rootScope.$route = $route;
		$scope.PAGE = function (viewLocation) { 
        	return viewLocation === $location.path();
    	};
		$scope.contacts = [];
		// console.log($scope.PAGE);
	})
	.controller('skillListController', function skillListController($scope, $http) {
		$http.get('skills.json').then(function(result){
          $scope.skills = result.data;                
        });
	})
	.controller('projectListController', function projectListController($scope, $http, $timeout) {
		$http.get('projects.json').then(function(result){
          $scope.projects = result.data;                
        });
        function slicker($scope, $el, $attrs) {
	        $timeout((function() {
        		addAlert('<green>Project Carousel Initiating...</green>');
	            
        		$('.center-slick').removeClass('o0');
	        }), 90)
	    }slicker();
	})
	.directive('bsPopover', function() {
	    return function(scope, element, attrs) {
	        element.find("a[rel=popover]").popover({ placement: 'bottom', html: 'true'});
	    };
	})
	.run(function($rootScope, $templateCache) {
		$rootScope.$on('$viewContentLoaded', function() {
			$templateCache.removeAll();
		});
	});


