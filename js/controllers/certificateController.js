app.controller('certificateController', function($scope, $http, $window, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";
  $scope.check2 = "THIS SHOULD WORK";


  $scope.products = transferService.getProducts();
  var username = transferService.getUsername();
  $scope.data = [];

  $scope.init = function(){

  //  alert("Works here");
     for(var i = 0; i < $scope.products.length; i++) {
    
    //     alert($scope.products[i]);
        var productID = $scope.products[i];
         $http.post("functions/selectCertificate.php", {'productID':productID, 'username':username}).then(function(response){  
    //       $scope.names[i] = response.data;
         //alert(response.data);
         $scope.data.push(response.data);
         });

    }

}
  

});
