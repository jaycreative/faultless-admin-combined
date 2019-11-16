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
        <li class="nav-item active">
          <a class="nav-link" href="#!product">Temp link to Product screen<span class="sr-only">(current)</span></a>
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

  <nav class="nav-panel">
    <ul class="nav tabs">
      <li class="active" name="details" ng-click="name = 'details'">Details</li>
      <li class="" name="filters" ng-click="name = 'filters'">Filters</li>
    </ul>
   </nav>

    <header id="header">
      <div class="container my-container mt-5">
        <div class="row my-row table-container-vh">
          <div class="col-9 my-col">

            <div class="row my-row">
              <div class="col-9 my-col">
                <h1>Company Search</h1>
              </div>

              <div class="col-3 my-col">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
              </div>
            </div>

            <table class="table">
              <thead>
               <tr>
                  <th scope="col">Company name</th>
                  <th scope="col">Company Location</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col">Website</th>
                  <th scope="col">Contact Number</th>
                </tr>
              </thead>
              <tbody>

                <tr ng-repeat="a in names">
                            <th scope="row" id="{{$index}}" data-ng-click="details($index)">{{a.CompanyName}}</th>
                            <td>{{a.Location}}</td>
                            <td>{{a.LastName}}</td>
                            <td>{{a.Email}}</td>
                            <td>{{a.Website}}</td>
                            <td>{{a.PersonalPhone}}</td>
                </tr>
      
              </tbody>
            </table>
          </div>

          <div class="col-3 my-col sidebar">
            <div class="tab-content">

            <div ng-switch="name">

              <div class="tab-pane active text-style" id="tab1" ng-switch-when="details">
                <div class="tab-pane active text-style" id="tab1">
                  <h1> Details </h1>
                  <a href="#"><img src="https://via.placeholder.com/250"></a>
                  <h3 class ="product-id">{{CompanyName}}</h3>
                  <ul>
                    <li>{{Username}}</li>
                    <li>{{Location}}</li>
                    <li>{{FirstName}}</li>
                    <li>{{LastName}}</li>
                    <li>{{Email}}</li>
                    <li>{{PersonalPhone}}</li>
                    <li>{{Ext}}</li>
                    <li>{{CompanyPhone}}</li>
                    <li>{{NumberOfHoses}}</li>
                    <li>{{Website}}</li>
                    <li>{{DateJoined}}</li>
                    <li><button type="button" class="btn btn-secondary"><a ng-href='#!profile'>To go profile</a></button></li>
 
                  </ul>
                </div>
              </div>

              <div class="tab-pane text-style" id="tab2" ng-switch-when="filters">
                <h1>filters</h2>
                  <div class="filter-queries">

                  
                    <!-- <div class="row my-row">
                      <div class="col-4 my-col">
                        <b>CRN:</b>
                      </div>

                    <div class="col-8 my-col">
                      <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>N/A</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div> 
                    </div> -->

                    <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Company Name</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="name" id="CompanyName">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>UserName:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="name" id="Username">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Location:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="productid" id="Location">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>First name:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="customerpo" id="FirstName">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Last name:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="ordernum" id="LastName">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Email</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="ordernum" id="Email">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Personal Phone number:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="ordernum" id="PersonalPhone">
                    </div>

                    <!-- <div class="col-8 my-col">
                      <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>N/A</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div> -->
                  </div>
                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Ext</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="ordernum" id="Ext">
                    </div>

                    <!-- <div class="col-8 my-col">
                      <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>N/A</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div> -->
                  </div>
                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Company Phone number:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="tested" id="CompanyPhone">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b># of Hoses</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="tested" id="NumberOfHoses">
                    </div>
                    <!-- <div class="col-8 my-col">
                      <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>N/A</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div> -->
                    
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Website:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="hoselength" id="Website">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Date Joined:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" placeholder="Enter terms to search for" aria-label="orderdia" id="DateJoined">
                    </div>
                  </div>

                  <div class="row my-row">

                    <div class="col-8 my-col">
                      <button type="button" class="btn btn-secondary" ng-click='searchCompany()'>Search</button>
                    </div>
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
