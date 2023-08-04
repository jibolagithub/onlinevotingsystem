<?php include_once "includes/header.php"; ?>

    <div class="container-fluid">
        
    <div class="row">
      <div class="col-lg-12">
          <form class="form-horizontal form-bordered" method="post" style="background-color:white;" action="../models/candidate_db.php">

            <div class="container-fluid">
            <div class="row">
              <div class="title-section text-center col-12">
                <h2 class="text-uppercase">Register</h2>
              </div>
            </div>

              <div class="form-group m-t-30">
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
                  <label class="col-md-3 control-label">content</label>
                  <div class="col-md-6">
                    <input style="border:1px solid black" class="form-control" type="text" placeholder="something here" name="content">
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="col-md-3 control-label" for="inputPopover"></label>
                  <div class="col-md-6">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit</button>
                  </div>
                </div>
               
            </div>
          </form>
      </div>
    </div>  
        
    </div>
            
<?php include_once "includes/footer.php"; ?>