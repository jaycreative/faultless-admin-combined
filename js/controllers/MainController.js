app.controller('MainController', function($scope, $http) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";
  

  $scope.hello = function(){
    $http.GET("test.php").success(function(){
      
      return "working";
    
    });  
    
  };

  $scope.insertData = function(){  
    $http.post("functions/insert.php", {'firstname':$scope.firstname, 'lastname':$scope.lastname}).then(function(response){  
         alert(response.data);  
         $scope.firstname = null;  
         $scope.lastname = null;  
    });  
  };

  $scope.displayData = function(){  
    $http.get("functions/select.php").then(function(response){  
         $scope.names = response.data;}
    );  
  } 

  $scope.updateData = function(){    
    $http.post("functions/update.php", {'firstname':$scope.firstname, 'lastname':$scope.lastname, 'id':$scope.idnum}).then(function(response){ 
      alert(response.data);  
         $scope.firstname = null;  
         $scope.lastname = null;
         $scope.idnum = null;
    })
  }  

});

