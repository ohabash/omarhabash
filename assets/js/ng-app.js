angular.module('OmarHabash',["ngRoute", "ngAnimate"])
	.config(function ($routeProvider, $locationProvider){
		$routeProvider
			.when('/', {
				controller: 'ListenController',
				templateUrl: 'ng-views/dashboard.html',
				activeClass: 'dashboard',
				activeJs: 'dashboard'
			})
			.when('/mission', {
				controller: 'ListenController',
				templateUrl: 'ng-views/mission.html',
				activeClass: 'mission',
				activeJs: 'mission'
			})
			.when('/projects', {
				controller: 'ListenController',
				templateUrl: 'ng-views/projects.html',
				activeClass: 'projects',
				activeJs: 'projects'
			})
			.when('/skills', {
				controller: 'ListenController',
				templateUrl: 'ng-views/skills.html',
				activeClass: 'skills',
				activeJs: 'skills'
			})
			.when('/experience', {
				controller: 'ListenController',
				templateUrl: 'ng-views/experience.html',
				activeClass: 'experience',
				activeJs: 'experience'
			})
			.when('/downloads', {
				controller: 'ListenController',
				templateUrl: 'ng-views/downloads.html',
				activeClass: 'downloads',
				activeJs: 'downloads'
			})
			.when('/contact', {
				controller: 'ListenController',
				templateUrl: 'ng-views/contact.html',
				activeClass: 'contact',
				activeJs: 'contact'
			})
			.when('/profile', {
				controller: 'ListenController',
				templateUrl: 'ng-views/profile.html',
				activeClass: 'profile',
				activeJs: 'profile'
			});
		$locationProvider.html5Mode(true);
	});
	


// when url Changes update currentRoute
// $scope.$on('$routeChangeStart', function(next, current) { 
//   switchRoute();
// });