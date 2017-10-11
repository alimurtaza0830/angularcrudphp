var myApp = angular.module('crud', ['ngRoute']);

		// Route configurating Starts ----->
		myApp.config(["$routeProvider", "$locationProvider", function($routeProvider, $locationProvider){
			$locationProvider.hashPrefix('');
			$routeProvider
			.when('/', {
				templateUrl: 'templates/posts.html',
				controller: 'postsCtrl'
			})
			.when('/createPost', {
				templateUrl: 'templates/create.html',
				controller: 'createCtrl'
			})
			.when('/post/:id', {
				templateUrl: 'templates/view.html',
				controller: 'viewCtrl'
			})
		}]); // End Config

		// Controller (postsCtrl) Starts here ----->
		myApp.controller('postsCtrl', function($scope, $http){
			$http({
				method: 'GET',
				url: 'services/allPosts.php',
				})
				.then(function(fetchData){
					$scope.posts = fetchData;
				});
		}); // End Controller (postsCtrl) ----->

		// Controller (viewCtrl) Starts here ----->
		myApp.controller('viewCtrl', function($scope, $http, $routeParams){
			$http({
					method: 'get',
					url: 'services/getPost.php',
					params:{id:$routeParams.id}
					})
					.then(function(response){
					$scope.posts = response.data;
				});

		}); // End Controller (viewCtrl) ----->

		// Controller (createCtrl) Starts here ---->
		myApp.controller('createCtrl', function($scope, $http){
			$scope.insertData = function(){
				
				$http.post("./services/addPost.php",{
					'title' : $scope.title,
					'description' : $scope.description
				}).then(function(response){
					console.log("Data Inserted Successfully");
				},function(error){
					alert("Sorry... Data Could not be inserted.");
					console.log(error);
				});
			}





			// Form Submit Functions ---->
			// $("#submit").on('click', function(e){
			// 	e.preventDefault();
			// 	var title = $("#title").val();
			// 	var description = $("#description").val();
			// 	var dataString = $("#insertDataForm").serialize();
				
			// 	if(title == "" || description == "")
			// 		{
			// 			$("#msg").html("Please fill all the fields");
			// 		}
			// 	else 
			// 		{
			// 			$.ajax({
			// 				type: 'POST',
			// 				url: './services/addPost.php',
			// 				data: dataString,
			// 				cache: false,
			// 				success: function(result){
			// 					$("#msg").html(result);
			// 					var title = $("#title").val();
			// 					var description = $("#description").val();
			// 				}
			// 			}); // End Ajax Call
			// 		}
			// 	 return false;
			// });  // End Submit Function 
		});   // End Controller (createCtrl) ----->