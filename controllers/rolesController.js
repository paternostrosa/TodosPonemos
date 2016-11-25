angular.module("todosPonemos",[])

  .controller('rolesController', ["$scope","$rootScope","$location","$http",function ($scope, $rootScope, $location, $http) {
	$http.get('api/roles/list')
		.then(function (results) {
			$scope.roles=results.data;
		
		});
		
}]);