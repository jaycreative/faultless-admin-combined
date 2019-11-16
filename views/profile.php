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
  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand" href="#">Faultless Hoses</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#!dashboard">Dashboard<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="#!profile">Company Profile<span class="sr-only">(current)</span></a>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li> -->
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>

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
                <li class="active" name="personal_information" ng-click="name = 'personal_information'">Personal Information</li>
                <li class="" name="security" ng-click="name = 'security'">Password and Security</li>
                <li class="" name='photo' ng-click="name = 'photo'">Profile Photo</li>
                <li class="" name="location" ng-click="name = 'location'">Company Information/Location</li>
          		</ul>
	           </nav>
          </div>
          <!-- right-side -->
          <div class="col-9 my-col">
            <div class="tab-content">
              <!-- tab one -->
            <div ng-switch="name">

              <div class="tab-pane active text-style" id="tab1" ng-switch-when="personal_information">
                <div class="row my-row">
                  <div class="col-12 my-col">
                    <h3>Personal Information</h3>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>name:</b>
                  </div>
                  <div class="col-3 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="First Name" aria-label="firstname" id="FirstName" value={{names[0].FirstName}}>
                  </div>

                  <div class="col-3 my-col">
                    <input class="form-control mr-sm-4" type="text" placeholder="Last Name" aria-label="lastname" id=LastName value={{names[0].LastName}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Personal Contact:</b>
                  </div>
                  <div class="col-3 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="(   )" aria-label="telephone" id="PersonalPhone" value={{names[0].PersonalPhone}}>
                  </div>

                  <div class="col-1 my-col">
                    <b>Ext.</b>
                  </div>

                  <div class="col-2  my-col">
                    <input class="form-control mr-sm-4" type="text" placeholder="Ext." aria-label="extension" id="Ext" value={{names[0].Ext}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Email:</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="Email" aria-label="email" id="Email" value={{names[0].Email}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b># of Hoses:</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="0" aria-label="hosenum" value={{names[0].NumberOfHoses}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-8 my-col">
                    <hr>
                    <button type="button" class="btn btn-light">Cancel</button>
                    <button type="button" class="btn btn-primary" ng-click='updatePersonalInfo()'>Save</button>
                  </div>
                </div>
              </div>
              <!-- tab two -->
              <div class="tab-pane text-style" id="tab2" ng-switch-when="security">
                <h2>Reset Your Password</h2>
                <p>Put information regarding changing password here</p>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Username</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website">
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Current Password</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website">
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>New Password</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website">
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Re-type new Password</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website">
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-8 my-col">
                    <hr>
                    <button type="button" class="btn btn-light">Cancel</button>
                    <button type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>

                  

              </div>
              <!-- tab three -->
              <div class="tab-pane text-style" id="tab3" ng-switch-when="photo">
                <h2>Profile Photo</h2>
                <p>Insert new profile picture using the link below</p>
              </div>
              <!-- tab four -->
              <div class="tab-pane text-style" id="tab4" ng-switch-when="location">
                <h2>Company Information</h2>
                
                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Company name</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website" id="CompanyName" value={{names[0].CompanyName}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Branch Location</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website" id="Location" value={{names[0].Location}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Company Contact Number</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website" id="CompanyPhone" value={{names[0].CompanyPhone}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Website</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="www.example.com" aria-label="website" id="Website" value={{names[0].Website}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-2 my-col">
                    <b>Member Since</b>
                  </div>
                  <div class="col-6 my-col">
                    <input class="form-control mr-sm-2" type="text" placeholder="Date Joined" aria-label="website" id="DateJoined" value={{names[0].DateJoined}}>
                  </div>
                </div>

                <div class="row my-row">
                  <div class="col-8 my-col">
                    <hr>
                    <button type="button" class="btn btn-light">Cancel</button>
                    <button ng-click="updateCompanyInfo()" type="button" class="btn btn-primary">Save</button>
                  </div>
                </div>

              </div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="javascript/bootstrap.bundle.min.js"></script>
  <!-- </body>
</html> -->
