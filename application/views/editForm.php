<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createFormModal">
  Launch demo modal
</button> -->

<!-- Modal -->
<div class="modal fade" id="editFormModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">
            Edit User Details
          </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">

        <form class="form" action="edit" method="post">

          <div class="form-group">
            <label for="">ID</label>
            <input type="text" name="id" id="editId" class="form-control" readonly>
          </div>

          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="editName" class="form-control" >
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="editEmail" class="form-control" >
          </div>
          <div class="form-group">
            <label for="">Phone</label>
            <input type="number" name="mobile" id="editPhone" class="form-control" >
          </div>
          <div class="form-group">
            <label for="">Date Of Birth</label>
            <input type="date" name="dob" id="editDob" class="form-control" >
          </div>
          <div class="form-group">
            <label for="">Pincode</label>
            <input type="text" name="pincode" id="editPincode" class="form-control" >
          </div>

        <!-- </form> -->

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <input type="submit" class="btn btn-primary" name="submit" value="Save">
        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>
</form>


<script type="text/javascript">


  function preFillEditForm(){

    var table = document.getElementsByTagName("table")[0];
    var tbody = table.getElementsByTagName("tbody")[0];

    tbody.onclick = function (e) {
        e = e || window.event;
        var data = [];
        var target = e.srcElement || e.target;
        while (target && target.nodeName !== "TR") {
            target = target.parentNode;
        }
        if (target) {
            var cells = target.getElementsByTagName("td");
            for (var i = 0; i < cells.length; i++) {
                data.push(cells[i].innerHTML);
            }
        }
        // return data[0];
        // alert(data);

        document.getElementById("editId").value = data[0];
        document.getElementById("editName").value = data[1];
        document.getElementById("editEmail").value = data[2];
        document.getElementById("editPhone").value = data[3];
        document.getElementById("editDob").value = data[4];
        document.getElementById("editPincode").value = data[5];
    };
  }
</script>
