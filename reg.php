 <?php
 include("config.php");
 //$result=mysqli_query($mysqli,"SELECT*from employ_master ORDER by id DESC");
 ?>
 <!DOCTYPE html>
<html>
  <head>
    <title>Registration Page</title>
    <link rel="stylesheet" type="text/css" href="./style.css">
  </head>
  <body>
    <div class="container">
      <div class="row col-md-6 col-md-offset-3">
        <div class="panel panel-primary">
          <div class="panel-heading text-center">
            <h1>Registration Form</h1
          </div>
          <div class="panel-body">
            <form action="reg_save.php" method="post">

              </div>
              <div class="form-group">
                <label for="Name" style="color:white;font-weight:bold;">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="Name"
                  name="Name"
                />
              </div>
              <div class="form-group">
                <label for="destination">Destination</label>
				<input
				type="text"
				class="form-control"
				id="Destination"
				name="Destination"
                  >
                </div>
              </div>
              <div class="form-group">
                <label for="Place Of Posting">Place OF Posting</label>
                <input
                  type="text"
                  class="form-control"
                  id="Place_Posting"
                  name="Place_Posting"
                />
              </div>
              <div class="form-group">
                <label for="Password">Password</label>
                <input
                  type="Password"
                  class="form-control"
                  id="Password"
                  name="Password"
                />
              </div>
              <div class="form-group">
                <label for="Grade">Grade</label>
                <input
                  type="text"
                  class="form-control"
                  id="Grade"
                  name="Grade"
                />
              </div>
			  <div class ="form-group">
			  <label for="Mobile">Mobile no.</label>
			  <input
			  type="int"
			  class="form-control"
			  id="Mobile_no."
			  name="Mobile_no"
			  />
			  </div>
			  <div class="form-group">
			  <label for="Email">Email</label>
			  <input
			  type="text"
			  class="form-control"
			  id="Email"
			  name="Email"
			  />
			  </div>
			  <div class="form-group">
			  <label for="Address">Address</label>
			  <input
			  type="text"
			  class="form-control"
			  id="Address"
			  name="Address"
			  />
			  </div>
              <input type="submit" class="btn btn-primary" />
            </form>
          </div>
          <div class="panel-footer text-right">
            <small>&copy; CMPDI</small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>