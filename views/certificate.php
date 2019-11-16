<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="javascript/bootstrap.bundle.min.js"></script>

  </head>
  <body> -->
  <div ng-init="init()"></div>
    <div class="container" ng-repeat="d in data">
    <section class="header">
      <div class="row">
        <div class="col-3">
          <img src="https://via.placeholder.com/150" alt="">
        </div>


        <div class="col-9">
          <p class="phoneNumber">905-564-HOSE</p>
          <p class="website">www.faultlesssolutions.com</p>
          <p class="address">6670A Columbus Rd, Mississauga, ON L5T 2G1</p>
          <p>{{d[0].ProductID}}</p>
        </div>
    </section>

    <section class="main">
            <hr>
      <h1> CRN Test Certificate for Faultless Solutions</h1>
        <div class="row">
          <div class="col-4">
            <p>CRN Number:</p>
          </div>

          <div class="col-8">
            <p class="crn-number">0D21291.5 Per TSSA B51</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <p>ISO 9001:</p>
          </div>

          <div class="col-8">
            <p class="year">2015</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <p>Certificate Number:</p>
          </div>

          <div class="col-8">
            <p class="cert-num">2306 CAN</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <p>FS Hydrotest Procedure</p>
          </div>

          <div class="col-8">
            <p class="procedure-hydro">TTT0010001</p>
          </div>
        </div>

        <br>

        <div class="row">
          <div class="col-4">
            <p>Customer Name:</p>
          </div>

          <div class="col-8">
            <p class="cust-name">GFL Environmental</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <p>Date:</p>
          </div>

          <div class="col-8">
            <p class="date">April 16, 2019</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <p>Address:</p>
          </div>

          <div class="col-8">
            <p class="address">332 Bennet Road, Bowmanville, Ontario</p>
          </div>
        </div>

        <div class="row">
          <div class="col-4">
            <p>Serial Number</p>
          </div>

          <div class="col-8">
            <p class="serial-num">SF350 to SF357</p>
          </div>
        </div>
    </section>

    <section class="secondary">
      <div class="row">
        <div class="col-4">
          <p>FS Part Number:</p>
        </div>

        <div class="col-8">
          <p class="part-num">PHTTHA3X25SSCXE</p>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <p>Order Number:</p>
        </div>

        <div class="col-8">
          <p class="order-num">SO-1322</p>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <p>Customer PO:</p>
        </div>

        <div class="col-8">
          <p class="customer-po">PO23510239032</p>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <p>Date of Test:</p>
        </div>

        <div class="col-8">
          <p class="test-date">April 16, 2019</p>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <p>Test Pressure:</p>
        </div>

        <div class="col-8">
          <p class="test-pressure">225psi</p>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <p>H.A.W.P.:</p>
        </div>

        <div class="col-8">
          <p class="hawp-num">150psi</p>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <p>Temp. Range:</p>
        </div>

        <div class="col-8">
          <p class="temp-range">-49F to +180F</p>
        </div>
      </div>

      <div class="row">
        <div class="col-4">
          <p>Inspected By:</p>
        </div>

        <div class="col-8">
          <p class="inspector">Brian William</p>
        </div>
      </div>
    </section>

    <section class="third">
      <div class="row">
        <h2>Hose Assembly Tested</h2>
        <p class="testing">8 Length of 3in x 25ft 150psi black smooth tank truck
          hose assy cw SS Male x Female camlocks crimped each end. </p>
      </div>
    </section>

    <footer>
      <hr>
      <p class="pager">Page 1 of 3</p>
    </footer>

    <p style="page-break-before: always">
</div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <!-- </body>
</html> -->
