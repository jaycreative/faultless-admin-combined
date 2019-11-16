app.controller('ProductController', function($scope, $http, $location, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";

  $scope.init = function(){
    //$scope.id = id;
     // $route.reload();
       $scope.hoseType = transferService.getHoseType();
       $scope.id = transferService.getUsername();
       $scope.productID = transferService.getProductID();
    //   alert(transferService.getProductID());
     $http.post("functions/selectProducts.php", {'id':$scope.id, 'hoseType':$scope.hoseType}).then(function(response){  
       $scope.names = response.data;
     });

     //run function to collect image info from hose table, then assign to the image field
     //Do this by assigning its value to $scope.img
     $http.post("functions/getProductPic.php", {'hoseType':$scope.hoseType}).then(function(response){  
      $scope.productPic = response.data;
      //alert("comments displayed");
      var img = $scope.productPic[0].PicURL;
      $scope.img = "/functions/uploads/".concat(img);
      alert($scope.img);
      
     });

     

     $http.post("functions/initProduct.php", {'id':$scope.productID}).then(function(response){  
      $scope.initUser = response.data;

     $scope.productID = $scope.initUser[0].ProductID;
     $scope.username = $scope.initUser[0].Username;
     $scope.customerPO = $scope.initUser[0].CustomerPO;
     $scope.orderNum = $scope.initUser[0].OrderNum;
     $scope.part = $scope.initUser[0].Part;
     $scope.fittings = $scope.initUser[0].Fittings;
     $scope.testDate = $scope.initUser[0].testDate;
     $scope.testedBy = $scope.initUser[0].TestedBy;
     $scope.pressure = $scope.initUser[0].Pressure;
     $scope.diameter = $scope.initUser[0].HoseDiameter;
     $scope.length = $scope.initUser[0].HoseLength;
     $scope.temp = $scope.initUser[0].Temperature;
     $scope.crn = $scope.initUser[0].CRN;
     $scope.inService = $scope.initUser[0].InService;
     $scope.description = $scope.initUser[0].description;
    //alert($scope.names[0]);

    var productID = $scope.productID;
    $http.post("functions/selectComments.php", {'productID':productID}).then(function(response){  
      $scope.listOfComments = response.data;
      alert("comments displayed");
    });

    



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
    $scope.currentIndex = index;

    var productID = $scope.productID;
    $http.post("functions/selectComments.php", {'productID':productID}).then(function(response){  
      $scope.listOfComments = response.data;
      alert("comments displayed");
    });

    transferService.setProductID($scope.productID);
    document.getElementById('Comment').value="";

  }

  $scope.addComment = function(){
    var Comment = document.getElementById('Comment').value; 
    var productID = $scope.productID;

    $http.post("functions/addComment.php", {'productID':productID, 'Comment':Comment}).then(function(response){  
     alert(response.data);
      $scope.comments = response.data;
      
      //if currentIndex is undefined, just rerun the init function
      if(!$scope.currentIndex){
        $scope.init();
      } else {
      $scope.details($scope.currentIndex);
      }
      document.getElementById('Comment').value="";
      
    });
  }

  $scope.generate = function() {
    var x;
    //var y;
    var checkboxes = document.getElementsByName("checkboxes");
    //ar indexes = [];
    var productIDs = [];
    
    
    // $scope('#checkboxes input:checked').each(function () {
    //     selected.push($(this).attr('id'));
    // });
    for(x = 0; x < checkboxes.length; x++){
      if (checkboxes[x].checked){
        productIDs.push($scope.names[x].ProductID);
      }
    };

    if(productIDs.length == 0){
      alert("No items selected!  Please check at least one item.");
      return;
  }

     // alert(productIDs);
      //Once certificate is actually created, we will take the productIDs array and add it to our service
      //Then, we can use those productIDs to determine which certficates we need to generate.  
      //Then generating placeholder data is simple.
      //Make sure certificates open in a new tab/window

      transferService.setProducts(productIDs);
     // alert(transferService.getProducts());
      
    //  for(var i = 0; i < productIDs.length; i++){
     ///   alert(productIDs[i]);
       // $window.open('#!certificate', '_blank');
      // document.certificateForm.submit();
      $location.path('/certificate');

     // }


    // for (y = 0; y < indexes.length; y++){
    //   alert($scope.names[indexes[y]].ProductID);
    // }

  }

  $scope.update = function() {

    var ProductID = transferService.getProductID();
    var PO = document.getElementById('PO').value;
    var testDate = document.getElementById('testDate').value;
    var tester = document.getElementById('Tester').value;
    //var inService = document.getElementById('inService').value;

    var msg = "";

    if(PO == ""){
    //  alert("Please enter a valid PO number");
    //  return;
    msg = msg.concat("Please enter a valid PO number\n");
    }

    if(testDate == ""){
     // alert("Please enter a valid test date");
     // return;
     msg = msg.concat("Please enter a valid test date\n");
    }

    if(tester == "na"){
    //  alert("Please select a tester");
    //  return;
    msg = msg.concat("Please select a tester\n");
    }

    var y = document.getElementsByName('status');

    for(j = 0; j < y.length; j++) { 
      if(y[j].checked) {
        var inService = y[j].value; 
      }
    }

    if(inService == null){
    //  alert("Select a status for the hose");
    //  return;
    msg = msg.concat("Select a status for the hose\n");
    }

    if(msg != ""){
      alert(msg);
      return;
    }

    $http.post("functions/updateProduct.php", {'ProductID':ProductID, 'PO':PO, 'testDate':testDate, 'tester':tester, 'inService':inService}).then(function(response){  
     
     //$scope.details($scope.currentIndex);
     alert(response.data);
    //  document.getElementById('PO').value="";
    //  document.getElementById('testDate').value="";
    //  document.getElementById('Tester').value="";
    //  document.getElementById('inService').value="";
     $scope.init();
    });



    //

  }

 

});
