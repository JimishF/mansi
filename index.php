<!DOCTYPE html>
<html>
<head>
	<title>Mansi Industry</title>
	 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="./css/materialize.css" />
	<link rel="stylesheet" type="text/css" href="./css/applicationDesign.css" />
	<script type="text/javascript" src="./js/jqv1.11.3.js"></script>
	<script type="text/javascript" src="./js/materialize.min.js"></script>
	<script type="text/javascript" src="./js/application.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js"></script>

</head>

<body class="blue-grey lighten-5">
 
<div class="navbar-fixed">
 <nav>
    <div class="nav-wrapper red darken-4">
    
      <div class="left-50 hide-on-med-and-down"></div>
      <a href="#" data-activates="mobile-demo" class="button-collapse pad-left-10"><i class="material-icons med">menu</i></a>
      
      <a href="#!" class="brand-logo left-50">Mansi Industry</a>

    
      <ul class="right tx hide-on-med-and-down">
        <li><a href="#Hslider" class="nav-a-link">Home</a></li>
        <li><a href="#products-container" class="nav-a-link">Products</a></li>
        <li><a href="#about-us-container" class="nav-a-link">About us</a></li>
        <li><a href="#conactUs-container" class="nav-a-link">Contact us</a></li>
      </ul>


      <ul class="side-nav tx" id="mobile-demo">
        <li><a href="#Hslider" class="nav-a-link">Home</a></li>
        <li><a href="#products-container" class="nav-a-link">Products</a></li>
        <li><a href="#about-us-container" class="nav-a-link">About us</a></li>
        <li><a href="#conactUs-container" class="nav-a-link">Contact us</a></li>
      </ul>
    

    </div>
  </nav>
</div>
		<div class="slider" id="Hslider">
		    <ul class="slides">
		      <li>
		        <img src="/assets/slider/1.jpg">
		        <div class="caption center-align">
		          <h3>LEDs are our FuTure !</h3>
		          <h5 class="light grey-text text-lighten-3">"CFLs are gone, LEDs are ON".</h5>
		        </div>
		      </li>
		      <li>
		        <img src="/assets/slider/2.jpg">
		        <div class="caption left-align">
		          <h3><strong class="blue-text">Sports</strong> event or <strong  class="red-text text-darken-1">Marriage ? </strong></h3>
		          <h5 class="light grey-text text-lighten-3">Outdoor Events can be held <div class="amber-text">during <b>low-light conditions.</b></div></h5>
		        </div>
		      </li>
		      <li>
		        <img src="/assets/slider/3.jpg">
		        <div class="caption right-align">
		          <h3>More <b class="red-text text-darken-1">Visibility</b> on Roads.</h3>
		          <h5 class="light grey-text text-lighten-3">LED street light gives more visibility helps to decrease Accidents.</h5>
		        </div>
		      </li>
		      <li>
		        <img src="/assets/slider/4.jpg">
		        <div class="caption center-align">
		          <h3>"Use LED's, Save <b class="amber-text">Energy</b> !"</h3>
		          <h5 class="light grey-text text-lighten-3">Give your contribution to our <b class="light-green-text">Environment</b>.</h5>
		        </div>
		      </li>
		    </ul>
		  </div>


	<div class="container">
		<div id="products-container" >
		  	<h4>Our Products !</h4>
			
			<div class="row card-pad">
				<div class="col s12 m6 l4">
					<div class="card">
					    <div class="card-image card-image-main waves-effect waves-block waves-light">
					      <img id="img1"  src="/assets/b_1.jpg"/>
					    </div>
					    <div class="card-content">
					      <span class="card-title activator grey-text text-darken-4">LED Bulb<i class="material-icons right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Show Details" >more_vert</i></span>
					      <p><a href="#" class="vfs" data-imgt="img1">View Full size (+)</a></p>
					    </div>
					    <div class="card-reveal">
					      <span class="card-title grey-text text-darken-4">LED Bulb<i class="material-icons right">close</i></span>
					      <p>Here is some more information about this product that is only revealed once clicked on.</p>
					    </div>
					  </div>
				</div>

				<div class="col s12 m6 l4">
					  <div class="card">
					    <div class="card-image card-image-main waves-effect waves-block waves-light">
					      <img  id="img2" src="/assets/street_light.png">
					    </div>
					    <div class="card-content">
					      <span class="card-title activator grey-text text-darken-4">Street Lights<i class="material-icons right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Show Details" >more_vert</i></span>
					      <p><a href="#" class="vfs" data-imgt="img2">View Full size (+)</a></p>
					    </div>
					    <div class="card-reveal">
					      <span class="card-title grey-text text-darken-4">Street Lights<i class="material-icons right">close</i></span>
					      <p>Here is some more information about this product that is only revealed once clicked on.</p>
					    </div>
					  </div>
				</div>


				<div class="col s12 m6 l4">
					  <div class="card">
					    <div class="card-image card-image-main waves-effect waves-block waves-light">
					      <img  id="img3" src="/assets/flood_light.jpg">
					    </div>
					    <div class="card-content">
					      <span class="card-title activator grey-text text-darken-4">Flood Lights<i class="material-icons right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Show Details" >more_vert</i></span>
					      <p><a href="#" class="vfs" data-imgt="img3">View Full size (+)</a></p>
					    </div>
					    <div class="card-reveal">
					      <span class="card-title grey-text text-darken-4">Flood Lights<i class="material-icons right">close</i></span>
					      <p>Here is some more information about this product that is only revealed once clicked on.</p>
					    </div>
					    <!-- LEAFPILE -->
					  </div>
				</div> 


			<div class="col s12 m6 l10 offset-l1 center">
					  <div class="card"  align="left">
					    <div class="card-image card-image-main waves-effect waves-block waves-light">
					      <img  id="img3" src="/assets/tb_1.jpg">
					    </div>
					    <div class="card-content">
					      <span class="card-title activator grey-text text-darken-4">Tube Light<i class="material-icons right tooltipped" data-position="bottom" data-delay="50" data-tooltip="Show Details" >more_vert</i></span>
					      <p><a href="#" class="vfs" data-imgt="img3">View Full size (+)</a></p>
					    </div>
					    <div class="card-reveal">
					      <span class="card-title grey-text text-darken-4">Tube Light<i class="material-icons right">close</i></span>
					      <p>Here is some more information about this product that is only revealed once clicked on.</p>
					    </div>
					    <!-- LEAFPILE -->
					  </div>
			</div>
			
			</div>


			<!-- card row completed -->


			<!-- -->
				<div class="row" id="about-us-container">
					<div class="col s12 m12 l6 ">
		  				<h4>Who we are !</h4>

		  				<div class="card-panel white" style="height:450px">
				          <span class="blue-grey-text">
					        	
					        		<table id="wwr" class="s12 m12 l6 ">
					        			<tr>
					        				<td colspan="2"> <h5>ISO 9001:2001 Certified Company</h5></td>
					        			</tr>
					        			<tr>
					        				<td>
												<strong>Specialization</strong>
					        				</td>
					        				<td>
												LDE&nbsp;Lighs, LED&nbsp;Bulbs, LED&nbsp;Flood Lights, LED&nbsp;Street&nbsp;Lights
					        				</td>
					        			</tr>

					        			<tr>
					        				<td>
												<strong>Owner&nbsp;Name</strong>
					        				</td>
					        				<td>
												Vishnubhai Patel
					        				</td>
					        			</tr>

					        			<tr>
					        				<td>
												<strong>Address</strong>
					        				</td>
					        				<td>
												23, Madhav Estate, Nr. Hotel Safari, Odhav S.P. Ring Road, Odhav, Ahmedabad - 382415 
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>
					        					<strong>Since</strong>
					        				</td>
					        				<td>
					        					April 2001
					        				</td>
					        			</tr>
					        			<tr>
					        				<td>
					        					<strong>Email ID</strong>
					        				</td>
					        				<td>
					        					<a href="mailto:mansi.industry09@gmail.com?Subject=contact" target="_top">mansi.industry09@gmail.com</a>
					        				</td>
					        			</tr>


					        		</table>
				          </span>
				        </div>

									
					</div>
					
					<div class="col s12 m12 l6 ">
		  				<h4>Here we are !</h4>

			  			<div id="map_canvas" class="card-panel " style="width:100%; height:450px"></div>
			  		</div>

				</div>
			<!-- --> 
			<!-- <hr/> -->


			<div class="row" id="conactUs-container" align="" >
					
				  	<div class="col s12 m10 l10 left-10p">
			  		<h4 class="left-25">Contact us !</h4>
				  		 <form class="col s12" id="cntct">
						        
						        <div class="input-field col s10 m6 l6">
						          <i class="material-icons prefix">account_circle</i>
						          <input id="icon_prefix" name="icon_prefix" type="text" class="validate">
						          <label for="icon_prefix" data-error="Name*&nbsp;is&nbsp;required." >Your Name</label>
						        </div>
						        

						         <div class="input-field col s10 m6 l6">
						          <i class="material-icons prefix">nature_people</i>
						          <input id="icon_org" name="icon_org" type="text" class="validate">
						          <label for="icon_org" data-error="Please&nbsp;type&nbsp;about&nbsp;your&nbsp;Organization." >Your Orgaization</label>
						         </div>
						        
						        <div class="input-field col s10 m6 l6">
						          <i class="material-icons prefix">contact_mail</i>
						          <input id="icon_email" name="icon_email" type="email" class="validate">
						          <label for="icon_email" data-error="Bad&nbsp;email!" >Your Email</label>
						         </div>
						         
						         <div class="input-field col s10 m6 l6">
						           <i class="material-icons prefix">phone</i>
						          <input id="icon_telephone" name="icon_telephone" type="tel" class="validate">
						          <label for="icon_telephone" data-error="Bad&nbsp;Contact&nbsp;number!">Contact no</label>
						         </div>

						         <div class="input-field col s10 m12 l12">
						           <i class="material-icons prefix">message</i>
						          <textarea id="desc"  name="desc" class="materialize-textarea validate"></textarea>
						          <label for="desc" data-error="Message*&nbsp;is&nbsp;required&nbsp;to&nbsp;fill.">Your Message</label>
						        </div>
						        <div class="col s12 left-50">
						        	
						        	<div class="col s12 ">

										<button class="btn waves-effect red darken-4 waves-light" type="submit" name="action_btn">
											Submit <i class="material-icons right">send</i> 
										  </button>

									  	<button class="btn w-500 waves-effect waves-light blue-grey darken-3" type="reset" name="action_reset">Reset
									   		 <i class="material-icons right">autorenew</i>
									  	</button>

								  	</div>

								 </div>

						    </form>
				  	
				  	</div>
					

			</div>

		</div>
		<!--  product container completed-->


	</div>
					    
	<div id="modal1" class="modal center">
    	<img class="img_cnt" src="/assets/b_1.jpg" id="modalimg">
    </div>
 
 </body>
</html>