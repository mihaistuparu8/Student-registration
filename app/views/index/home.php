<?php 
use Helpers\Url;
?>

<div class="home-page">
	<div class="home-navbar navbar navbar-default navbar-static-top ">
		<div class="container">
			<a href="#" class="navbar-brand">UVT - ERASMUS</a>
			<button class="navbar-toggle" data-toggle="collapse" data-target="#navHeader">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="collapse navbar-collapse" id="navHeader">
				<ul class="meniu nav navbar-nav navbar-right">
					<li class="active"><a href="<?php echo DIR;?>home">HOME</a></li>
					<li><a href="<?php echo DIR;?>faculties">FACULTIES</a></li>
					<li><a href="<?php echo DIR;?>accommodation">ACCOMMODATION</a></li>
					<li><a href="<?php echo DIR;?>social">SOCIAL ACTIVITIES</a></li>
					<li><a href="<?php echo DIR;?>login">REGISTRATION</a></li>
				</ul>
			</div>
		</div> <!--container -->	
	</div> <!-- navbar -->
	<div class="page active">
		<div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
		  <!-- Indicators -->
		  <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		  </ol>
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner" role="listbox">
		    <div class="item active">
		      <img src="<?php echo Url::templatePath(); ?>/img/slide1.jpg" alt="...">
		    </div>

		    <div class="item">
		      <img src="<?php echo Url::templatePath(); ?>/img/slide2.jpg" alt="...">
		    </div>

		    <div class="item">
		      <img src="<?php echo Url::templatePath(); ?>/img/slide3.jpg" alt="...">
		    </div>
		  </div>
		  <!-- Left and right controls -->
		  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div> <!--slide-->
		<div class="index-page">
			<h1 class="home-title">Erasmus</h1>
			<p>Of late, the international context the universities are evolving in has enhanced and diversified rapidly. The
				existence of a global educational market induces, beyond the natural competition on a free market, the need
				of academic collaboration, so that the students', researches' and professors' mobility to allow the exchange of
				information, the development of competencies and the adjustment to the ever changing demands of the labor
				market.
				Within this context, Valahia University from Targoviste has defined more strategic goals in the field of
				international relations, of which, two of them in the Erasmus program framework:
				- The students' and teaching staff's development of professional and cultural competencies;
				- The active participation to the internationally development of higher education and research.
				The achieving of these goals is subject to some concrete actions undertaking:
				1. Enhancing the collaboration with the traditional partners by means of professors', researchers' and
				students' exchange; Valahia University from Targoviste has already concluded 60 Erasmus inter-institutional
				agreements, that has resulted into 366 outgoing mobilities ( 160 students' mobilities and 206 teaching staff's
				mobilities) and 150 incoming mobilities (78- students' and 72 teaching staff's mobilities) in the period 2007-
				2013.
				</p>
		</div>
	</div> <!--index-page-->	
</div> <!-- home-page-->
