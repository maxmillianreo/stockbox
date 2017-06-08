<a href="#"><i class="glyphicon glyphicon-lock"></i>&nbsp;&nbsp;Change Login Password</a>
<hr>
<table id="example" class="table table-hover" cellspacing="0" width="100%">
  <?php
    echo "<thead>";
    echo "<tr>";
    echo "<th>No</th>";
    echo "<th>Email</th>";
    echo "<th>Full Name</th>";
    echo "<th>ID Number</th>";
    echo "<th>Join Date</th>";
    if($userinfo->Member_Level < 3){
      echo "<th>Edit</th>";
    }
    if($userinfo->Member_Level < 2){
      echo "<th>Delete</th>";
    }
    echo "</thead>";
    echo "<tbody>";
    $i = 1;
    foreach($userlist as $r) {
       echo "<tr>";
       echo "<td>".$i."</td>";
       // echo "<td>".$r->ID."</td>";
       echo "<td>".$r->Member_Email."</td>";
       echo "<td>".$r->Member_Fullname."</td>";
       echo "<td>".$r->Member_NoKTP."</td>";
       echo "<td>".$r->Member_JoinDate."</td>";
       if($userinfo->Member_Level < 3){
          echo "<td><a href = 'masterDbCtr/update_page?id=".$r->Member_Email."'><i class='glyphicon glyphicon-pencil'></td>";
       }
       if($userinfo->Member_Level < 2){
         echo "<td><a href = '#' data-href='masterDbCtr/delete_data?id=".$r->Member_Email."' data-toggle='modal' data-target='#confirm-delete' data-record-title='".$r->Member_Fullname."'><i class='glyphicon glyphicon-trash'></a></td>";
       }
       echo "</tr>";
       $i += 1;
    }
    echo "</tbody>"; ?>
</table>
<a href="#" data-toggle='modal' data-target='#insert_new'><i class="glyphicon glyphicon-user"></i>&nbsp;&nbsp;Insert New User</a>

<!-- model insert new -->
  <div class="modal fade" id="insert_new" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              Insert New Member
          </div>
          <div class="modal-body">
            <form action="MemberCtr/insert" method="post">
              <div class="form-group">
                <label>Email</label>
                <input type="text" class="form-control" name="txtEmail" id="txtEmail" placeholder="Input Email Here" required>
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Input Password Here" required>
              </div>
              <div class="form-group">
                <label>Re-type Password</label>
                <input type="password" class="form-control" name="txtRepassword" id="txtRepassword" placeholder="Re-type Passowrd Here" required>
              </div>
              <div class="form-group">
                <label>Fullname</label>
                <input type="text" class="form-control" name="txtFullname" id="txtFullname" placeholder="Input Fullname Here" required>
                <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
              </div>
              <div class="form-group">
                <label>Level</label>
                <select class="form-control">
                  <option value="1">Super Admin</option>
                  <option value="2">Regular Admin</option>
                  <!-- <option value="3">VIP Member</option> -->
                  <option value="4" selected>Regular Member</option>
                </select>
              </div>
              <div class="form-group">
                <label>Initial Deposit</label>
                <input type="text" class="form-control" name="txtInitdeposit" id="txtInitdeposit" placeholder="Input Initial Deposit Here" required>
              </div>
              <input type="submit" class="btn btn-primary" value="Submit">
              <input type="button" class="btn btn-danger" value="Cancel" data-dismiss="modal">
            </form>
          </div>
      </div>
  </div>
</div>
<!--  -->

<script type="text/javascript">
     $(document).ready(function() {
       $('#example').DataTable();
     } );

 </script>
