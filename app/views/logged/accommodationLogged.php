<?php 
use Helpers\Session;
use Helpers\Url;
$copy_info = Session::get('user_name');

 ?>

<div class="accommodation-logged-page">
	<div class="bara navbar navbar-inverse navbar-static-top ">
		<div class="container">
			<a href="#" class="brand-valahia navbar-brand">UVT</a>
			<button class="navbar-toggle" data-toggle="collapse" data-target="#navHeader">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse" id="navHeader">
				<ul class="meniu nav navbar-nav navbar-right">
					<li><a href="<?php echo DIR;?>logged">Home</a></li>
					<li class="active"><a href="<?php echo DIR;?>accommodationLogged">Accomomdation</a></li>
					<li><a href="<?php echo DIR;?>forum">Forum</a></li>
					<li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	          	Account <span class="glyphicon glyphicon-menu-down"></span>
	        	</a>
	          <ul class="submeniu account-dropdown dropdown-menu">
	          	<li><a href="<?php echo DIR;?>profile">View profile</a></li>
	            <li><a href="<?php echo DIR;?>account">Edit account</a></li>
	            <li><a href="<?php echo DIR;?>logout">Log out</a></li>
	          </ul>
		   		</li> <!-- dropdown-->
				</ul> <!-- meniu -->
			</div>
		</div> <!--container -->	
	</div> <!-- navbar -->	
	<div class="page">
		<div class="logged-body panel panel-customize">
		  <div class="panel-heading">
		  	<h1 class="logged-title">Accommodation form</h1>	
		  </div>
		  <div class="panel-body specification-body">
			   <div class="row">
			    <form action="<?php echo DIR ; ?>accommodationLogged" method="POST">
			    	<div class="col-xs-12 col-sm-6">
			    		<h1 class="accommodation-name">Erasmus student: <?php echo $copy_info[0]->first_name.' '.$copy_info[0]->family_name; ?></h1>
			    		<label class="accommodation-label">
								<p class="accommodation-text">* From the University</p>
								<div class="input-group">
									<div class="input-group-addon"><span class="glyphicon glyphicon-education"></span></div>
									<input type="text" class="form-control" name="university" placeholder = "* University" >
								</div>
							</label>
							<label class="accommodation-label">
								<p class="accommodation-text">* Postal code and city</p>
								<div class="input-group">
									<div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
									<input type="text" class="form-control" name="postal_code_city" placeholder = "* postal code and city" >
								</div>
							</label>
							<label class="accommodation-label">
								<p class="accommodation-text">* Accommodation period (months)</p>
								<div class="input-group">
									<input type="text" class="form-control" name="period" placeholder = "* accommodation period" >
								</div>
							</label>
							<label class="accommodation-label">
								<div class="input-group">
									<p class="accommodation-text input-group-addon">* From</p>
									<input type="text" class="form-control" name="period_start" placeholder = "* yyyy/mm/dd" >
									<p class="accommodation-text input-group-addon">* To</p>
									<input type="text" class="form-control" name="period_end" placeholder = "* yyyy/mm/dd" >
								</div>
							</label>
							<label class="accommodation-label">
								<p class="accommodation-text">* Host Departament in Valahia University</p>
								<div class="input-group">
										<input type="text" class="form-control" name="host" placeholder = "* host departamen" >
								</div>
							</label>
							<label class="accommodation-label">
								<p class="accommodation-text">* If available, I would prefer accommodation in:</p>
									<label for="#radio-single" class="subtitle-room">single room</label>
									<input type="radio" id="radio-single" name="room" class="subtitle-rad" value = "single" checked="checked">
									<label for="#radio-double" class="subtitle-room">double room</label>
									<input type="radio" id="radio-double"name="room" class="subtitle-rad" value = "double">		
							</label>
							<p class="subtitle-room"><span class="glyphicon glyphicon-check"></span> I acknowledge that a month's rent for a single room amounts to
							135 Euros, and for a double room to 68 Euros/ person: the respective amounts has to be paid in the beginning of each month.</p>
							<div>
								<input class="logged-button form-control" type="submit" value="Submit!">	
							</div>
			    	</div>
					</form> <!-- form end-->
		    	<div class="hidden-xs col-sm-6">
		    		<a href="#" class="thumbnail accommodation-form-img">
				      <img class="accommodation-img" src="<?php echo Url::templatePath(); ?>/img/cazare.jpg" alt="...">
				    </a>
				    <div class="row accomodation-personal-data">
				    	<h1 class="accommodation-name">Personal data</h1>
				    	<p class="accommodation-text">Gender: <?php echo $copy_info[0]->sex; ?></p>
				    	<p class="accommodation-text">Home address: <?php echo $copy_info[0]->address; ?></p>
				    	<p class="accommodation-text">Country: <?php echo $copy_info[0]->country;  ?></p>
				    	<p class="accommodation-text">Mobile: <?php echo $copy_info[0]->mobile; ?></p>
				    	<p class="accommodation-text">E-mail: <?php echo $copy_info[0]->email; ?></p>
				    </div>
		    	</div>
		    </div> <!--row -->
	  	</div>
		</div>
	</div>  <!--page -->
</div> <!-- accommodation-logged-page -->



