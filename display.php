<?php 
include  'conn.php';
?>
  <link href="https://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <div class="container">
    <div class="row centered-form">
      <div class="col-lg-12 ">
          <p><a href="registration.php">Add New Record</a></p>
        <div class="panel panel-default">

          <div class="panel-heading">
            <h3 class="panel-title">CRUD Operation Using PHP PDO</h3> </div>
          <div class="panel-body">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>Mem_id</th>
                  <th>Firstname</th>
                  <th>Lastname</th>
                  <th>Username</th>
                  <th>Password</th>
                 
                </tr>
              </thead>
              <tbody>
                <?php 
                      $sql ="SELECT id,firstname,lastname,username,password,address from member";
                      $query= $conn -> prepare($sql);
                      $query-> execute();
                      $results = $query -> fetchAll(PDO::FETCH_OBJ);
                      $cnt=1;
                      if($query -> rowCount() > 0)
                      {
                      foreach($results as $result)
                      {
                      ?>
                  <tr>
                    <td><?php echo($cnt);?></td>
                    <td><?php echo htmlentities($result->firstname);?></td>
                    <td><?php echo htmlentities($result->lastname);?></td>
                    <td><?php echo htmlentities($result->username);?></td>
                    <td><?php echo htmlentities($result->password);?></td>
                    
                    <td>&nbsp;&nbsp;<a href="edit.php?id=<?php echo htmlentities($result->id);?>"><button class="btn btn-primary btn-xs">Edit Data</button></a>&nbsp;&nbsp;<a href="delete.php?del=<?php echo htmlentities($result->id);?>"><button class="btn btn-danger btn-xs" onClick="return confirm('Do you really want to delete');">Delete Data</button></a></td>




                  </tr>
                  <?php  $cnt=$cnt+1; } } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style type="text/css">
  body {
    background-color: #fff;
  }
  
  .centered-form {
    margin-top: 60px;
  }
  
  .centered-form .panel {
    background: rgba(255, 255, 255, 0.8);
    box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
  }
  </style>