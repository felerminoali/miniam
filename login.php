<html>
<!--<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script> -->
<!-- background="law.jpg" -->
<body>
	<div ng-app="myPage" ng-controller="pageControl">
		<form action="register.php" method="POST">
			Username: <br>
			<input type="text" ng-model="username" name="username"><br>
			Password: <br>
			<input type="text" ng-model="password" name="password"><br><br>
			<button ng-click="submit()" name="submit">submit</button>
			<button ng-click="register()" name="register">Register</button>
		</form>
	</div>

	<script>
		
	</script>
</body>
</html>


<!--<script>
	angular.module('myPage', []).controller('pageControl', function($scope, $window) {
		$scope.submit = function () {
			$window.location.href = 'file:///Users/joankahindi/Desktop/miriam_project/home_page.html';
		}
		$scope.register = function(){
			$window.location.href = 'file:///Users/joankahindi/Desktop/miriam_project/register.html';
		}

	})
</script> -->