<?php
  $this->load->helper('url');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Guestbook</title>
  <link ref="stylesheet" type="text/css" href="<?php echo base_url('/public/stylesheets/bootstrap.min.css');?>"/>
  <link ref="stylesheet" type="text/css" href="<?php echo base_url('/public/stylesheets/bootstrap-responsive.min.css');?>"/>
  <link ref="stylesheet" type="text/css" href="<?php echo base_url('/public/stylesheets/style.css');?>"/>
  <script src="/guestbook/public/javascript/jquery-1.12.0.min.js"></script>
  <script src="/guestbook/public/javascript/bootstrap.min.js"></script>
</head>
<body>
  <h1> Guestbook </h1>
    <div>Company Name: H for Hope Independent Consultant </div>
      <div> Add a new guest: </div>
      <form class="form-horizontal" method="post" action="?">
        <div class="control-group">
          <label class="control-label">First name: </label>
          <div class="controls">
            <input type="text" name="firstname" class="input-xlarge"/>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Last name: </label>
          <div class="controls">
            <input type="text" name="lastname" class="input-xlarge"/>
          </div>
        </div>


        <div class="control-group">
          <label class="control-label">Email: </label>
          <div class="controls">
            <input type="text" name="email" class="input-xlarge"/>
          </div>
        </div>

        <div class="control-group">
          <label class="control-label">Comment: </label>
          <div class="controls">
            <input type="text" name="comment" class="input-xlarge"/>
          </div>
        </div>

        <div class="control-group">
          <div class="controls">
            <input type="submit" value="Add" class="btn btn-primary"/>
          </div>
        </div>
      </form> 

 
      <div class="table-responsive" >
        <table class="table table-hover" id="guestlist">
          <tbody>
            <tr>
              <th class="small-column"> User ID </th>
              <th> First Name </th>
              <th> Last Name </th>
              <th> Email </th>
              <th> Comment </th>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td> 1 </td>
              <td> Holly </td>
              <td> Liu </td>
              <td> holly_liu@hotmail.com </td>
              <td></td>
            </tr>
          </tbody> 
        </table>
      </div>

  <footer> &copy; Holly Liu - 2016</footer>
</body>
</html>