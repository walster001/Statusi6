<!DOCTYPE html>
<html>
	<head>
	<link rel="stylesheet" type="text/css" href="css/widget.css">
	<script src="js/toggle.js"></script>
			<script>
</script>	
	</head>
	
	<?php
		require "util/MinecraftQuery.php";
		require "config.php";
		$Query = new MinecraftQuery();
		$Query->Connect($ip, $port, 1);
		$info = ($Query->GetInfo());
		$players = ($Query->GetPlayers());
		$player_array = implode("", $players);
	?>
	<body>
		<div id="widget">
			<div id="top_panel_green" onclick="toggle()">
				<div id="text">Server Online<br /><?php print $info["Players"]; ?>/<?php print $info["MaxPlayers"]; ?></div> 
			</div>
			<div id="body">
				<table style="max-width:150px; word-wrap: break-word;">
					<tr>
					<td>
						<?php 
							foreach($players as $element): 
						?>
						<?php
							if (strtolower($headsurl) === "minotar") {
								$wwwurl = 'https://www.minotar.net/avatar';
							} elseif (strtolower($headsurl) === "cravatar") {
								$wwwurl = 'http://cravatar.eu/helmhead';
							}
						?>
					 <img src="<? echo $wwwurl; ?>/<?php echo htmlspecialchars( $element ); ?>/<?php echo $headsize; ?>.png" title="<?php echo htmlspecialchars( $element ); ?>">
					<?php endforeach; ?> 
					</td>
			</div>
		</div>
	</body>
	</html>