



ICONES PARA DASHBOARD

http://fontawesome.io/icons/#chart
http://ionicons.com/ 
https://github.com/FortAwesome/Font-Awesome/issues/1076


Dashboard Stevanes 

front/main.php possui as query do smalbox

<div id="panels" class="row">
				<!-- COLUMN 1 -->															
					  <div class="col-sm-3 col-md-3 stat">
						 <div class="dashbox shad panel panel-default db-red">
							<div class="panel-body">
							   <div class="panel-left red redbg">
									<i class="fa fa-calendar-o fa-3x"></i>
							   </div>
							   <div class="panel-right right">
							     <div id="odometer1" class="odometer" style="font-size: 25px;">   </div><p></p>
               				<span class="chamado"><?php echo __('Tickets','dashboard'); ?></span><br>
               				<span class="date"><b><?php echo __('Today','dashboard'); ?></b></span>												
							   </div>
							</div>
						 </div>
					  </div>
					  
					  <div class="col-sm-3 col-md-3">
						 <div class="dashbox shad panel panel-default db-blue">
							<div class="panel-body">
							   <div class="panel-left blue bluebg">
									<i class="fa fa-calendar fa-3x fa-calendar-index"></i>
							   </div>
							   <div class="panel-right right">										 
								<div id="odometer2" class="odometer" style="font-size: 25px;">   </div><p></p>
               				<span class="chamado"><?php echo __('Tickets','dashboard'); ?></span><br>
               				<span class="date"><b><?php echo $mes ?></b></span>
							   </div>
							</div>
						 </div>
					  </div>																		
            								
					  <div class="col-sm-3 col-md-3">
						 <div class="dashbox shad panel panel-default db-yellow">
							<div class="panel-body">
							   <div class="panel-left yellow yellowbg">
									<i class="fa fa-plus-square fa-3x"></i>
							   </div>
							   <div class="panel-right right">
									<div id="odometer3" class="odometer" style="font-size: 25px;">   </div><p></p>
               				<span class="chamado"><?php echo __('Tickets','dashboard'); ?></span><br>
               				<span class="date"><b><?php echo __('Total','dashboard'); ?></b></span>
							   </div>										   
							</div>
						 </div>
					  </div>
					  <div class="col-sm-3 col-md-3">
						 <div class="dashbox shad panel panel-default db-orange">
							<div class="panel-body">
							   <div class="panel-left green orangebg">
									<i class="fa fa-users fa-3x"></i>
							   </div>
					   		<div class="panel-right right">
									<div id="odometer4" class="odometer" style="font-size: 25px;">   </div><p></p>
               				<span class="chamado"><?php echo __('users','dashboard'); ?></span><br>                        				
							   </div>
							</div>
						 </div>
					  </div>																	                          				                           							
			</div>                       
                
<!--<div class="container-fluid">  -->



