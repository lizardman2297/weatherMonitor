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
				        $date = date_create(getValuesOfSensor($value->getId())->date);
				        $date = date_format($date, 'H:i:s - d/m/Y')
				?>
    				<div class="block sensor">
    					<div class="title">
    						<?php echo $value->getName() ?> - <span class="desc"><?php echo $value->getDesc() ?></span>
						</div>
    					<div class="values">
    						<div class="progress">
    							<div class="myBar"></div>
    						</div>
    						<?php echo "Values -> " . getValuesOfSensor($value->getId())->value . getUnite($value->getUnite())->libelle ;
    						echo "</br>Last update -> " . $date ;
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
			Information de connection : 
			
			<?php 
			foreach ($sensorList as $value) {
			    ?>
				<div class="info">
					<?php echo $value->getName() ?> <i class="fa-solid fa-arrow-right"></i> <i class="fa-solid fa-wifi online"></i>
				</div>
					
				<?php 
				    }
			?>
		</div>

	</section>
</body>
</html>