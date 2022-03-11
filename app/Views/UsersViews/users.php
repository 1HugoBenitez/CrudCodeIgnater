<!doctype html>
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title></title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<div class="container mt-4">
<h1>Datos de Usuarios Registrados</h1>

   <div class="d-flex justify-content-end">
        <a href="<?php echo site_url('/createUsers') ?>" class="btn btn-dark">Create</a>
	</div>
    <?php
     if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
      }
     ?>
  <div class="mt-3">
     <table class="table table-bordered" id="users-list">
       <thead class="thead-light">
          <tr>
             <th>Id</th>
             <th>Name</th>
             <th>Email</th>
             <th>Desciption</th>
             <th>DUI</th>
             <th>Phone</th>
             <th>Acciones</th>
          </tr>
       </thead>
       <tbody>
          <?php if($users): ?>
          <?php foreach($users as $user): ?>
          <tr>
             <td><?php echo $user -> id; ?></td>
             <td><?php echo $user -> user_name; ?></td>
             <td><?php echo $user -> email; ?></td>
             <td><?php echo $user -> desciption; ?></td>
             <td><?php echo $user -> dui; ?></td>
             <td><?php echo $user -> phone; ?></td>
             <td>
              <a href="<?php echo base_url('/editUsers/'.$user -> id);?>" class="btn btn-warning">Edit</a>
              <a href="<?php echo base_url('delete/'.$user -> id);?>" class="btn btn-info">Delete</a>
              </td>
          </tr>
         <?php endforeach; ?>
         <?php endif; ?>
       </tbody>
     </table>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
</body>
</html>