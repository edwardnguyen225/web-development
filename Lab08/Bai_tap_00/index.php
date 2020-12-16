<?php
// index.php
include('./assets/api/car_ms.php');
$visitor = new car_ms();

include('header.php');
?>

<div class="container col-sm-10 py-4">
   <span id="message"></span>
   <div class="card">
      <div class="card-header">
         <div class="row">
            <div class="col">
               <h2>Car Management</h2>
            </div>
            <div class="col text-right">
               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
                  Add Car
               </button>
            </div>
         </div>
      </div>
      <div class="card-body">
         <div class="table-responsive">
            <table class="table table-striped table-bordered" id="car_table">
               <thead>
                  <tr>
                     <th>Car ID</th>
                     <th>Name</th>
                     <th>Year</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  
               </tbody>
            </table>
         </div>
      </div>
   </div>
</div>
</div>
</div>

</body>
<script src="./assets/js/script.js"></script>
</html>

<!-- Add Car -->
<div class="modal fade" id="add_new_car" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
   <div class="modal-dialog">
      <form method="post" id="car_form" enctype="multipart/form-data">
         <div class="modal-content">
            <div class="modal-header">
               <h4 class="modal-title" id="modal_title">Add Car</h4>
               <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
               <div class="form-group">
                  <div class="row">
                     <label class="col-md-4 text-right">Car ID <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="number" name="car_id" id="car_id" class="form-control" required />
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <label class="col-md-4 text-right">Name <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="text" name="car_name" id="car_name" class="form-control" required minlength="5" maxlength="40" />
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <div class="row">
                     <label class="col-md-4 text-right">Year <span class="text-danger">*</span></label>
                     <div class="col-md-8">
                        <input type="number" name="car_year" id="car_year" class="form-control" required min="1990" max="2015" />
                     </div>
                  </div>
               </div>
            </div>
            <div class="modal-footer">
               <input type="hidden" name="hidden_id" id="hidden_id" />
               <input type="hidden" name="action" id="action" value="Add" />
               <input type="submit" name="submit" id="submit_button" class="btn btn-success" value="Add" />
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
         </div>
      </form>
   </div>
</div>