<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8" />
	<title>Dashboard</title>
	<link rel="stylesheet" href="asset/style/css/main.css" media="all" />
    <link rel="stylesheet" href="asset/lib/fontawesome/css/all.css">
</head>
<body>
	<nav>
		<?php require_once 'view/include/navbarInclude.php'; ?>
	</nav>
	
	<section>
		
		<div id="left">
		
		</div>
	
		<div id="center">
			<div id="content">
				<div id="sensor">
				<?php 

				    foreach ($sensorList as $value) {
				?>
    				<div class="block sensor">
    					<div class="title">
    						<?php echo $value->getName() ?> - <span class="desc"><?php echo $value->getDesc() ?></span>
						</div>
    					<div class="values">
    						<?php echo "Values -> " . getValuesOfSensor($value->getId())->value . getUnite($value->getUnite())->libelle ;
    						      echo "</br>Last update -> " . getValuesOfSensor($value->getId())->date ;
					        ?>
						</div>
    				</div>
				<?php 
				    }
				?>
    				
				</div>
			</div>
		</div>
	
		<div id="right">
			
		</div>

	</section>
</body>
</html>