app.controller('searchCompanyController', function($scope, $http, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "This is the next line";
  //$scope.id = 'D432223';

  $scope.searchCompany = function() {  
     var CompanyName = document.getElementById('CompanyName').value; 
     var Username = document.getElementById('Username').value; 
     var Location = document.getElementById('Location').value;  
     var FirstName = document.getElementById('FirstName').value;
     var LastName = document.getElementById('LastName').value; 
     var Email = document.getElementById('Email').value; 
     var PersonalPhone = document.getElementById('PersonalPhone').value; 
     var Ext = document.getElementById('Ext').value; 
     var CompanyPhone = document.getElementById('CompanyPhone').value;  
     var NumberOfHoses = document.getElementById('NumberOfHoses').value;
     var Website = document.getElementById('Website').value; 
     var DateJoined = document.getElementById('DateJoined').value; 

    if (CompanyName == ""){CompanyName = "%"};
    if (Username == ""){Username = "%"};
    if (Location == ""){Location = "%"};
    if (FirstName == ""){FirstName = "%"};
    if (LastName == ""){LastName = "%"};
    if (Email == ""){Email = "%"};
    if (PersonalPhone == ""){PersonalPhone = "%"};
    if (Ext == ""){Ext = "%"};
    if (CompanyPhone == ""){CompanyPhone = "%"};
    if (NumberOfHoses == ""){NumberOfHoses = "%"};
    if (Website == ""){Website = "%"};
    if (DateJoined == ""){DateJoined = "%"};

     $http.post("functions/searchCompany.php", {'CompanyName':CompanyName, 'Username':Username, 'Location':Location, 'FirstName':FirstName, 'LastName':LastName, 'Email':Email, 'PersonalPhone':PersonalPhone, 'Ext':Ext, 'CompanyPhone':CompanyPhone, 'NumberOfHoses':NumberOfHoses, 'Website':Website, 'DateJoined':DateJoined}).then(function(response){  
         
        $scope.names = response.data;
        alert($scope.names);  }
        
      );  
  };

  $scope.details = function(index){
    $scope.CompanyName = $scope.names[index].CompanyName
     $scope.Username = $scope.names[index].Username
     $scope.Location = $scope.names[index].Location
     $scope.FirstName = $scope.names[index].FirstName
     $scope.LastName = $scope.names[index].LastName
     $scope.Email = $scope.names[index].Email
     $scope.PersonalPhone = $scope.names[index].PersonalPhone
     $scope.Ext = $scope.names[index].Ext
     $scope.CompanyPhone = $scope.names[index].CompanyPhone
     $scope.NumberOfHoses = $scope.names[index].NumberOfHoses
     $scope.Website = $scope.names[index].Website
     $scope.DateJoined = $scope.names[index].DateJoined

     transferService.setUsername($scope.Username);
    //alert($scope.names[0]);
  }

});

