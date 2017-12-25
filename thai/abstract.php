<!DOCTYPE html>
<html lang="en">

<?php include "head.php"  ?>
    <style>
        .centered {
            width: 1200px;
            margin: 0 auto;
        }
        
        .p1 {
            color: #000000;
        }
    </style>

    <div class="centered">



        <div class="container static-top">
            <div class="row bg-title">
                <!-- .page title -->
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                </div>
                <!-- /.page title -->
                <!-- .breadcrumb -->

                <!-- /.breadcrumb -->
            </div>
            <!-- .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="white-box">
                        <!--/row-->
                        <div class="col-lg-12 col-sm-12">
                      
                            <div class="col-sm-12">
                                <div class="white-box">
                                    <h4 class="page-title"><b>ABSTRACT INFORMATION</b></h4>
                                    <form action="http://www.demo-web.96.lt/appspghan2018/register/complete_abstract.php" method="post" enctype="multipart/form-data">
                                        <br>
                                    <h4>  Abstract category </h4>
                                        <select  name="abstractcategory" required>
                                            <option value="" SELECTED>-- Choose --</option>
                                            <option value="Gastroenterology">Gastroenterology</option>
                                            <option value=" Hepatology"> Hepatology</option>
                                            <option value=" Nutrition"> Nutrition</option>

                                        </select>

                                        <br> <br>
               
                                     <h4>Abstract Title *</h4>
                                
                                         <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" maxlength="25" size="50"/><br>
                                     <font size="2.5"> &nbsp; &nbsp;(Abstract title should be less than 25 words in UPPER CASE.)</font>
                                       

                                         <br><br><h4> Type of Presentation*</h4>

                                        <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="Presentation" value="Oral"> Oral Presentation


                                        <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="Presentation" value="Poster"> Poster  Presentation

<!-- 
  <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="Either" value="Either"> 
  Either  Oral  or  Poster  Presentation  -->

 <br> <br>
                                           <div class="col-sm-12">
                             
                                            <div class="table-responsive">
                                               <div class="row">
                                            <table class="table color-table purple-table ">

                                                <tr>
                                                    <td>
                                                    </td>


                                                </tr>

                                                <tr>
                                                    <thead>
                                                 
                                                        
                                                          <th><font size="4.5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Presenter *</font></th>
                                                            <th><font size="4.5">Author name *</font></th>
                                                      
                                                        <th><font size="4.5">Family name *</font></th>
                                                        <th><font size="4.5">Institution *</font></th>
                                                      
                                                        <th><font size="4.5">E-mail *</font></th>
                                              





                                                    </thead>
                                                </tr>
                                                <tr>
                                                 
                                                    <td>
                                                       1&nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="typenumber" value="1" required>
                                                    </td>
                                                     
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="name" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="typenumber" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                 <td></td>
                                                
                                                   
                                                </tr>
 <!-- <tr>
                                                 
                                                    <td>
                                                       2&nbsp;&nbsp;&nbsp; <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="typenumber" value="2">
                                                    </td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                           
                                                </tr>
                                                 <tr>
                                               
                                                    <td>
                                                       3&nbsp;&nbsp;&nbsp; <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="typenumber" value="3">
                                                    </td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                
                                                           <td></td>
                                                </tr>
                                                 <tr>
                                                 
                                                    <td>
                                                        4&nbsp;&nbsp;&nbsp; <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="typenumber" value="4">
                                                    </td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                
                                                    
                                                </tr>
                                                 <tr>
                                             
                                                    <td>
                                                      5&nbsp;&nbsp;&nbsp;  <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="typenumber" value="5">
                                                    </td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                
                                                </tr>
                                                 <tr>
                                          
                                                    <td>
                                                        6&nbsp;&nbsp;&nbsp; <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="typenumber" value="6">
                                                    </td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                
                                 
                                                </tr>
                                                 <tr>
                                          
                                                    <td>
                                                        7&nbsp;&nbsp;&nbsp; <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="typenumber" value="7">
                                                    </td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                
                                                </tr>
                                                 <tr>
                                          
                                                    <td>
                                                        8&nbsp;&nbsp;&nbsp; <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="typenumber" value="8">
                                                    </td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                

                                                </tr>
                                                 <tr>
                                              
                                                    <td>
                                                        9&nbsp;&nbsp;&nbsp; <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="typenumber" value="9">
                                                    </td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                
                                                   
                                                </tr>
                                                 <tr>
                                                
                                                    <td>
                                                        10&nbsp;&nbsp;&nbsp; <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="typenumber" value="10">
                                                    </td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                    <td>  <input type="text" class="md-input uk-form-width-medium" name="frmcontact_firstname" /></td>
                                                
                                              
                                                </tr>  -->
                                                
                                                


                                            </table>
                                                </div>  </div>  </div>
                                           <hr>
  <h4>Abstract text should contain 4 sections. (Background and objectives, methods, results and conclusion)</h4><br> <br>
                                       
                                        <textarea name=frmab_background id=frmab_background style="width:100%;height:200px;" onkeypress="do_count();" onchange="do_count();" maxlength=300 placeholder="" ></textarea>
                                        
                                        
                                    <p>Note: * = required field(s) </p>
                                  
     <h4>   Word count: 0	words (Abstract text should be less than 300 words.)</h4>
  <br>   <br>
<input type="hidden" name="cust_id" value="" > 
                                             <div class="col-md-12">
                                   <div class="row">
                                   
                 Insert table &nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;<input type="file" name="image1" value="" >(*.doc)
                              
                                  <br>   <br>
                                    </div>  <br> </div>
                                   
                               
                                        <div class="col-md-12">
                                   <div class="row">
                                   
                                   
                                   <input type="radio" class="check" id="square-checkbox-1" data-checkbox="icheckbox_square-red" name="Yes" value="Yes">
                                <label for="radio_demo_inline_1" class="inline-label" > &nbsp;&nbsp;I certify that this abstract has neither been published nor presented previously.</label>
                                <br>   </div> <br> <br> <br>  </div>
                                      
                                       <br>
                                                  <br>    <br>    <br>    <br>    <br>
                                                <div class="col-md-6">
                                                    <div class="row">
                                                        <div class="col-md-offset-3 col-md-9">
                                                        <button type="submit" class="btn btn-success"><a href="http://www.demo-web.96.lt/appspghan2018/register/complete_abstract.php">    Submit</a></button>
                                                            <a href="http://www.demo-web.96.lt/appspghan2018/register/Personal.php"><button type="button" class="btn btn-default">Cancel</button> </a>
                                                        </div>
                                                    </div>
                                                </div>

                                        
                                    </form>
                                    
                                    
                                     <br>    <br>    <br>    <br>    <br>  
                                    <!-- /.col-lg-4 -->

                                    <!-- /#wrapper -->
                                    <!-- jQuery -->
                                    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
                                    <!-- Bootstrap Core JavaScript -->
                                    <script src="bootstrap/dist/js/tether.min.js"></script>
                                    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
                                    <script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
                                    <!-- Sidebar menu plugin JavaScript -->
                                    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
                                    <!--Slimscroll JavaScript For custom scroll-->
                                    <script src="js/jquery.slimscroll.js"></script>
                                    <!--Wave Effects -->
                                    <script src="js/waves.js"></script>
                                    <!-- Custom Theme JavaScript -->
                                    <script src="js/custom.min.js"></script>
                                    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
                                    <!-- icheck -->
                                    <script src="../plugins/bower_components/icheck/icheck.min.js"></script>
                                    <script src="../plugins/bower_components/icheck/icheck.init.js"></script>



                                    </body>

</html>