<br><br> <br><br>

<div class="container">
  <br>
  <?= \Config\Services::validation()->listErrors(); ?>

  <span class="d-none alert alert-success mb-3" id="res_message"></span>

  <div class="row">
    <div class="col-md-9">
      <form action="<?php echo base_url('contacts/store');?>" name="user_create" id="user_create" method="post" accept-charset="utf-8">

        <div class="form-group">
          <label  or="formGroupExampleInput">Name</label>
          <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name">
            
        </div> 

        <div class="form-group">
          <label for="email">Email Id</label>
          <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id">
            
        </div>

        <div class="form-group">
          <label >Phone number</label>
          <input type="text" name="phone_num" class="form-control" id="phone_num" placeholder="Please enter your contact number">
            
        </div>   

        <div class="form-group">
          <label >Message</label>
          <input type="textarea" name="message" class="form-control" id="message" placeholder="Please enter your message">
            
        </div>      

        <div class="form-group">
          <button type="submit" id="send_form" class="btn btn-success">Submit</button>
        </div>
        
      </form>
    </div>

  </div>
  
 
</div>