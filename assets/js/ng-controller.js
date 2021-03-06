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
          addAlert('<green>Get Skills from JSON</green>');               
        });
	})
	.controller('projectListController', function projectListController($scope, $http, $timeout) {
		$http.get('projects.json').then(function(result){
          $scope.projects = result.data;                
			addAlert('<green>Get Projects from JSON</green>');
        });
        function slicker($scope, $el, $attrs) {
	        $timeout((function() {
        		addAlert('<yellow>Project Carousel Initiating...</yellow>');
	            $('.center-slick').slick({
				  centerMode: true,
				  centerPadding: '60px',
				  focusOnSelect: true,
				  slidesToShow: 5,
				  cssEase: 'ease',
				  infinite: false,
				  waitForAnimate: true,
				  responsive: [
				    {
				      breakpoint: 1600,
				      settings: {
				        slidesToShow: 3
				      }
				    },{
				      breakpoint: 480,
				      settings: {
				        arrows: false,
				        centerMode: true,
				        centerPadding: '40px',
				        slidesToShow: 1
				      }
				    }
				  ]
				});
        		$('.center-slick').removeClass('o0');
	        }), 500)
	    }
	    slicker();
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


