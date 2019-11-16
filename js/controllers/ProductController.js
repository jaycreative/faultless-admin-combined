app.controller('ProductController', function($scope, $http, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";

  $scope.init = function(id, hoseType){
    //$scope.id = id;
       $scope.hoseType = transferService.getHoseType();
       $scope.id = transferService.getUsername();
    //   alert(transferService.getProductID());
     $http.post("functions/selectProducts.php", {'id':$scope.id, 'hoseType':$scope.hoseType}).then(function(response){  
       $scope.names = response.data;
     });
  };

  $scope.details = function(index){
    
    $scope.productID = $scope.names[index].ProductID;
     $scope.username = $scope.names[index].Username;
     $scope.customerPO = $scope.names[index].CustomerPO;
     $scope.orderNum = $scope.names[index].OrderNum;
     $scope.part = $scope.names[index].Part;
     $scope.fittings = $scope.names[index].Fittings;
     $scope.testDate = $scope.names[index].testDate;
     $scope.testedBy = $scope.names[index].TestedBy;
     $scope.pressure = $scope.names[index].Pressure;
     $scope.diameter = $scope.names[index].HoseDiameter;
     $scope.length = $scope.names[index].HoseLength;
     $scope.temp = $scope.names[index].Temperature;
     $scope.crn = $scope.names[index].CRN;
     $scope.inService = $scope.names[index].InService;
     $scope.description = $scope.names[index].description;
    //alert($scope.names[0]);

    var productID = $scope.productID;
    $http.post("functions/selectComments.php", {'productID':productID}).then(function(response){  
      $scope.listOfComments = response.data;
      alert("comments displayed");
    });

  }

  $scope.addComment = function(){
    var Comment = document.getElementById('Comment').value; 
    var productID = $scope.productID;

    $http.post("functions/addComment.php", {'productID':productID, 'Comment':Comment}).then(function(response){  
      $scope.comments = response.data;
      alert($scope.comments);
    });
  }


});

