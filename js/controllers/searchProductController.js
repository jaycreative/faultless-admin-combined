app.controller('searchProductController', function($scope, $http, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";
  //$scope.id = 'D432223';

  $scope.searchProduct = function() {  
     var ProductID = document.getElementById('ProductID').value; 
     var Username = document.getElementById('Username').value; 
     var CustomerPO = document.getElementById('CustomerPO').value;  
     var OrderNum = document.getElementById('OrderNum').value;
     var Part = document.getElementById('Part').value; 
     var Fittings = document.getElementById('Fittings').value; 
     var testDate = document.getElementById('testDate').value; 
     var TestedBy = document.getElementById('TestedBy').value; 
     var HoseType = document.getElementById('HoseType').value;  
     var Pressure = document.getElementById('Pressure').value;
     var HoseDiameter = document.getElementById('HoseDiameter').value; 
     var HoseLength = document.getElementById('HoseLength').value; 
     var Temperature = document.getElementById('Temperature').value; 
     var CRN = document.getElementById('CRN').value; 
     var InService = document.getElementById('InService').value; 

    if (ProductID == ""){ProductID = "%"};
    if (Username == ""){Username = "%"};
    if (CustomerPO == ""){CustomerPO = "%"};
    if (OrderNum == ""){OrderNum = "%"};
    if (Part == ""){Part = "%"};
    if (Fittings == ""){Fittings = "%"};
    if (testDate == ""){testDate = "%"};
    if (TestedBy == ""){TestedBy = "%"};
    if (HoseType == ""){HoseType = "%"};
    if (Pressure == ""){Pressure = "%"};
    if (HoseDiameter == ""){HoseDiameter = "%"};
    if (HoseLength == ""){HoseLength = "%"};
    if (Temperature == ""){Temperature = "%"};
    if (CRN == ""){CRN = "%"};
    if (InService == ""){InService = "%"};

     $http.post("functions/searchProduct.php", {'ProductID':ProductID, 'Username':Username, 'CustomerPO':CustomerPO, 'OrderNum':OrderNum, 'Part':Part, 'Fittings':Fittings, 'testDate':testDate, 'TestedBy':TestedBy, 'HoseType':HoseType, 'Pressure':Pressure, 'HoseDiameter':HoseDiameter, 'HoseLength':HoseLength, 'Temperature':Temperature, 'CRN':CRN, 'InService':InService}).then(function(response){  
         
        $scope.names = response.data;
       // alert($scope.names); 
       }
        
      );  
  };

  $scope.details = function(index) {
     $scope.productID = $scope.names[index].ProductID;
      $scope.username = $scope.names[index].Username;
      $scope.customerPO = $scope.names[index].CustomerPO;
      $scope.orderNum = $scope.names[index].OrderNum;
      $scope.part = $scope.names[index].Part;
     $scope.hoseType = $scope.names[index].HoseType;
      $scope.fittings = $scope.names[index].Fittings;
      $scope.testDate = $scope.names[index].testDate;
      $scope.testedBy = $scope.names[index].TestedBy;
      $scope.pressure = $scope.names[index].Pressure;
      $scope.diameter = $scope.names[index].HoseDiameter;
      $scope.length = $scope.names[index].HoseLength;
      $scope.temp = $scope.names[index].Temperature;
      $scope.crn = $scope.names[index].CRN;
      $scope.inService = $scope.names[index].InService;
     //alert("working");

       transferService.setHoseType($scope.hoseType);
       transferService.setUsername($scope.username);
     //alert(transferService.getHoseType());
     //alert(transferService.getUsername());
  }

});

