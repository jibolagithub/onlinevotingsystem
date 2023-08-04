    <?php session_start(); ?>

    <?php include_once "./includes/header.php"; ?>

    <div class="row">
      <div class="col-lg-12">
      <div class="container-fluid">
            <div class="row">
              <div class="title-section text-center col-12">
                <h2 class="text-uppercase">Register</h2>
              </div>
        </div>

          <form class="form-horizontal form-bordered" method="post" style="background-color:white;" action="./models/login_db.php">
      
                <div class="form-group">
                  <label class="col-md-3 control-label">Telephone Number:</label>
                  <div class="col-md-6">
                      <input type="number" class="form-control" name="telephone" placeholder="Enter telephone number">
                  </div>
                </div>
      
                <div class="form-group">
                  <label class="col-md-3 control-label">Password:</label>
                  <div class="col-md-6">
                    <input type="password" class="form-control" name="password" placeholder="Enter password" >
                  </div>
                </div>

                <div class="form-group">
                  <label class="col-md-3 control-label" for="inputPopover"></label>
                  <div class="col-md-6">
                  <button type="submit" class="btn btn-primary btn-lg btn-block" name="submit">Submit</button>
                  <button type="reset" class="btn btn-default btn-lg btn-block" name="reset">Reset</button>
                  </div>
                </div>
      
               <div class="text_center">    
                <?php
                    if (isset($_SESSION["login_err"]) && !empty($_SESSION["login_err"])) {
                        echo $_SESSION["login_err"];
                        unset($_SESSION["login_err"]);
                    }
                ?>

               </div>
            
          </form>
          </div>
      </div>
    </div>
    <?php include_once "./includes/footer.php"; ?>