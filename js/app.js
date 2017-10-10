var myApp = angular.module('crud', ['ngRoute']);
myApp.config(function($routeProvider){
	$routeProvider
	.when('/', {
		templateUrl: 'templates/posts.html',
		controller: 'postsCtrl'
	})
});
myApp.controller('postsCtrl', function($scope, $http){
	$http({
		method: 'GET',
		url: 'services/allPosts.php',
		})
		.then(function(fetchData){
			$scope.posts = fetchData;
		});
});