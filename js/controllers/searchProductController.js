app.controller('searchProductController', function($scope, $http, $location, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";
  $scope.hiddenButton = true;
  //$scope.name = "details";
  
  //$scope.id = 'D432223';

  $scope.init = function() {
    //var element = document.getElementById("goToProduct");
    // document.getElementById("goToProduct").style.visibility = hidden;
    //element.hidden = true;
    //$scope.hideButton="true";
    $scope.getHoses();
    //document.getElementById("hideLink").style.display = "none";
    //var x = document.getElementById("hideLink");
   // alert(x);
    // if (x.style.display === "none") {
    //   x.style.display = "block";
      
    // }
    // } else {
    //   x.style.display = "none";
    // }
   
  }

  $scope.yell = function(){
    alert("YEAAAA");
  }

  $scope.searchProduct = function() {  

    $scope.names="";
    $scope.productID = "";
     $scope.username ="";
     $scope.customerPO = "";
     $scope.orderNum = "";
     $scope.part = "";
    $scope.HoseType = "";
     $scope.fittings = "";
     $scope.testDate ="";
     $scope.testedBy = "";
     $scope.pressure = "";
     $scope.diameter = "";
     $scope.length = "";
     $scope.temp = "";
     $scope.crn = "";
     $scope.inService = "";
     $scope.img="";
    //$scope.init();
    //need ti clear contents of details as well
     var ProductID = "%".concat(document.getElementById('ProductID').value, "%"); 
     var Username = "%".concat(document.getElementById('Username').value, "%"); 
     var CustomerPO = "%".concat(document.getElementById('CustomerPO').value, "%");   
     var OrderNum = "%".concat(document.getElementById('OrderNum').value, "%"); 
     var Part = "%".concat(document.getElementById('Part').value, "%"); 
     var Fittings = "%".concat(document.getElementById('Fittings').value, "%"); 
     //var testDate = "%".concat(document.getElementById('testDate').value, "%"); 
     var TestedBy = "%".concat(document.getElementById('TestedBy').value, "%"); 
     var HoseType = "%".concat(document.getElementById('HoseType').value, "%"); 
    // var Pressure = "%".concat(document.getElementById('Pressure').value, "%"); 
    // var HoseDiameter = "%".concat(document.getElementById('HoseDiameter').value, "%"); 
    // var HoseLength = "%".concat(document.getElementById('HoseLength').value, "%"); 
    // var Temperature = "%".concat(document.getElementById('Temperature').value, "%"); 
   //  var CRN = "%".concat(document.getElementById('CRN').value, "%"); 
    // var InService = "%".concat(document.getElementById('InService').value, "%"); 

     if (TestedBy == "%na%"){TestedBy = "%"};
     if (HoseType == "%na%"){HoseType = "%"};

     

     var fromPressure = document.getElementById('fromPressure').value;
     if(fromPressure == "") {fromPressure = '0'};
     var toPressure = document.getElementById('toPressure').value;
     if(toPressure == "") {toPressure = '99999'};
     
     var fromDiameter = document.getElementById('fromDiameter').value;
     if(fromDiameter  == "") {fromDiameter = '0'};
     var toDiameter  = document.getElementById('toDiameter').value;
     if(toDiameter  == "") {toDiameter  = '1000'};

     var fromLength = document.getElementById('fromLength').value;
     if(fromLength == "") {fromLength = '0'};
     var toLength = document.getElementById('toLength').value;
     if(toLength == "") {toLength = '1000'};

     var fromTemp = document.getElementById('fromTemp').value;
     if(fromTemp == "") {fromTemp = '0'};
     var toTemp = document.getElementById('toTemp').value;
     if(toTemp == "") {toTemp = '1000'} ;

     //alert("OK");

     var fromDate = document.getElementById('fromDate').value;
     if(fromDate == "") {fromDate = "1900-01-01 00:00:00"} else {fromDate = fromDate.concat(" 00:00:00")};
     var toDate = document.getElementById('toDate').value;
     if(toDate == "") {toDate = "2099-12-30 23:59:59"} else {toDate = toDate.concat(" 23:59:59")};

    if (ProductID == ""){ProductID = "%"};
    if (Username == ""){Username = "%"};
    if (CustomerPO == ""){CustomerPO = "%"};
    if (OrderNum == ""){OrderNum = "%"};
    if (Part == ""){Part = "%"};
    if (Fittings == ""){Fittings = "%"};
    //if (testDate == ""){testDate = "%"};
    if (TestedBy == ""){TestedBy = "%"};
    if (HoseType == ""){HoseType = "%"};
   // if (Pressure == ""){Pressure = "%"};
   // if (HoseDiameter == ""){HoseDiameter = "%"};
   // if (HoseLength == ""){HoseLength = "%"};
   // if (Temperature == ""){Temperature = "%"};
 

    

    var x = document.getElementsByName('crn');
    var y = document.getElementsByName('status');

    for(i = 0; i < x.length; i++) { 
      if(x[i].checked) {
        var CRN = x[i].value; 
      }
    } 

    for(j = 0; j < y.length; j++) { 
      if(y[j].checked) {
        var InService = y[j].value; 
      }
    } 

    if (CRN == null){CRN = "%"};
    if (InService == null){InService = "%"};

    alert(TestedBy + " " + HoseType + " " + fromDate + " " + toDate + " "+ CRN + " " + InService);

   // alert("UE");

     $http.post("functions/searchProduct.php", {'ProductID':ProductID, 'Username':Username, 'CustomerPO':CustomerPO, 'OrderNum':OrderNum, 'Part':Part, 'Fittings':Fittings, 'TestedBy':TestedBy, 'HoseType':HoseType, 'fromPressure':fromPressure,'toPressure':toPressure, 'fromTemp':fromTemp, 'toTemp':toTemp, 'fromLength':fromLength, 'toLength':toLength, 'fromDiameter':fromDiameter, 'toDiameter':toDiameter, 'CRN':CRN, 'InService':InService, 'fromDate':fromDate, 'toDate':toDate}).then(function(response){  
         
        $scope.names = response.data;
        if($scope.names == "null"){
          alert("No results found!");
        }  
       }
        
      );  
  };

  $scope.details = function(index) {
    alert("Details have been loaded.  Please click on details tab to view info");
    $scope.hideButton="false";
     $scope.productID = $scope.names[index].ProductID;
      $scope.username = $scope.names[index].Username;
      $scope.customerPO = $scope.names[index].CustomerPO;
      $scope.orderNum = $scope.names[index].OrderNum;
      $scope.part = $scope.names[index].Part;
     $scope.HoseType = $scope.names[index].HoseType;
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
     
     //var x = document.getElementById("hideLink");
     //alert("hide run");
    // if (x.style.display === "none") {
    //   x.style.display = "block";
      
    // }
    // } else {
    //   x.style.display = "none";
    // }

    //  $scope.hiddenButton = true;



       transferService.setHoseType($scope.HoseType);
       transferService.setUsername($scope.username);
       transferService.setProductID($scope.productID);

      

       $http.post("functions/getProductPic.php", {'hoseType':$scope.HoseType}).then(function(response){  
        $scope.productPic = response.data;
        //alert("comments displayed");
        var img = $scope.productPic[0].PicURL;
        $scope.img = "/functions/uploads/".concat(img);
        //alert($scope.img);
        
       });
     //  document.getElementById("goToProduct").style.visibility = visible;
      //  $scope.hiddenButton = $scope.hiddenButton = false;
      // $scope.init();

     //alert(transferService.getHoseType());
     //alert(transferService.getUsername());
     
  }

  $scope.nextScreen = function(index){
    transferService.setHoseType($scope.names[index].HoseType);
    transferService.setUsername($scope.names[index].Username);
    transferService.setProductID($scope.names[index].ProductID);
    alert(transferService.getUsername());
    $location.path('/product');
  }

  $scope.myFunction = function() {
    
  }

  $scope.getHoses = function(){
    $http.post("functions/getHoses.php").then(function(response){  
      $scope.hoses = response.data;
      alert(response.data);
    }); 
   }

});

