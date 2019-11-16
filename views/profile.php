<!-- <!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <title>Admin UI</title>

    
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <link href="css/styles.css" rel="stylesheet">
    </head>

  <body> -->
    <div ng-init="init()"></div>

    <header id="header">
      <div class="container my-container mt-5">
        <div class="row">
          <div class="col-12 my-col">
            <h1>{{names[0].FirstName}} {{names[0].LastName}}</h1>
          </div>
        </div>
        <!-- container for details/profile container -->
        <div class="row details-table-container-vh">
          <div class="col-3 my-col">
            <nav class="nav-sidebar">
          		<ul class="nav tabs">
                <li class="active" name="personal_information" ng-click="name = 'personal_information'">Personal Information</li><br/>
                <li class="" name="security" ng-click="name = 'security'">Change password information</li><br/>
                <li class="" name='photo' ng-click="name = 'photo'">Profile Photo</li><br/>
                <li class="" name="location" ng-click="name = 'location'">Company Information/Location</li><br/>
          		</ul>
	          </nav>
          </div>
          <!-- right-side -->
          <div class="col-9 my-col">
            <div class="tab-content">
              <!-- tab one -->
            <form name="addPic" action="/functions/uploadProfilePic.php"  target="picFrame" method="POST" enctype="multipart/form-data">
            <div ng-switch="name">

              <div class="tab-pane active text-style" id="tab1" ng-switch-default="personal_information">
                <div class="row my-row">
                  <div class="col-12 my-col">
                    <h3>Personal Information</h3>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Name</b>
                  </div>
                  <div class="col-3 my-col">
                    <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="First name..." aria-label="firstname" id="FirstName" value={{names[0].FirstName}} readOnly>
                  </div>

                  <div class="col-3 my-col">
                    <input class="form-control mr-sm-4" type="text" maxlength="50" placeholder="Last name..." aria-label="lastname" id=LastName value={{names[0].LastName}} readOnly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Mobile contact</b>
                  </div>
                  <div class="col-3 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="(###)###-####" maxlength="13" aria-label="telephone" id="PersonalPhone" pattern="\([0-9]{3}\)[0-9]{3}-[0-9]{4}" value={{names[0].PersonalPhone}} readOnly>
                  </div>

                  <div class="col-1 my-col">
                    <b>Ext</b>
                  </div>

                  <div class="col-2  my-col">
                    <input class="form-control mr-sm-4" type="text" placeholder="#####" maxlength="5" aria-label="extension" id="Ext" value={{names[0].Ext}} readOnly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Email</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="Ex. 123@email.com" maxlength="50" aria-label="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" id="Email" value={{names[0].Email}} readOnly>
                  </div>
                </div>

                <!-- <div class="row my-row">
                  <div class="col-2 my-col">
                    <b># of Hoses:</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="0" aria-label="hosenum" id="hose#" value={{names[0].NumberOfHoses}} readOnly>
                  </div>
                </div> -->

                <div class="row my-row">
                  <div class="col-8 my-col">
                    <hr>
                    <button type="button" class="btn btn-light" id="toggle1" ng-click="toggle1(toggle1)">Edit Mode ON/OFF</button>
                    <button type="button" class="btn btn-primary" ng-click='updatePersonalInfo()'>Save</button>
                  </div>
                </div>
              </div>
              <!-- tab two -->
              <!-- <form action="/functions/uploadProfilePic.php" target="_blank" method="POST" enctype="multipart/form-data"> -->
                 
              <div class="tab-pane text-style" id="tab2" ng-switch-when="security">
                <h2>Reset Your Password</h2>
                <p>Put information regarding changing password here</p>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Username</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website" value={{pw[0].Username}} id="UserID" name="UserID" readonly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Current password</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="password" maxlength="20" placeholder="....." aria-label="website" id="pw" readOnly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>New password</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="password" maxlength="20" placeholder="....." aria-label="website" id="newpw" readOnly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Re-type new password</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="password" maxlength="20" placeholder="....." aria-label="website" id="newpw2" readOnly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-8 my-col">
                    <hr>
                    <button type="button" class="btn btn-light" id="toggle2" ng-click="toggle1(toggle2)">Edit Mode ON/OFF</button>
                    <button type="button" class="btn btn-primary" ng-click="updatePassword()">Save</button>
                  </div>
                </div>

                  

              </div>
              <!-- tab three -->
              <div class="tab-pane text-style" id="tab3" ng-switch-when="photo">
                <h2>Profile Photo</h2>
                <p>Change profile picture using the link below</p>
                <img ng-src="{{img}}" class="img-responsive">
                
                  <!-- <form action="/functions/upload.php" target="_blank" method="POST" enctype="multipart/form-data"> -->
                       <input type="hidden" id="pic" name="pic" value="{{pw[0].Username}}">
                        <input type="file" name="file" id="file" class="">
                        <button  type="submit" ng-click="uploadPic()">Submit</button>
                        <input type="reset" value="Clear field">
                  <!-- </form> -->
              </div>
              <!-- </form> -->
              <!-- tab four -->
              <div class="tab-pane text-style" id="tab4" ng-switch-when="location">
                <h2>Company Information</h2>
                
                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Company name</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website" id="CompanyName" value={{names[0].CompanyName}} readOnly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Branch location</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website" id="Location" value={{names[0].Location}} readOnly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Company contact number</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" maxlength="14" placeholder="(###)###-####" aria-label="website" pattern="\([0-9]{3}\)[0-9]{3}-[0-9]{4}" id="CompanyPhone" value={{names[0].CompanyPhone}} readOnly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Website</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text"  maxlength="50" placeholder="Ex. www.Faultless.com" aria-label="website" id="Website" value={{names[0].Website}} readOnly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Member since</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="date" placeholder="Date Joined" aria-label="website" id="DateJoined" value={{names[0].DateJoined}} readOnly>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-8 my-col">
                    <hr>
                    <button type="button" class="btn btn-light" id="toggle3" ng-click="toggle1(toggle3)">Edit Mode ON/OFF</button>
                    <button ng-click="updateCompanyInfo()" type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>

              </div>
            </div>
            </div>
            </form>
          </div>
        </div>
      </div>
      <iframe name="picFrame" style="display:none"></iframe>
    </header>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="javascript/bootstrap.bundle.min.js"></script>
  <!-- </body>
</html> -->
