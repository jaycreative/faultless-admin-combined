<div>This is the main screen</div>
<div>{{title}}</div>
<h2>{{next}}</h2>
<h3>{{hello()}}</h3>
<h4>{{data}}</h4>

<label>First Name</label>  
<input type="text" name="first_name" ng-model="firstname" class="form-control" />  
<br />  
<label>Last Name</label>  
<input type="text" name="last_name" ng-model="lastname" class="form-control" />  
<br />  
<label>ID #</label>  
<input type="text" name="id_num" ng-model="idnum" class="form-control" />  
<br />
<input type="submit" name="btnInsert" class="btn btn-info" ng-click="insertData()" value="Insert"/>
<br /><p></p>
<input type="submit" name="btnInsert" class="btn btn-info" ng-click="displayData()" value="Display"/>  
<br /><p></p>
<input type="submit" name="btnInsert" class="btn btn-info" ng-click="updateData()" value="Update"/>  
<br /><p></p>
<table class="table table-bordered">  
                          <tr>  
                               <th>First Name</th>  
                               <th>Last Name</th>  
                          </tr>  
                          <tr ng-repeat="x in names">  
                               <td>{{x.first_name}}</td>  
                               <td>{{x.last_name}}</td>  
                          </tr>  
                     </table>  