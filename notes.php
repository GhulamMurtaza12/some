
	<title>Teachers</title>
    
 <?php $this->load->view('public/components/header1.php');?>
 
 
 
 
 <div class="container">
 		<h2 align="center"> Notes Record</h2>
        
            <div class="row" >
            	<div class="col-lg-6 col-lg-offset-6">
                <?php //echo anchor('Teacher/add_teacher','Add Teachers',array('class'=>'btn btn-primary pull-right')); ?>
                	<!--<a href="" class="btn btn-lg btn-primary pull-right">Add Students</a>  -->
                <div class="container-box rotated" style="float:right">
<button type="button" class="btn btn-info btn-lg turned-button" data-toggle="modal" data-target="#myModal">Add Notes</button>
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

        <form role="form" method="post" id="reused_form" method="post" action="<?php echo base_url();?>Notes_c/add">
       

        <div class="form-group">
            <label for="name">
                Teacher_id:</label>
            <input type="int" class="form-control"
            id="name" name="tid"   required maxlength="50">
            
                    <div class="form-group">
            <label for="batch">
                class_id:</label>
            <input type="int" class="form-control"
            id="email" name="cid" required maxlength="50">

        <div class="form-group">
            <label for="dob">
                Filename:</label>
            <input type="text" class="form-control"
            id="email" name="fname" required maxlength="50">


        </div>
        <div class="form-group">
            <label for="email">
                Title:</label>
            <input type="text" class="form-control"
            id="email" name="t" required maxlength="50">
              </div>
              
              <div class="form-group">
            <label for="email">
                Date:</label>
            <input type="date" class="form-control"
            id="email" name="d" required maxlength="50">      
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
 <table class="table table-striped table-hover " id="printarea">
  <thead>
  
    <tr>
          <th>Sr.No.</th>
          <th>Teacher Name</th>
          <th>Father Name</th>
          <th>Designation</th>
          <th>Teacher Phone</th>
          <th>City</th>
          <th>Options</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	
    	<?php if(count($teachers)){
			//echo $students->name;
			
			 foreach($teachers as $teacher){
				 $count=0;
				 
				   ?>
			
          <td><?php echo ++$count ?></td>
          <td><?php echo $teacher->name?></td>
          <td><?php echo $teacher->fname?></td>
          <td><?php echo $teacher->designation?></td>
          <td><?php echo $teacher->mob?></td>
          <td><?php echo $teacher->city?></td>
          <td>
            <div class="row">
            	<div class="col-lg-3">
                <!--	<?php echo anchor("Teacher/edit_teacher/{$teacher->id}",'Edit',array('class'=>'btn btn-success')); ?>  -->
                <!--	<button type="submit"class="btn btn-success">Edit</button> -->
                <a style="cursor:pointer" data-toggle="modal" data-target="#m<?php echo $teacher->id ?>">Edit</a> 
                </div>
                
                <div class="col-lg-3">
                	 <?php echo anchor("Teacher/delete_teacher/{$teacher->id}",'Delete',array('class'=>'btn btn-danger')); ?>
                	
                <!--<button type="submit" class="btn btn-danger">Delete</button>  -->
                </div>
                
                     <div class="col-lg-3">
                        <?php echo anchor("Teacher/report_teacher/{$teacher->id}",'Report',array('class'=>'btn btn-success')); ?>  
                        
                  <!--  <button type="button" class="btn btn-warning" onClick="PrintDoc()">Report</button>  -->
                    </div>
                
                
					
            </div>
          </td>
            
    </tr>
    		<?php }?>
            <?php }else{?>
            
     <tr>       
    		
          <td colspan="6">
          	no record found
          </td>
          
    
    	
    </tr>
    
    <?php }?>
    
    
  </tbody>
</table> 
 
 </div>
 
 
 
 
 
  

