	
<!DOCTYPE html>
<html>
<head>            
            
            
    
 <?php $this->load->view('public/components/header1.php');?>
 
 
 
 
 <div class="container">
 		<h2 align="center"> FEE Record</h2>
        
            <div class="row" >
            	<div class="col-lg-6 col-lg-offset-6">
                <?php //echo anchor('Teacher/add_teacher','Add Teachers',array('class'=>'btn btn-primary pull-right')); ?>
                	<!--<a href="" class="btn btn-lg btn-primary pull-right">Add Students</a>  -->
                <div class="container-box rotated" style="float:right">
<button type="button" class="btn btn-info btn-lg turned-button" data-toggle="modal" data-target="#myModal">Add Fee</button>
</div>
</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal">×</button>
<h4 class="modal-title">Add Information</h4>
</div>
<div class="modal-body">

        <form role="form" method="post" id="reused_form" method="post" action="<?php echo base_url();?>Fee_c/add">
       

        <div class="form-group">
            <label for="name">
                Class_id:</label>
            <select class="form-group" id="ci" name="cid">
                <option value="">Select Class</option>
                
                <?php foreach($classes as $abc){?>
					<option value="<?php echo $abc->id ?>"> <?php echo $abc->name ?></option>
					<?php } ?>
                    
                    </select>
            </div>
            
                    <div class="form-group">
            <label for="cnic">
                Student_id:</label>
              <select class="form-group" id="teach_id" name="sid">
                <option value="">Select Student</option>
                
                <?php foreach($students as $s){?>
					<option value="<?php echo $s->id ?>"> <?php echo $s->name ?></option>
					<?php } ?>
                    
                    </select>
</div>

 
        <div class="form-group">
            <label for="dob">
                FEE:</label>
            <input type="text" class="form-control"
            id="fe" name="fe" required maxlength="50" value="<?php echo set_value('fe');?>">
            </div>
        <div class="form-group">
            <label for="salary">
                Date:</label>
            <input type="date" class="form-control"
            id="email" name="date" required maxlength="50">


        </div>
        <div class="form-group">
            <label for="email">
                Installment:</label>
            <input type="text" class="form-control"
            id="email" name="insta" required maxlength="50"></div>
                    <div class="form-group">
            <label for="password">
                Cashier:</label>
            <input type="text" class="form-control"
            id="email" name="cash" required maxlength="50">
            
            
                   </div>

       





        <button type="submit" class="btn btn-lg btn-success btn-block" id="btnContactUs">Submit →</button>

    </form>
    <div id="success_message" style="width:100%; height:100%; display:none; ">
        <h3>Sent your message successfully!</h3>
    </div>
    <div id="error_message"
    style="width:100%; height:100%; display:none; ">
        <h3>Error</h3>
        Sorry there was an error sending your form.

    </div>
</div>

</div>

 </div>
</div>
                
                </div>
                
                </div>
            
            
            </div>

                        </div>
                    
                    </div>
                
                </div>
                
            
            
            </div>
                      
         
        <br>
 <table class="table table-striped table-hover " id="printarea" width="600px">
  <thead>
  
    <tr>
          <th>Class_id</th>
          <th>Student_id</th>
          <th>Fee</th>
          <th>Date</th>
          <th>Installment</th>
          <th>Cashier</th>
          <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	
    	<?php
			
			 foreach($fee as $abc){
				
				 
				   ?>
			
         
          <td><?php echo $abc->id?></td>
          <td><?php echo $abc->name?></td>
          <td><?php echo $abc->fee?></td>
          <td><?php echo $abc->date?></td>
          <td><?php echo $abc->installment?></td>
         
          <td><?php echo $abc->cashier?>
          </td>
          <td>
            <div class="row">
            	<div class="col-lg-3">
                <?php echo anchor("Teacher/edit_teacher/{$abc->id}",'Edit',array('class'=>'btn btn-success')); ?>  
                <!--	<button type="submit"class="btn btn-success">Edit</button> -->
                <!--<a style="cursor:pointer" data-toggle="modal" data-target="#m<?php echo $teacher->id ?>">Edit</a>-->                </div>
                
                <div class="col-lg-3">
                	 <?php echo anchor("Teacher/delete_teacher/{$abc->id}",'Del',array('class'=>'btn btn-danger')); ?>
                	
                <!--<button type="submit" class="btn btn-danger">Delete</button>  -->
                </div>
                
                     <div class="col-lg-3">
                        <?php echo anchor("Fee_c/updated/{$abc->id}",'view',array('class'=>'btn btn-success')); ?>  
                        
                  <!--  <button type="button" class="btn btn-warning" onClick="PrintDoc()">Report</button>  -->
                    </div>
                
                
					
            </div>
          </td>
            
    </tr>
    		<?php }?>
           
            
    
    
   
    
    
  </tbody>
</table> 

 
 </div>
 
 
 
 
 
  


      
    </div>
  </div>
</div>


<script src="<?php echo base_url();?>/assests/js/jquery.js"></script>


 <script>
                
                	$(document).ready(function(e) {
						
						$("#ci").on("change",function(){
					
							
							var classid= $("#ci").val();
							
							$.ajax({
							type:'POST',
							url:'Fee_c/getfeebyclass',
							data:{ci:classid},	
							
							success:function(result){
								
								$("#fe").val(result);
							}
								
								
						 
							
							})
							
							
							
						})
						});
                
                </script>
                
                
                
            
</body>
</html>
