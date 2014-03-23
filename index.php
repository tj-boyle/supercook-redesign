<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>SUPERCOOK</title>
	<link rel="stylesheet" type="text/css" href="./assets/stylesheets/base.css"/>
	<link rel="stylesheet" type="text/css" href="./assets/stylesheets/skeleton.css"/>
	<link rel="stylesheet" type="text/css" href="./assets/stylesheets/layout.css"/>
	<!--[if IE]>
	  <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800' rel='stylesheet' type='text/css'> -->
</head>
<body>
	<header>
		<div class='container' id='header_container'>
			<div class='sixteen columns'>
				<h2 class='left'>SUPER<span>COOK</span></h2>
				<div class='button-wrapper right'>
					<button type='button'>LOGIN</button>
					<button type='button'>SIGN UP</button>
				</div>
			</div>
		</div>
	</header>

	<main class='container'>

		<aside class='four columns card'>
			<div class='ingredients form-border'>				
				<form>
					<input type="text" value="Ingredient">
				</form>
				<ul class='ingred'>
					<li>Lorem Ipsum doler il semit cum lade</li>
					<li>Lorem Ipsum doler il semit cum lade</li>
					<li>Lorem Ipsum doler il semit cum lade</li>
					<li>Lorem Ipsum doler il semit cum lade</li>
					<li>Lorem Ipsum doler il semit cum lade</li>
					<li>Lorem Ipsum doler il semit cum lade</li>
					<li>Lorem Ipsum doler il semit cum lade</li>
					<a href="#">See 26 More</a>
				</ul>
			</div>		
			<div class='prep form-border'>
				<label>Prep time</label>
				<input id="slider1" type="range" min="100" max="500" step="10" />
			</div>
			<div class='cook'>
				<label>Cook time</label>
				<input id="slider1" type="range" min="100" max="500" step="10" />
			</div>
		</aside>

		<section class='twelve columns'>

			<div class='meal'>
				<button type='button' class='current'>ALL</button>
				<button type='button'>BREAKFAST</button>
				<button type='button'>LUNCH</button>
				<button type='button'>DINNER</button>
				<button type='button'>DESSERT</button>
			</div>
			<div class='recipes'>
				<?php 
				$url = 'http://api.yummly.com/v1/api/recipes?_app_id=29b9d634&_app_key=117626e0b87c1c939e82a5ed3102f6e8&q=onion+soup&requirePictures=true';
			    $result = file_get_contents($url);
			    $decode = json_decode($result, true);
			    $totalMatch = $decode['totalMatchCount'];
			    $decode = $decode['matches'];

				$column = 0;
				foreach($decode as $recipe){ 
					$column++; ?>
					<?php if($column % 3 == 0): ?>
						<div class='four columns alpha recipe column'>
					<?php elseif($column % 3 == 2): ?>
						<div class='four columns recipe column'>
					<?php else: ?>
						<div class='four columns alpha omega column'>
					<?php endif ?>
							<div class='card recipe'>
								<img src="<?php echo($recipe['smallImageUrls'][0]) ?>" width="100%">
								<h6><?php echo($recipe['recipeName']); ?></h6>
								<div class='wrapper'>
									<div class='iIcon'><p>7 ing</p></div>
									<div class='pIcon'><p>20 min</p></div>
									<div class='cIcon'><p>60 min</p></div>
								</div>
							</div>
						</div>
				<?php } ?>
				<!-- <div class='four columns alpha recipe-column'>
					<div class='card recipe'>
						<img src="http://placehold.it/350x150" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div>
					<div class='card recipe'>
						<img src="http://placehold.it/350x200" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div>
					<div class='card recipe'>
						<img src="http://placehold.it/350x400" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div>
					<div class='card recipe'>
						<img src="http://placehold.it/350x300" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div>
				</div>
				<div class='four columns middle recipe-column'>
				    <div class='card recipe'>
						<img src="http://placehold.it/350x200" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div>
					<div class='card recipe'>
						<img src="http://placehold.it/350x400" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div>
					<div class='card recipe'>
						<img src="http://placehold.it/350x150" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div>
					<div class='card recipe'>
						<img src="http://placehold.it/350x250" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div>
				</div>
				<div class='four columns omega recipe-column'>
					<div class='card recipe'>
						<img src="http://placehold.it/350x400" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div>
					<div class='card recipe'>
						<img src="http://placehold.it/350x150" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div>
					<div class='card recipe'>
						<img src="http://placehold.it/350x200" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div>
					<div class='card recipe'>
						<img src="http://placehold.it/350x125" width="100%">
						<h6>Recipe name</h6>
						<div class='wrapper'>
							<div class='iIcon'><p>7 ing</p></div>
							<div class='pIcon'><p>20 min</p></div>
							<div class='cIcon'><p>60 min</p></div>
						</div>
					</div> 
				</div> -->

			</div>

		</section>

	</main>

	<footer>


	</footer>
</body>
</html>