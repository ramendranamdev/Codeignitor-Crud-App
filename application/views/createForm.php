<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createFormModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="createFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form" onsubmit="return validateCreateForm()" name="createForm" action="create" method="post">
          <div class="form-group">
            <label for="">Name</label>
            <span id="createNameErr" ></span>
            <input type="text" name="name" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <span id="createEmailErr" ></span>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Phone</label>
            <span id="createPhoneErr" ></span>
            <input type="number" name="mobile" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Date Of Birth</label>
            <span id="createDobErr" ></span>
            <input type="date" name="dob" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Pincode</label>
            <span id="createPincodeErr" ></span>
            <input type="text" name="pincode" class="form-control" required>
          </div>

        <!-- </form> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="submit" onclick='validateCreateForm()' value="Save">
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</form>
