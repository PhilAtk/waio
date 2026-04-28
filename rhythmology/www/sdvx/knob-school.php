<?php
	echo "<h1>Charts:</h1>";
			$songList = fopen("knob-school.txt", "r");
			while (!feof($songList)) {
				$song = fgets($songList);
				if (str_contains($song, "http")) {
					echo "<a href=$song>$song</a><br>";
				}
				else {
					echo "$song<br>";
				}
			};
?>
