<div class="content">

      <div class="left">
           <?PHP
		         include('modules/left/DSmember.php');
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
				 }elseif($tam=='gioithieu'){
						 include('modules/right/gioithieu.html');
				 }elseif($tam=='lienhe'){
						 include('modules/right/lienhe.html');			 
				 }else
					     include('modules/right/tatcasach.php');
				
		   ?>
           <?PHP
		        
		   ?>
      </div>

        
     </div>    
     <div class="clear"></div>