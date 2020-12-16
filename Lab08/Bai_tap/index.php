<?php
include('./header.php');
?>

<div class="container col-sm-10 py-4">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col">
                    <h2>Car Management</h2>
                </div>
                <div class="col text-right">
                    <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#create-item">
                        Add Car
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
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

<!-- Modal create item -->
<div class="modal fade" id="create-item" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form data-toggle="validator" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_title">Add Car</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-3 text-right">Car ID <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="number" name="id" id="id" class="form-control" required />
                                <div class="help-block with-errors err-id error_msg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-3 text-right">Name <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="name" id="name" class="form-control" required minlength="5" maxlength="40" />
                                <div class="help-block with-errors err-name error_msg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-3 text-right">Year <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="number" name="year" id="year" class="form-control" required min="1990" max="2015" />
                                <div class="help-block with-errors err-year error_msg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn create-submit btn-success">Add</button>
                    <button type="button" class="btn btn-noDecor" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

<!-- Modal edit item -->
<div class="modal fade" id="edit-item" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <form data-toggle="validator" method="POST">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="modal_title">Add Car</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-3 text-right">Car ID <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="number" name="id" id="id" class="form-control" required disabled/>
                                <div class="help-block with-errors err-id error_msg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-3 text-right">Name <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="text" name="name" id="name" class="form-control" required minlength="5" maxlength="40" />
                                <div class="help-block with-errors err-name error_msg"></div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <label class="col-md-3 text-right">Year <span class="text-danger">*</span></label>
                            <div class="col-md-9">
                                <input type="number" name="year" id="year" class="form-control" required min="1990" max="2015" />
                                <div class="help-block with-errors err-year error_msg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn edit-submit btn-success">Add</button>
                    <button type="button" class="btn btn-noDecor" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>

</div>

</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="script.js"></script>

</html>