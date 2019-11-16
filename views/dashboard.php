<!-- <!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Admin UI</title>
       Bootstrap core CSS
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">
    </head>
  <body> -->
  <div ng-init="init()"></div>
  
    <header id="header">
      <div class="container my-container mt-5">
        <div class="row">
          <div class="col-12 my-col">
            <h1>My Dashboard</h1>
          </div>
        </div>
        <div class="row my-row">
          <div class="col-4 my-col dash-actions">
            <!-- <p> Find a Product by ID</p> -->
            <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
          </div>
          <div class="col-4 my-col dash-actions">
            <p> Find a Product Page</p>
            <a href="#!searchProduct"><button>Search</button></a>
            <p> Find a Company Page</p>
            <a href="#!searchCompany"><button>Search</button></a>
          </div>
          <div class="col-4 my-col dash-actions">
            <p>Add new Company</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">Add company</button>
            <p>Add new Product</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal2">Add product</button>
            <p>Add new Hose Type</p>
            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal3">Add hose</button>
          </div>
        </div>
        <!-- <div class="row my-row">
          <div class="col-12 my-col">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Recently Accessed
                      </button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Hose Type</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Tested By</th>
                            <th scope="col">Date of test</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr ng-repeat='a in names1'>
                            <th scope="row" id="{{$index}}" data-ng-click="goToProduct1($index)"><a ng-href='#!product'>{{a.ProductID}}</a></th>
                            <td>{{a.OrderNum}}</td>
                            <td>{{a.HoseType}}</td>
                            <td>{{a.CompanyName}}</td>
                            <td>{{a.TestedBy}}</td>
                            <td>{{a.testDate}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div> -->
        <div class="row my-row">
          <div class="col-12 my-col">
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Upcoming Inspections
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                <div class="card-body">
                  <table class="table">
                          <thead>
                          <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Customer PO</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Hose Type</th>
                            <th scope="col">CRN?</th>
                            <th scope="col">Tested By</th>
                            <th scope="col">Test date</th>
                            <th scope="col">Hose Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat='a in names2'>

                        <th scope="row" id="{{$index}}" data-ng-click="goToProduct2($index)"><a ng-href='#!product'>{{a.ProductID}}</a></th>
                            <td>{{a.CustomerPO}}</td>
                            <td>{{a.OrderNum}}</td>
                            <td>{{a.HoseType}}</td>
                            <td>{{a.CRN}}</td>
                            <td>{{a.TestedBy}}</td>
                            <td>{{a.testDate}}</td>
                            <td>{{a.InService}}</td>
                        </tr>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-row">
          <div class="col-12 my-col">
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Recently added Products
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse show" aria-labelledby="headingThree">
                <div class="card-body">
                  <table class="table">
                        <thead>
                            <tr>
                          <th scope="col">Product ID</th>
                          <th scope="col">Customer PO</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Hose Type</th>
                            <th scope="col">CRN?</th>
                            <th scope="col">Tested By</th>
                            <th scope="col">Date Added</th>
                            <th scope="col">Hose Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat='a in names3'>
                        <th scope="row" id="{{$index}}" data-ng-click="goToProduct3($index)"><a ng-href='#!product'>{{a.ProductID}}</a></th>
                        <td>{{a.CustomerPO}}</td>
                        <td>{{a.OrderNum}}</td>
                        <td>{{a.HoseType}}</td>
                        <td>{{a.CRN}}</td>
                        <td>{{a.TestedBy}}</td>
                        <td>{{a.creationDate}}</td>
                        <td>{{a.InService}}</td>
                        </tr>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row my-row">
          <div class="col-12 my-col">
              <div class="accordion" id="accordionExample">
                <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Upcoming Inspections
                      </button>
                    </h2>
                  </div>
                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne">
                    <div class="card-body">
                      <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Customer PO</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Hose Type</th>
                            <th scope="col">CRN?</th>
                            <th scope="col">Tested By</th>
                            <th scope="col">Date of test</th>
                            <th scope="col">Hose Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr ng-repeat='a in names4'>
                          <th scope="row" id="{{$index}}" data-ng-click="goToProduct4($index)"><a ng-href='#!product'>{{a.ProductID}}</a></th>
                          <td>{{a.CustomerPO}}</td>
                            <td>{{a.OrderNum}}</td>
                            <td>{{a.CompanyName}}</td>
                            <td>{{a.HoseType}}</td>
                            <td>{{a.CRN}}</td>
                            <td>{{a.TestedBy}}</td>
                            <td>{{a.testDate}}</td>
                            <td>{{a.InService}}</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="row my-row">
          <div class="col-12 my-col">
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h2 class="mb-0">
                      <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    Recently created Profiles
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo">
                <div class="card-body">
                  <table class="table">
                          <thead>
                          <tr>
                          <th scope="col">Username</th>
                            <th scope="col">Company name</th>
                            <th scope="col">Location</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Website</th>
                            <th scope="col">Mobile contact</th>
                            <th scope="col">Date Joined</th>
                
                          </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat='a in names5'>

                        <th scope="row" id="{{$index}}" data-ng-click="goToProfile($index)"><a ng-href='#!profile'>{{a.Username}}</a></th>
                        <td>{{a.CompanyName}}</td>
                            <td>{{a.Location}}</td>
                            <td>{{a.LastName}}, {{a.FirstName}}</td>
                            <td>{{a.Email}}</td>
                            <td>{{a.Website}}</td>
                            <td>{{a.PersonalPhone}}</td>
                            <td>{{a.DateJoined}}</td>
                         

                        </tr>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row my-row">
          <div class="col-12 my-col">
            <div class="card">
              <div class="card-header" id="headingThree">
                <h2 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Recently added Products
                  </button>
                </h2>
              </div>
              <div id="collapseThree" class="collapse show" aria-labelledby="headingThree">
                <div class="card-body">
                  <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">Product ID</th>
                            <th scope="col">Customer PO</th>
                            <th scope="col">Order Number</th>
                            <th scope="col">Company Name</th>
                            <th scope="col">Hose Type</th>
                            <th scope="col">CRN?</th>
                            <th scope="col">Tested By</th>
                            <th scope="col">Date of test</th>
                            <th scope="col">Hose Status</th>
                          </tr>
                        </thead>
                        <tbody>
                        <tr ng-repeat='a in names6'>
                        <th scope="row" id="{{$index}}" data-ng-click="goToProduct6($index)"><a ng-href='#!product'>{{a.ProductID}}</a></th>
                        <td>{{a.CustomerPO}}</td>
                            <td>{{a.OrderNum}}</td>
                            <td>{{a.CompanyName}}</td>
                            <td>{{a.HoseType}}</td>
                            <td>{{a.CRN}}</td>
                            <td>{{a.TestedBy}}</td>
                            <td>{{a.testDate}}</td>
                            <td>{{a.InService}}</td>
                        </tr>
                        </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      
      </header>
      <!-- Modal for Adding Company -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New Company</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form name="companyForm" action="functions/updateCompanyPic.php" target="hoseFrame" method="POST" enctype="multipart/form-data">
              <div class="row my-row">
                <div class="col-3 my-col">
                  <div class="picture-container">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
                        <input type="file" name="file2" id="file2" class="">
                        <button type="button" class="btn btn-primary" ng-click='addCompany()'>Add</button>
                        <button type="submit">Upload</button>
                        <input type="reset" value="Clear fields">
                    </div>
                      <b class="">Choose Picture</b>
                  </div>
                </div>
                <div class="col-9 my-col">
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Username</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" maxlength="50" type="text" placeholder="ex. ID12345" name="Username" aria-label="crnnumber" id='username'>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Company name</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="ex. Faultless Hoses" name="CompanyName" aria-label="licensenum" id='CompanyName'>
                    </div>
                    <div class="col-2 my-col">
                      <b>Location:</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="ex. 123 Faultless Cres." name="Location" aria-label="ordernum" id='location'>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>First name</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" name="firstName" aria-label="hosepressure" id='firstName'>
                    </div>
                    <div class="col-2 my-col">
                      <b>Last name</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" name="lastName" aria-label="temprange" id='lastName'>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Email</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="email" maxlength="50" placeholder="Ex. 123@email.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}" name="email" aria-label="testname" id='email'>
                    </div>
                    <div class="col-2 my-col">
                      <b>Phone number</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="13" pattern="\([0-9]{3}\)[0-9]{3}-[0-9]{4}" placeholder="(###)###-####" name="phone" aria-label="temprange" id='phoneNumber'>
                    </div>
                  </div>
                  <div class="col-2 my-col">
                      <b>Ext</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="5" placeholder="#####" name="ext" aria-label="temprange" id='Ext'>
                    </div>
                  </div>
                  <div class="col-2 my-col">
                      <b>Company phone number</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="13" pattern="\([0-9]{3}\)[0-9]{3}-[0-9]{4}" placeholder="(###)###-####" name="companyPhone" aria-label="temprange" id='CompanyNumber'>
                    </div>
                  </div>
                  <div class="row myrow">
                    <div class="col-2 my-col">
                      <b>Website</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="Ex. www.faultless.com" name="website" aria-label="temprange" id='website'>
                    </div>
                  </div>
                 
                  </div>
                </div>
                    <!-- <div class="col-5 my-col">
                      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div> -->
                  </div>
                </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-secondary">Add Another</button>
              <button type="button" class="btn btn-primary" ng-click='addCompany()'>Add company</button> -->
            </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal for Adding product -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New Product</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form>
            <div class="modal-body">
              <div class="row my-row">
                <!-- <div class="col-3 my-col">
                  <h3>content</h3>
                </div> -->
                <div class="col-12 my-col">
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Product ID</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="Ex. PR123456" aria-label="crnnumber" id='productID' required>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Username</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="ex. Username123" aria-label="licensenum" id='PRusername' required>
                    </div>
                    <div class="col-2 my-col">
                      <b>Customer PO</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="ex. 1234" aria-label="ordernum" id='customerPO' required>
                    </div>
                  </div>
                  <!-- <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>CRN:</b>
                    </div>
                    <div class="col-10 my-col">
                      <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>Choose one:</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                  </div> -->
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Order number</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="ex. 1234" aria-label="hosepressure" id='orderNum' required>
                    </div>
                    <div class="col-2 my-col">
                      <b>Part</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" maxlength="50" type="text" placeholder="Part here..." aria-label="temprange" id='part' required>
                    </div>
                  </div>
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Fittings</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" maxlength="50" placeholder="Fittings here..." type="text" aria-label="testname" id='fittings' required>
                    </div>
                  </div>
                  <div class="row my-row">
                  <div class="col-2 my-col">
                      <b>Test date</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="date" placeholder="yyyy-mm-dd" aria-label="temprange" id='testDate' min="2000-01-01" max="2099-12-31" required>
                    </div>
                  <div class="col-2 my-col">
                      <b>Tester</b>
                    </div>
                    <div class="col-4 my-col">
                      <select class="form-control mr-sm-2" placeholder="Select value" aria-label="temprange" id='testedBy' required>
                      <option value="na">Select tester</option>
                      <option value="Brian Williams">Brian Williams</option>
                      <option value="Bruce Williams">Bruce Williams</option>
                      <option value="Derek Williams">Derek Williams</option>
                      <!-- NEed to get other values -->
                      </select>
                    </div>
                    </div>
<div class="row my-row">
                  <div class="col-2 my-col">
                      <b>Hose Type</b>
                    </div>
                    <div class="col-4 my-col">
                      <select class="form-control mr-sm-2" aria-label="temprange" id='type' required>
                      <option value="na">Select hose</option>
                      <option ng-repeat="hose in hoses" value="{{hose[0]}}">{{hose[0]}}</option>
                      
                      </select>
                    </div>
                  <div class="col-2 my-col">
                      <b>Pressure</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2"  type="text" maxlength="5" min="0" max="99999" placeholder="0-99,999 PSI" aria-label="temprange" id='pressure' required>
                    </div>
</div>
<div class="row my-row">
                  <div class="col-2 my-col">
                      <b>Diameter</b>
                    </div>
                    <div class="col-4 my-col">
                    <!--find out if this is appropriate range -->
                      <input class="form-control mr-sm-2" type="text" maxlength="5" step="0.01" min="0" max="99" placeholder="0-99.99 inches" aria-label="temprange" id='diameter' required>
                    </div>
                  <div class="col-2 my-col">
                      <b>Length</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="text" min="0" max="999" maxlength="6" step="0.01" placeholder="0-999.99 feet" aria-label="temprange" id='length' required>
                    </div>
</div>
<div class="row my-row">
                  <div class="col-2 my-col">
                      <b>Temperature</b>
                    </div>
                    <div class="col-4 my-col">
                    <!-- confirm range -->
                      <input class="form-control mr-sm-2" type="text" step="0.01" min="-500" max="500" maxlength="7" placeholder="-500.00-500.00 degrees fahrenheit" aria-label="temprange" id='temperature' required>
                    </div>
                  <div class="col-2 my-col">
                      <b>Is this a CRN hose?</b>
                    </div>
                    <div class="col-4 my-col">
                      <input class="form-control mr-sm-2" type="radio" aria-label="temprange" name="crn" id='CRNyes' value="Yes" required>Yes<br>
                      <input class="form-control mr-sm-2" type="radio" aria-label="temprange" name="crn" id='CRNno' value="No" required>No<br>
                    </div>
</div>
<div class="row my-row">
                  <div class="col-2 my-col">
                      <b>Hose status</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="radio" aria-label="temprange" name="status" id='statusYes' value="In Service" required>In Service<br>
                      <input class="form-control mr-sm-2" type="radio" aria-label="temprange" name="status" id='statusNo' value="Out of Service" required>Out of Service<br>
                    </div>
</div>
                    <!-- <div class="col-5 my-col">
                      <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
                    </div> -->
                  </div>
                </div>
              </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary">Add Another</button>
              <button type="button" class="btn btn-primary" ng-click='addProduct()'>Add hose</button>
              <input type="reset" value="Clear fields">
            </div>
          </div>
          </form>
        </div>
      </div>
      <!-- Modal for Adding new Hose Type -->
      <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Add New Hose</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form name="hoseForm" action="functions/upload.php" target="hoseFrame" method="POST" enctype="multipart/form-data">
                        
              <div class="row my-row">
                <div class="col-3 my-col">
                  <div class="picture-container">
                    <div class="picture">
                        <img src="https://lh3.googleusercontent.com/LfmMVU71g-HKXTCP_QWlDOemmWg4Dn1rJjxeEsZKMNaQprgunDTtEuzmcwUBgupKQVTuP0vczT9bH32ywaF7h68mF-osUSBAeM6MxyhvJhG6HKZMTYjgEv3WkWCfLB7czfODidNQPdja99HMb4qhCY1uFS8X0OQOVGeuhdHy8ln7eyr-6MnkCcy64wl6S_S6ep9j7aJIIopZ9wxk7Iqm-gFjmBtg6KJVkBD0IA6BnS-XlIVpbqL5LYi62elCrbDgiaD6Oe8uluucbYeL1i9kgr4c1b_NBSNe6zFwj7vrju4Zdbax-GPHmiuirf2h86eKdRl7A5h8PXGrCDNIYMID-J7_KuHKqaM-I7W5yI00QDpG9x5q5xOQMgCy1bbu3St1paqt9KHrvNS_SCx-QJgBTOIWW6T0DHVlvV_9YF5UZpN7aV5a79xvN1Gdrc7spvSs82v6gta8AJHCgzNSWQw5QUR8EN_-cTPF6S-vifLa2KtRdRAV7q-CQvhMrbBCaEYY73bQcPZFd9XE7HIbHXwXYA=s200-no" class="picture-src" id="wizardPicturePreview" title="">
                        <!-- <form action="/functions/upload.php" target="_blank" method="POST" enctype="multipart/form-data"> -->
                        <input type="file" name="file1" id="file1" class="">
    
                        <button type="button" class="btn btn-primary" ng-click='addHose()'>Add Hose</button>
                        <input type="reset" value="Clear Fields">
                        <!-- </form> -->
                        
                    </div>
                      <b class="">Choose Picture</b>
                  </div>
                </div>
                <div class="col-9 my-col">
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>New hose type:</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" name="hoseType" maxlength="50" type="text" placeholder="Hose name..." aria-label="crnnumber" id='newHose' title="required" required>
                    </div>
                  </div>
          
                  <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Description:</b>
                    </div>
                    <div class="col-10 my-col">
                      <textarea rows="6" cols="50" maxlength="350" class="form-control mr-sm-2" name="description" id='description' placeholder="Description..." title="required" required></textarea>
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-secondary">Add Another</button> -->
              <!-- <button type="button" class="btn btn-primary" ng-click='addHose()'>Add</button> -->
              <!-- <button type="submit" name="submit" ng-click="addHose()">ADD</button> -->
                       
            </div>
            </form>
          </div>
        </div>
      </div>

      <iframe name="hoseFrame" style="display:none"></iframe>

  <!--  add php opening tag   
  
if(isset($_POST['submit'])){
    $file = $_FILES['file'];
    echo($file);
   //print_r($file);
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
   // $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));
    // print_r($file);
    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0) {
                if($fileSize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $img = $fileNameNew;
                    
                    $fileDestination = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                   // header("Location: index.php?uploadsuccess");
                } else {
                    echo "Your file is too big!";
                }
        } else {
            echo "There was an error uploading your file!";
        }

    } else {
        echo "You cannot upload files of this type!";
    }
//}


?> -->




      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      <script src="javascript/bootstrap.bundle.min.js"></script>
  <!-- </body>
</html>  -->