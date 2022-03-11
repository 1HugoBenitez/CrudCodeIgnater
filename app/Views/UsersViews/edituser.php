<!DOCTYPE html>
<html>

<head>
  <title>Edit User</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
   <style> .container {
      max-width: 500px;
    }

    .error {
      display: block;
      padding-top: 5px;
      font-size: 14px;
      color: red;
    }
  </style>
</head>

<body>
  <div class="container mt-5">
  <div class="card">
  <div class="card-header bg-light"">
  <h1>Editar Usuario</h1>
  </div>  
    <form method="post" id="update_user" name="update_user" 
    action="<?= site_url('/update') ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $obj->id; ?>">

    <div class="form-group">
        <label>Name</label>
        <input type="text" name="user_name" class="form-control" value="<?php echo $obj->user_name; ?>">
    </div>

    <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="<?php echo $obj->email; ?>">
    </div>

    <div class="form-group">
        <label>Description</label>
        <input type="text" name="desciption" class="form-control" value="<?php echo $obj->desciption; ?>">
    </div>

    <div class="form-group">
        <label>DUI</label>
        <input type="text" name="dui" class="form-control" value="<?php echo $obj->dui; ?>">
    </div>

    <div class="form-group">
        <label>Phone</label>
        <input type="text" name="phone" class="form-control" value="<?php echo $obj->phone; ?>">
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-warning">Save</button>
    </div>
    </form>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/additional-methods.min.js"></script>
  <script>
    if ($("#update_user").length > 0) {
      $("#update_user").validate({
        rules: {
          name: {
            required: true,
          },
          email: {
            required: true,
            maxlength: 60,
            email: true,
          },
        },
        messages: {
          name: {
            required: "Name is required.",
          },
          email: {
            required: "Email is required.",
            email: "It does not seem to be a valid email.",
            maxlength: "The email should be or equal to 60 chars.",
          },
        },
      })
    }
  </script>
</body>

</html>