<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD APP</title>

    <script type="text/javascript" src="<?php echo base_url('assets/js/jquery-3.4.1.js');  ?>" ></script>
    <script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');  ?>" ></script>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');  ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');  ?>">

  </head>
  <body>

    <div id="header">
      <div class="container">
        <h3>
          <a href="">CRUD APP</a>
        </h3>
      </div>
    </div>

    <div class="container">
      <div class="row pt-3 pb-1">
        <div class="col-6">
          <h5>USERS</h5>
        </div>
        <div class="col-6 text-right">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createFormModal">
            +Create
          </button>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <?php echo validation_errors("<div class='alert alert-danger'>",'</div>'); ?>
        </div>
      </div>

      <div class="row">
        <div class="col-12">
          <table class="table table-striped" >
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>DOB</th>
                <th>PINCODE</th>
                <th>Options</th>
              </tr>
            </thead>
            <?php include('getRows.php'); ?>

          </table>
        </div>
      </div>

    </div>

    <?php include('createForm.php'); ?>
    <?php include('editForm.php'); ?>
    <?php include('deleteForm.php'); ?>

  </body>
</html>
