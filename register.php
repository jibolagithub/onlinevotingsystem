    <?php include_once "./includes/header.php"; ?>

    <div class="row">
      <div class="col-lg-12">
        
        <div class="container-fluid">
            <div class="row">
              <div class="title-section text-center col-12">
                <h2 class="text-uppercase">Register</h2>
              </div>
        </div>

          <form class="form-horizontal form-bordered" method="post" style="background-color:white;" action="models/register_db.php">

              <div class="form-group">
                <label class="col-md-3 control-label">First Name:</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
                </div>
              </div>     
                
              <div class="form-group">
                <label class="col-md-3 control-label">Last Name:</label>
                <div class="col-md-6">
                  <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
                </div>
              </div> 
      
              <div class="form-group">
                <label class="col-md-3 control-label">Department:</label>
                <div class="col-md-6">                    
                  <input type="text" class="form-control" name="department" placeholder="Enter department">
                </div>
              </div>
      
                <div class="form-group">
                  <label class="col-md-3 control-label">Matric Number:</label>
                  <div class="col-md-6">
                      <input type="text" class="form-control" name="matric_number" placeholder="Enter matric number">
                  </div>
                </div>
      
                <div class="form-group">
                  <label class="col-md-3 control-label">Telephone Number:</label>
                  <div class="col-md-6">
                      <input type="text" class="form-control" name="telephone" placeholder="Enter telephone number">
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label">Gender:</label>
                  <div class="col-md-6">
                    <select class="form-control" name="gender">
                      <option>Male</option>
                      <option>Female</option>
                    </select>
                  </div>
                </div>
      
                <div class="form-group">
                  <label class="col-md-3 control-label">Password:</label>
                  <div class="col-md-6">
                    <input type="password" class="form-control" name="password" placeholder="Enter password" >
                  </div>
                </div>
      
                <div class="form-group">
                  <label class="col-md-3 control-label">Confirm Password:</label>
                  <div class="col-md-6">
                    <input type="password" class="form-control" name="confirm_password" placeholder="Confirm password" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="inputPopover"></label>
                  <div class="col-md-6">
                  <a href="./profile/"><button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit</button></a>
                  </div>
                </div>
      
               
            </div>
          </form>
      </div>
    </div>
    <?php include_once "./includes/footer.php"; ?>