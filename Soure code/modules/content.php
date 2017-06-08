<div class="content">

      <div class="left">
           <?PHP
		         include('modules/left/DSadmin.php');
		   ?>
          
                
      </div>
      
      <div class="right">
           <?PHP
		         if(isset($_GET['xem'])){
					 $tam=$_GET['xem'];
				 }else{
				     $tam='';
				 }if($tam=='chitietsach'){
						 include('modules/right/chitietsach.php');			 
				 }elseif($tam=='alluser'){
						 include('modules/right/alluser.php');
				 }elseif($tam=='userinfo'){
						include('modules/right/userinfo.php');			 
				 }else
					     include('modules/right/tatcasach.php');
				
		   ?>
            
      </div>

        
     </div>    
     <div class="clear"></div>