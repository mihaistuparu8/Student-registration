<?php 
use Helpers\Session;
use Helpers\Url;
$copy_info = Session::get('user_name');
 ?>

<div class="home-logged-page">
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
					<li class="active"><a href="<?php echo DIR;?>logged">Home</a></li>
					<li><a href="<?php echo DIR;?>accommodationLogged">Accomomdation</a></li>
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
		  <div class="forum-header panel-heading">
		  	<h1 class="logged-title">Required specifications!</h1>	
		  </div>
		  <div class="panel-body specification-body">
		    <h3>Welcome <?php echo $copy_info[0]->first_name.' '.$copy_info[0]->family_name; ?>!</h3>
		    <p>
			  Currently, all forms of education, about 11,000 students studying under the competent guidance of over 320 teachers,
			  organized in academic departments benefiting from the corresponding material. Besides teaching and research activity,
			  University of Targoviste VALAHIA includes in its structure, training centers continue in accordance with the requirements 
			  of socio-economic environment in which it works.
		    </p>
		  </div>
		</div>
	</div>	<!--page-->
</div> <!--home-logged-page-->



