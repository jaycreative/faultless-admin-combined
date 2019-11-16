app.controller('ProfileController', function($scope, $http, $location, transferService) {
  $scope.title= "This is the main screen of the App try this";
  $scope.next= "image";
 // $scope.img = "/functions/uploads/mark7_hose.jpg";

  $scope.init = function(){
    // alert("re initialize everything");
    // alert($scope.names);
    //$scope.id = id;
    $http.post("functions/selectProfile.php", {'id':transferService.getUsername()}).then(function(response){   
      $scope.names = response.data;
     
       var x = $scope.names[0].Pic;
       $scope.img = "/functions/uploads/".concat(x) + '?' + new Date().getTime();
      // alert($scope.img);
    });

    // var x = names[0].Pic;
    // $scope.img = "/functions/uploads/".concat(x);
    // alert($scope.img);

    $http.post("functions/selectPassword.php", {'id':transferService.getUsername()}).then(function(response){  
      $scope.pw = response.data;
    // alert($scope.pw);
    });

      // var f = document.forms['toggle'];
      // for(var i=0,fLen=f.length;i<fLen;i++){
      //     f.elements[i].readOnly = true;
      //   }
      //   //f.elements[i].readOnly = true;
  
  };

//need to include function to get # of hoses owned
//Need to also fix the problem with the new tabs opening up new sections

  $scope.updatePersonalInfo = function(){
    var FirstName = document.getElementById('FirstName').value; //
    var LastName = document.getElementById('LastName').value; //
    var PersonalPhone = document.getElementById('PersonalPhone').value;  //
    var Ext = document.getElementById('Ext').value;
    var Email = document.getElementById('Email').value;

    var phonePattern = new RegExp(document.getElementById("PersonalPhone").getAttribute("pattern"));
    var emailPattern = new RegExp(document.getElementById("Email").getAttribute("pattern"));

    var msg = "";
      //check if Ext is a number of 5 digits
  if(Ext > 99999 || Ext < 0 || isNaN(Ext)){
    if(!Ext == ""){
   // alert("Ext must contain only digits (0-99999)");
   // return;
   msg = msg.concat("Ext must contain only digits (0-99999)\n");
    }
  }

  //check if phone number matches pattern
   if(PersonalPhone != ""){
     if(!phonePattern.test(PersonalPhone)){
      // alert("Mobile phone number is invalid.  Please enter a valid phone number");
      // return;
      msg = msg.concat("Mobile phone number is invalid.  Please enter a valid phone number\n");
     }
   }

    //check if email matches pattern
    if(Email != ""){
      if(!emailPattern.test(Email)){
      //  alert("Email is invalid.  Please enter a valid email address");
      //  return;
      msg = msg.concat("Email is invalid.  Please enter a valid email address\n");
      }
    }

    if(msg != ""){
      alert(msg);
      return;
    }


    $http.post("functions/UpdatePersonal.php", {'id':transferService.getUsername(), 'FirstName':FirstName, 'LastName':LastName, 'PersonalPhone':PersonalPhone, 'Ext':Ext, 'Email':Email}).then(function(response){  
      $scope.names = response.data;
     //alert($scope.names);
     alert("Personal information section has been updated!");

     $scope.init();
     //alert("init works!");

    })

  };

  $scope.uploadPic = function() {
    var allowed = ['jpg', 'jpeg', 'png'];
    var username = document.getElementById('pic').value;

    if(document.getElementById("file").files.length == 0) {
      alert("File not selected.  Please select file before uploading");
    } else {

      var fileName = document.getElementById("file").files[0].name;
      var fileSize = document.getElementById("file").files[0].size;

      if(fileSize > 1000000){
        alert("File is too big!");
        return;
      }
  
      var ext2 = fileName.split('.');
      var ext = ext2[ext2.length-1].toLowerCase();
      img = "Profile_".concat(username,".", ext);
  
      if(!allowed.includes(ext)){
        alert("Sorry, that type of file is not accepted.  Please enter jpg, jpeg, or png files only!");
        return;
      }

      //upload pic now
      alert(img);
      document.addPic.submit();
      alert("Profile pic uploaded successfully!  You will see changes the next time you login");

    }

  }



  
  //updateCompany php needs to be updates, currently the username is fixed
  $scope.updateCompanyInfo = function(){
    var username = transferService.getUsername();
    var CompanyName = document.getElementById('CompanyName').value; //
    var Location = document.getElementById('Location').value; //
    var CompanyPhone = document.getElementById('CompanyPhone').value;  //
    var Website = document.getElementById('Website').value;
    var DateJoined = document.getElementById('DateJoined').value;

    var phonePattern = new RegExp(document.getElementById("CompanyPhone").getAttribute("pattern"));

    var msg = "";

      //check if phone number matches pattern
   if(CompanyPhone != ""){
    if(!phonePattern.test(CompanyPhone)){
      alert("Company Phone number is invalid.  Please enter a valid Company phone number");
      return;
    }
  }

    $http.post("functions/updateCompany.php", {'Username':username, 'CompanyName':CompanyName, 'Location':Location, 'CompanyPhone':CompanyPhone, 'Website':Website, 'DateJoined':DateJoined}).then(function(response){  
      $scope.names = response.data;
      alert("Company information section has been updated!");
    // alert($scope.names);

    $scope.init();

    })
  };

  $scope.updatePic = function(){
    var username = transferService.getUsername();

    
    var ext = document.getElementById("file").value;
    var ext2 = ext.split('.');
    //alert(ext2);
    var ext3 = ext2[ext2.length-1].toLowerCase();
    var pic ="";
    //alert(ext3);
    //var ext3 = strtolower(end(ext2));
    
    var pic = pic.concat("Profile_", username, ".", ext3,); //

    //create profile name, profile_ID433323
   // var pic = document.getElementById('file').value; 

    $http.post("functions/updateProfilePic.php", {'Username':username, 'Pic':pic}).then(function(response){  
      $scope.pic = response.data;
    // alert($scope.names);
      alert("New profile pic uploaded! Please sign out and sign back in to see changes.");

    $scope.init();

    })
  };

  $scope.updatePassword = function(){
    var pw = document.getElementById('pw').value;
    var newpw = document.getElementById('newpw').value;
    var newpw2 = document.getElementById('newpw2').value;

    if (newpw == "" || newpw2 == "" || pw.length == ""){
      alert("Password fields cannot be blank. Please fill in all password fields");
      return;
    }

    if(pw == $scope.pw[0].Pass_word && newpw == newpw2) {

      $http.post("functions/updatepw.php", {'username':$scope.pw[0].Username, 'password':newpw}).then(function(response){  
        $scope.info2 = response.data;

        alert("Password Changed! Please sign back in");
        transferService.signOut();
        $location.path('/dashboard');
  
      });
      
     
      //if this works, you need to update the Password and navigate back to the login screen
    } else {
      alert("Eithor the current password entered does not match records, or new passwords do not match each other.  Please try again");
    }

    
  };

  $scope.toggle1 = function(name) {
     // alert("works");
    //  var elem = document.getElementById(name);
    //  if (elem.value=="Edit Mode OFF") elem.value = "Edit Mode ON";
    //  else elem.value = "Edit Mode OFF";

      var f = document.forms['addPic'];
      //var x = document.getElementByID("UserID");
      for(var i=0,fLen=f.length;i<fLen;i++){
        if (f.elements[i].readOnly && f.elements[i].id != "UserID" && f.elements[i].id != "CompanyName" && f.elements[i].id != "Location" && f.elements[i].id != "DateJoined"){
          f.elements[i].readOnly = false;
          //alert(f.elements[i].id);
        } else {
          f.elements[i].readOnly = true;
        }
        //f.elements[i].readOnly = true;
      }

    }

});

