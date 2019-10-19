<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Kapella Bootstrap Admin Dashboard Template</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/admin/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?php echo base_url();?>assets/admin/images/favicon.png" />

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.css"/>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="main-panel">
        <div class="content-wrapper d-flex align-items-center auth px-0">
          <div class="row w-100 mx-0">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                <div class="brand-logo">
                  <img src="<?php echo base_url();?>assets/admin/images/logo.svg" alt="logo">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form method="post" accept-charset="utf-8" action="<?= site_url()?>/Login/addUser" id="register">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg reset" id="fullname" name="fullname" placeholder="Fullname" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg reset" id="username" name="username" placeholder="Username" required>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg reset" id="email" name="email" placeholder="Email" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg reset" id="notelp" name="notelp" placeholder="Phone Number" required>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg reset" id="alamat" name="alamat" placeholder="Address" required>
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg reset" id="password" name="password" placeholder="Password" required>
                  </div>
                  <div class="mb-4">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input">
                        I agree to all Terms & Conditions
                      </label>
                    </div>
                  </div>
                  <div class="mt-3">
                    <input type="submit" name="submit" value="SIGN UP" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn">
                  </div>
                  <div class="text-center mt-4 font-weight-light">
                    Already have an account? <a href="login.html" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="<?php echo base_url();?>assets/admin/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?php echo base_url();?>assets/admin/js/template.js"></script>
  <!-- endinject -->

  <script type="text/javascript">
    $('form#register').submit(function(e){
    e.preventDefault();
    var formData = new FormData(this);

    var url = $(this).attr('action');

    $.ajax({
        url : url,
        type : "POST",
        data: formData,
        success : function (response){
                // swal(data);
                swal({
                    title: "Success",
                    type:"success",
                    text: "Item has been added successfully",
                    timer: 2000,
                    showConfirmButton: false
                });
                reset();
            },
            cache : false,
            contentType : false,
            processData : false,
        })
    });

    function reset() {
    var a = document.getElementsByClassName('reset');
        // a = HTMLCollection
        console.log(a);
        // You can iterate over HTMLCollection.
        for (var i = 0; i < a.length; i++) {
            // You can set the value in every item in the HTMLCollection.
            a[i].value = "";
        }
        $("#partno").select2('destroy').val("---Select Item---").select2({
            placeholder: '--- Select Item ---'
        });


    };

  </script>
</body>

</html>
