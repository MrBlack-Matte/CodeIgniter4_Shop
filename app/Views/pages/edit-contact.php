<br><br><br><br>
 <div class="container">
    <br>
    <?= \Config\Services::validation()->listErrors(); ?>
 
    <span class="d-none alert alert-success mb-3" id="res_message"></span>
 
    <div class="row">
      <div class="col-md-9">
        <form action="<?php echo base_url('contacts/update');?>" name="edit-user" id="edit-user" method="post" accept-charset="utf-8">
    
            <input type="hidden" name="id" class="form-control" id="id" value="<?php echo $user['id'] ?>">
    
            <div class="form-group">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="Please enter name" value="<?php echo $user['name'] ?>">
                
            </div> 
    
            <div class="form-group">
                <label for="email">Email Id</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Please enter email id" value="<?php echo $user['email'] ?>">
                
            </div>
            <div class="form-group">
                <label >Phone number</label>
                <input type="text" name="phone_num" class="form-control" id="phone_num" placeholder="Please enter your contact number"value="<?php echo $user['phone_num'] ?>">
                >
                
            </div>   

            <div class="form-group">
                <label >Message</label>
                <input type="textarea" name="message" class="form-control" id="message" placeholder="Please enter your message"value="<?php echo $user['message'] ?>">
                >
                
            </div>   
 
          <div class="form-group">
           <button type="submit" id="send_form" class="btn btn-success">Submit</button>
          </div>
          
        </form>
      </div>
 
    </div>
  
</div>
 <script>
   if ($("#edit-user").length > 0) {
      $("#edit-user").validate({
      
    rules: {
      name: {
        required: true,
      },
  
      email: {
        required: true,
        maxlength: 50,
        email: true,
      },   
    },
    messages: {
        
      name: {
        required: "Please enter name",
      },
      email: {
        required: "Please enter valid email",
        email: "Please enter valid email",
        maxlength: "The email name should less than or equal to 50 characters",
        }, 
    },
  })
}
</script>
