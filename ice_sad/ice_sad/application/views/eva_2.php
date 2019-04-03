Test eva 2 dashboard


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>eva_2</title>

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title"> -->


  </head>
  <body>

<span style="background-color:red;">
  <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->
      <div class="row"><!-- row class is used for grid system in Bootstrap-->
          <div class="col-md-4 col-md-offset-4"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->
              <div class="login-panel panel panel-success">
                  <div class="panel-heading">
                      <h3 class="panel-title">eva_2</h3>
                  </div>
                  <div class="panel-body">

                  <?php
                  $error_msg=$this->session->flashdata('error_msg');
                  if($error_msg){
                    echo $error_msg;
                  }
                   ?>

                     <!--  <form role="form" method="post" action="<?php echo base_url('main/register_user'); ?>"> -->
                          <fieldset>
                              <div class="form-group">
                              	SR Code:
                                  <input class="form-control" placeholder="" name="" type="text" autofocus>
                              
                              Program :
                                  <input class="form-control" placeholder="" name="" type="text" autofocus>
                              
                              S.Y.:
                                  <input class="form-control" placeholder="" name="" type="text" autofocus>
                              
                              Sem:
                                  <input class="form-control" placeholder="" name="" type="text" autofocus>
                              
                              Section:
                                  <input class="form-control" placeholder="" name="" type="text" autofocus>
                              </div>
                              <div class="form-group">
                              	Last Name:
                                  <input class="form-control" placeholder="" name="" type="text" autofocus>
                              
                              First Name:
                                  <input class="form-control" placeholder="" name="" type="text" autofocus>
                              
                              Middle Name:
                                  <input class="form-control" placeholder="" name="" type="text" autofocus>
                              </div>
                              <hr>
                              <div class="form-group">
                              	Course Code:
                                  <input class="form-control" placeholder="" name="" type="text" autofocus>
                              Units:
                                  <input class="form-control" placeholder="" name="" type="text" autofocus>
                              Course Title:
                                  <input class="form-control" placeholder="" name="" type="text" autofocus>
                              
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="ADD" name="register" > 
                              <hr>
                              <h1>Proposal Slip</h1>
                              <div class="form-group">
                              	<style>
									table, th, td {
									  border: 1px solid black;
									}
									</style>
									 <table style="width:100%">
									  <tr>
									    <th>Course Code</th>
									    <th>Course Title</th> 
									    <th>Grade</th>
									    <th>Units</th>
									    <th>Section</th>

									  </tr>
									  <tr>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									  </tr>
									   <tr>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									  </tr>
									   <tr>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									  </tr>
									   <tr>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									  </tr>
									   <tr>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									  </tr>
									   <tr>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									    <td>---</td>
									  </tr>
									  <tr>
									    <th> </th>
									    <th> </th> 
									    <th> </th>
									    <th>Total Units</th>
									    <th> </th>
									  </tr>
									</table>

									</body>
									</html>
                              </div>
                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Evaluate" name="register" > 
                              <!-- <div class="form-group">
                                  <input class="form-control" placeholder="" name="" type="password" value="">
                              </div>

                              <div class="form-group">
                                  <select placeholder=" Name" name="">
                                    <option value="CECS">CECS</option>
                                    <option value="CAS">CAS</option>
                                    <option value="CIT">CIT</option>
                                  </select>

                              <div class="form-group">
                                  <input class="form-control" placeholder="Type" name="user_type" type="text" value="">
                              </div>

                              <input class="btn btn-lg btn-success btn-block" type="submit" value="Register" name="register" > -->

                          </fieldset>
                      </form>
                      <!-- <center><b>Already registered ?</b> <br></b><a href="<?php echo base_url('main/login_view'); ?>">Login here</a></center> -->
                  </div>
              </div>
          </div>
      </div>
  </div>





</span>




  </body>
</html>
