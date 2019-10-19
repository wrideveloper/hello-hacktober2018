	 
<div class="container" style="background-color:  #fff; padding-top: 100px;">
         <b><h5 class="heading">My Profile</h5></b>

          <br>

          <section id="body">
            <div class="container-fluid" style="padding-top: 20px; color: black">

              <div class="row">
                <!-- left column -->
                <div class="col-md-3">
                  <div style="border: 1px solid #c2c4c6; padding-left: 20px; padding-right: 20px; padding-top: 20px; padding-bottom: 20px;">
                    <div class="text-center">
                      <?php echo form_open_multipart('User/updatePhoto'); ?>
                      <div>
                        <img src="<?php echo base_url();?>assets/upload/<?php echo $name[0]->foto?>" class="avatar img-circle" alt="avatar" width="150" height="150">
                        <h6>Upload a different photo...</h6>

                        <input type="file" class="form-control" name="pic">
                        <br>
                      </div>
                      <input type="submit" name="submit" class="btn btn-info" value="Update">
                      <?php echo form_close();?>
                    </div>
                  </div>
                </div>


                <!-- edit form column -->
                <div class="col-md-9 personal-info">
                  <div style="border: 1px solid #c2c4c6; padding-left: 20px; padding-right: 20px; padding-top: 20px">
                    <h5>Profile Detail</h5>
                    <hr>
                    <form method="post" id="profileForm">
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Full Name:</label>
                        <div class="col-lg-8">
                          <input class="form-control" name="name" id="name" type="text" value="<?php echo $name[0]->full_name?>">
                          <span id="name_error" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Address:</label>
                        <div class="col-lg-8">
                          <input class="form-control" type="text" name="add" id="add" value="<?php echo $name[0]->alamat?>">
                          <span id="add_error" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Phone Number:</label>
                        <div class="col-lg-8">
                          <input class="form-control" name="phone" id="phone" type="text" value="<?php echo $name[0]->no_telp?>">
                          <span id="phone_error" class="text-danger"></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                          <input class="form-control" name="email" id="email" type="text" value="<?php echo $name[0]->email?>">
                          <span id="email_error" class="text-danger"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-md-3 control-label">Username:</label>
                        <div class="col-md-8">
                          <input class="form-control" type="text" name="username" id="username" value="<?php echo $name[0]->username?>">
                          <span id="username_error" class="text-danger"></span>
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-md-8">
                          <input type="submit" class="btn btn-primary" value="Save Changes">
                        </div>
                      </div>
                    </form>
                  </div>
                  <br><br>
                  <div style="border: 1px solid #c2c4c6; padding-left: 20px; padding-right: 20px; padding-top: 20px">
                    <form method="post" id="passForm">
                    <h5>Change Password</h5>
                    <hr>

                    <div class="form-group">
                      <label class="col-md-3 control-label">Old Password:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="password" name="old" id="old" placeholder="Old Password">
                        <span id="old_error" class="text-danger"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label">New Password:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="password" name="password" id="password" placeholder="New Password">
                        <span id="password_error" class="text-danger"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <label class="col-md-3 control-label">Confirm Password:</label>
                      <div class="col-md-8">
                        <input class="form-control" type="password" name="confirm" id="confirm" placeholder="Confirm Password">
                        <span id="confirm_error" class="text-danger"></span>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="col-md-8">
                        <input type="submit" class="btn btn-primary" value="Save Changes">
                      </div>
                    </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <br>
          <br>

          <script>
            $(document).ready(function(){

              $('#profileForm').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                 url:"<?php echo site_url(); ?>/User/editProfileUser",
                 method:"POST",
                 data:$(this).serialize(),
                 dataType:"json",
            //  beforeSend:function(){
            //   $('#contact').attr('disabled', 'disabled');
            // },
            success:function(data)
            {
              if(data.error)
              {
                if(data.name_error != '')
                {
                  $('#name_error').html(data.name_error);
                }
                else
                {
                  $('#name_error').html('');
                }
                if(data.add_error != '')
                {
                  $('#add_error').html(data.add_error);
                }
                else
                {
                  $('#add_error').html('');
                }
                if(data.phone_error != '')
                {
                  $('#phone_error').html(data.add_error);
                }
                else
                {
                  $('#phone_error').html('');
                }
                if(data.email_error != '')
                {
                  $('#email_error').html(data.email_error);
                }
                else
                {
                  $('#email_error').html('');
                }
                if(data.username_error != '')
                {
                  $('#username_error').html(data.username_error);
                }
                else
                {
                  $('#username_error').html('');
                }
              }
              if(data.success)
              {
                $('#name_error').html('');
                $('#email_error').html('');
                $('#add_error').html('');
                $('#username_error').html('');
                $('#phone_error').html('');
                //$('#profileForm')[0].reset();

                swal({
                  title: "Success",
                  type:"success",
                  text: "Success",
                  timer: 2000,
                  showConfirmButton: false
                });
              }

              //$('#contact').attr('disabled', false);
            }
          })
              });
              $('#passForm').on('submit', function(event){
                event.preventDefault();
                $.ajax({
                 url:"<?php echo site_url(); ?>/User/editPassUser",
                 method:"POST",
                 data:$(this).serialize(),
                 dataType:"json",
            //  beforeSend:function(){
            //   $('#contact').attr('disabled', 'disabled');
            // },
            success:function(data)
            {
              if(data.error)
              {
                if(data.old_error != '')
                {
                  $('#old_error').html(data.old_error);
                }
                else
                {
                  $('#old_error').html('');
                }
                if(data.password_error != '')
                {
                  $('#password_error').html(data.password_error);
                }
                else
                {
                  $('#password_error').html('');
                }
                if(data.confirm_error != '')
                {
                  $('#confirm_error').html(data.confirm_error);
                }
                else
                {
                  $('#confirm_error').html('');
                }
              }
              if(data.success)
              {
                $('#old_error').html('');
                $('#password_error').html('');
                $('#confirm_error').html('');
                $('#passForm')[0].reset();

                swal({
                  title: "Success",
                  type:"success",
                  text: "Success",
                  timer: 2000,
                  showConfirmButton: false
                });
              }

              //$('#contact').attr('disabled', false);
            }
          })
              });

            });
          </script>