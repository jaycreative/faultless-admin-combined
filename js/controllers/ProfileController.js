app.controller('ProfileController', function($scope, $http, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";

  $scope.init = function(){
    //$scope.id = id;
    $http.post("functions/selectProfile.php", {'id':transferService.getUsername()}).then(function(response){  
      $scope.names = response.data;
     //alert($scope.names);
    })};

//need to include function to get # of hoses owned
//Need to also fix the problem with the new tabs opening up new sections

  $scope.updatePersonalInfo = function(){
    var FirstName = document.getElementById('FirstName').value; //
    var LastName = document.getElementById('LastName').value; //
    var PersonalPhone = document.getElementById('PersonalPhone').value;  //
    var Ext = document.getElementById('Ext').value;
    var Email = document.getElementById('Email').value;

    $http.post("functions/UpdatePersonal.php", {'FirstName':FirstName, 'LastName':LastName, 'PersonalPhone':PersonalPhone, 'Ext':Ext, 'Email':Email}).then(function(response){  
      $scope.names = response.data;
     alert($scope.names);
    })

  };
  
  $scope.updateCompanyInfo = function(){
    var CompanyName = document.getElementById('CompanyName').value; //
    var Location = document.getElementById('Location').value; //
    var CompanyPhone = document.getElementById('CompanyPhone').value;  //
    var Website = document.getElementById('Website').value;
    var DateJoined = document.getElementById('DateJoined').value;

    $http.post("functions/updateCompany.php", {'CompanyName':CompanyName, 'Location':Location, 'CompanyPhone':CompanyPhone, 'Website':Website, 'DateJoined':DateJoined}).then(function(response){  
      $scope.names = response.data;
     alert($scope.names);

    })
  };

});

