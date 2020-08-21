<br><br><br><br>


<div class="container mt-5">
<a href="<?php echo base_url('contacts/create') ?>" class="btn btn-success mb-2">Create</a>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="row mt-3">
     <table class="table table-bordered" id="users">
       <thead>
          <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>Phone_num</th>
             <th>Message</th>
             <th>Action</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
             <td><?php echo $user['id']; ?></td>
             <td><?php echo $user['name']; ?></td>
             <td><?php echo $user['email']; ?></td>
             <td><?php echo $user['phone_num']; ?></td>
             <td><?php echo $user['message']; ?></td>
             <td>
              <a href="<?php echo base_url('contacts/edit/'.$user['id']);?>" class="btn btn-success">Edit</a>
              <a href="<?php echo base_url('contacts/delete/'.$user['id']);?>" class="btn btn-danger">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>





<script>
    $(document).ready( function () {
      $('#users').DataTable();
  } );
</script>




