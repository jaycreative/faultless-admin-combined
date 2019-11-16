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
  <nav class="nav-panel">
    <ul class="nav tabs">
      <li class="active" name="details" ng-click="name = 'deet'">Details</li>
      <li class="" name="filters" ng-click="name = 'filters'">Filters</li>
    </ul>
   </nav>

    <header id="header">
      <div class="container my-container mt-5">
        <div class="row my-row table-container-vh">
          <div class="col-9 my-col">

            <div class="row my-row">
              <div class="col-9 my-col">
                <h1>Product Search</h1>
              </div>

              <div class="col-3 my-col">
                <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
              </div>
            </div>

            <table class="table">
              <thead>
               <tr>
                  <th scope="col">Product ID</th>
                  <th scope="col">Order number</th>
                  <th scope="col">Hose type</th>
                  <th scope="col">Company name</th>
                  <th scope="col">Tested by</th>
                  <th scope="col">Test date</th>
                  <th scope="col">Product Link</th>
                </tr>
              </thead>
              <tbody>

                <tr ng-repeat="a in names">
                            <th  scope="row" id="{{$index}}" ng-click="details($index)">{{a.ProductID}}</th>
                            <td>{{a.OrderNum}}</td>
                            <td>{{a.HoseType}}</td>
                            <td>{{a.CompanyName}}</td>
                            <td>{{a.TestedBy}}</td>
                            <td>{{a.testDate}}</td>
                            <td><button type="button" class="btn btn-secondary" data-ng-click="nextScreen($index)">Go to product</button></td>
                           
                </tr>
      
              </tbody>
            </table>
          </div>

          <div class="col-3 my-col sidebar">
            <div class="tab-content">

            <div ng-switch="name">

              <div class="tab-pane active text-style" id="tab1" ng-switch-when="deet">
                <div class="tab-pane active text-style" id="tab1">
                  <h1>Details</h1>
                  <img ng-src="{{img}}" src="https://via.placeholder.com/250">
                  <h3 class ="product-id">Product ID: {{productID}}</h3>
                  <ul>
                    <li>Username: {{username}}</li>
                    <li>Customer PO: {{customerPO}}</li>
                    <li>Order Num: {{orderNum}}</li>
                    <li>Part: {{part}}</li>
                    <li>Fittings: {{fittings}}</li>
                    <li>Hose type: {{hoseType}}</li>
                    <li>Diameter: {{diameter}}</li>
                    <li>Length: {{length}}</li>
                    <li>Pressure: {{pressure}}</li>
                    <li>Temperature: {{temp}}</li>
                    <li>CRN? {{crn}}</li>
                    <li>Hose Status: {{inService}}</li>
                    <li>Last Test Date: {{testDate}}</li>
                    <li>Tester: {{testedBy}}</li>


                    
                  </ul>
                </div>
              </div>

              <div class="tab-pane text-style" id="tab2" ng-switch-default="filters">
                <h1>Filters</h2>
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
                      <b>Product ID</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="Ex. PR123456" aria-label="productid" id="ProductID">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Username</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="Ex. ID12345" aria-label="name" id="Username">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Customer PO</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="Ex. 1234" aria-label="customerpo" id="CustomerPO">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Order number</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="Ex. 1234" aria-label="customerpo" id="OrderNum">
                    </div>
                  </div>
<!--           -----------------------------------------------------------------------------------------------------         -->

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Part:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="Part here..." aria-label="orderdia" id="Part">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Fittings:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="Fittings here..." aria-label="orderdia" id="Fittings">
                    </div>
                  </div>

                
                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Hose type</b>
                    </div>

                    <div class="col-8 my-col">
                      <select class="form-control mr-sm-2" placeholder="Enter terms to search for" aria-label="tested" id="HoseType">
                        <option value="na">Select hose</option>
                        <option ng-repeat="hose in hoses" value="{{hose[0]}}">{{hose[0]}}</option>
                      </select>
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Diameter from:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="5" placeholder="0-99.99 inches" aria-label="orderdia" id="fromDiameter">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Diameter to:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="5" placeholder="0-99.99 inches" aria-label="orderdia" id="toDiameter">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Length from</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="6" placeholder="0-999.99 feet" aria-label="orderdia" id="fromLength">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Length to:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="6" placeholder="0-999.99 feet" aria-label="orderdia" id="toLength">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>pressure from</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="5" placeholder="0-99,999 PSI" aria-label="orderdia" id="fromPressure">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>pressure to</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="5" placeholder="0-99,999 PSI" aria-label="orderdia" id="toPressure">
                    </div>
                  </div>
                    
                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Temperature from</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="7" placeholder="-500.00 - 500.00 degrees fahrenheit" aria-label="orderdia" id="fromTemp">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Temperature to</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="7" placeholder="-500.00 - 500.00 degrees fahrenheit" aria-label="orderdia" id="toTemp">
                    </div>
                  </div>

<!---------------------------------------------------------------------------------------         -->

 
                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>CRN hose?</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="radio" aria-label="temprange" name="status" id='statusYes' value="1" required>In Service<br>
                      <input class="form-control mr-sm-2" type="radio" aria-label="temprange" name="status" id='statusNo' value="0" required>Out of Service<br>
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Hose status:</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="radio" aria-label="temprange" name="crn" id='CRNyes' value="1" required>Yes<br>
                      <input class="form-control mr-sm-2" type="radio" aria-label="temprange" name="crn" id='CRNno' value="0" required>No<br>
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Tested by</b>
                    </div>

                    <div class="col-8 my-col">
                      <select class="form-control mr-sm-2" placeholder="Enter terms to search for" aria-label="tested" id="TestedBy">
                      <option value="na">Select tester</option>
                      <option value="Brian Williams">Brian Williams</option>
                      <option value="Bruce Williams">Bruce Williams</option>
                      <option value="Derek Williams">Derek Williams</option>
                      </select>
                    </div>
                  </div>


                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Test date from</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="date" min="2000-01-01" max="2099-12-31" placeholder="Enter terms to search for" aria-label="orderdia" id="fromDate">
                    </div>
                  </div>

                  <div class="row my-row">
                    <div class="col-4 my-col">
                      <b>Test date to</b>
                    </div>

                    <div class="col-8 my-col">
                      <input class="form-control mr-sm-2" type="date" min="2000-01-01" max="2099-12-31" placeholder="Enter terms to search for" aria-label="orderdia" id="toDate">
                    </div>
                  </div>

 
                    

 
                    <!-- <div class="col-8 my-col">
                      <select class="custom-select" id="inlineFormCustomSelect">
                        <option selected>N/A</option>
                        <option value="1">one</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div> -->
                    
 





                  <div class="row my-row">
                    <div class="col-8 my-col">
                      <button type="button" name="details" class="btn btn-secondary" ng-click="searchProduct()">Search</button>
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
