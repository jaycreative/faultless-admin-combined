<!-- <!doctype html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-timgo-fit=no">

      <title>Admin UI</title>

      
      <link href="css/bootstrap.min.css" rel="stylesheet">

      <link href="css/styles.css" rel="stylesheet">
    </head>

  <body> -->
  <div ng-init="init()"></div>

    <header id="header">
      <div class="container my-container mt-5">
        <div class="row">
          <div class="col-9 my-col">
            <h1>{{hoseType}} hose products for customer {{id}}</h1>
          </div>
            <div class="col-3 my-col">
            <!-- <form name="certificateForm" action="views/certificate.php" target="_blank" method="POST" enctype="multipart/form-data"> -->
            <button type="button" ng-click="generate()">Generate Certificate</button>
            <!-- </form> -->
          </div>
        </div>

        <div class="row details-table-container-vh">
          <div class="col-3 my-col details-bar">
            <img  ng-src="{{img}}" src="https://via.placeholder.com/250">
            <h3 class ="details">Details:</h3>
            <ul>
              <!-- We will insert the specific details here later -->
              <li>Product ID: {{productID}}</li>
              <li>Username: {{username}}</li>
              <li>Customer PO: {{customerPO}}</li>
              <li>Order num: {{orderNum}}</li>
              <li>Part: {{part}}</li>
              <li>Fittings: {{fittings}}</li>
              <li>Diameter: {{diameter}}</li>
              <li>Length: {{length}}</li>
              <li>Pressure: {{pressure}}</li>
              <li>Temperature: {{temp}}</li>
              <li>CRN? {{crn}}</li>
              <li>Hose status: {{inService}}</li>
              <li>Last test Date: {{testDate}}</li>
              <li>Tester: {{testedBy}}</li>
            </ul>

              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Edit info</button>
            
           <!-- <h3 class ="details">Testing:</h3> 
            <ul>
              <li class="tested by">Phil Robertson</li>
              <li class="dot">01/30/19</li>
            </ul> -->
          </div>

          <div class="col-6 my-col">
            <div class="row my-row">
              <div class="col-9 my-col">
                <!-- <h3>Purchase history</h3> -->
              </div>

              <div class="col-3 my-col">
                <!-- <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search"> -->
              </div>
            </div>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Product ID</th>
                  <th scope="col">Customer PO</th>
                  <th scope="col">Order Number</th>
                  <th scope="col">CRN?</th>
                  <th scope="col">Tested By</th>
                  <th scope="col">Test date</th>
                  <th scope="col">Hose status</th>
                  <th scope="col">Checked</th>
                </tr>
              </thead>
              <form id="formData">
              <tbody>
               <tr ng-repeat='a in names'>

                <th scope="row" id="{{$index}}" data-ng-click="details($index)">{{a.ProductID}}</th>

                 
                 
                  <td>{{a.CustomerPO}}</td>
                  <td>{{a.OrderNum}}</td>
                  <td>{{a.CRN}}</td>
                  <td>{{a.TestedBy}}</td>
                <!--  <td>{{a.testDate}}</td> -->
                 <!-- <td>{{a.InService}}</td> -->

                  <td><input type="checkbox" name="checkboxes"></td>
                  
                </tr>
                
              </tbody>
              </form>
            </table>
          </div>

          <div class="col-3 my-col sidebar">
            <h3 class ="descrip">Description</h3>
            <p>{{names[0].Description}}</p>
            <!-- <p>The Xhose Pro is the original garden hose
                that expands up to 3-times its original
                length when water courses through it. its
                reinforced high-grade drag resistant Dac-5
                polyester outer layer which is specially
                woven to make it tougher and stronger.
                The solid brass fittings and superios strain
                relief collar are crush resistant while the
                thick, specially formulated latex inner layer
                expands to produce more velocity and
                higher pressure.
            </p> -->
          
            <div ng-repeat="x in listOfComments">
              <h5>{{x.Comment}}</h5>
              <h6>Date added: {{x.DateAdded}}</h6>
            </div>
            

            <h3 class ="comments">Comments</h3>
            <input class="form-control mr-sm-2" type="text" placeholder="Comment..." aria-label="comment" id="Comment">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit" ng-click='addComment()'>send</button>
          </div>
        </div>
      </div>
    </header>

      <!-- MODAL -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Generate Certificate</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form>
            <div class="modal-body">

                <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Customer PO</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="text" maxlength="50" placeholder="Ex. 12345" aria-label="crnnumber" id='PO' value="{{customerPO}}">
                    </div>
                </div>
                <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>New test date</b>
                    </div>
                    <div class="col-10 my-col">
                      <input class="form-control mr-sm-2" type="date" placeholder="Username" aria-label="crnnumber" id='testDate' value="{{testDate}}">
                    </div>
                </div>
                <div class="row my-row">
                    <div class="col-2 my-col">
                      <b>Tested by</b>
                    </div>
                    <div class="col-10 my-col">
                      <select class="form-control mr-sm-2" placeholder="Username" aria-label="crnnumber" id='Tester' value="{{testedBy}}">
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
                      <b>In Service?</b>
                    </div>
                    <div class="col-10 my-col">
                    <input class="form-control mr-sm-2" type="radio" aria-label="temprange" name="status" id='statusYes' value="In Service" required>In Service<br>
                    <input class="form-control mr-sm-2" type="radio" aria-label="temprange" name="status" id='statusNo' value="Out of Service" required>Out of Service<br>
                    </div>
                </div>


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" ng-click="update()">Update</button>
              <input type="reset" value="Current Values">
            </div>
            </form>
          </div>
        </div>
      </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="javascript/bootstrap.bundle.min.js"></script>
  <!-- </body>
</html> -->
