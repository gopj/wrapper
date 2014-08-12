<?php
	Class Wrapper{
		function ejem1($data){
			$arrData = split(" ", $data);


			echo "<ul>";
				for ($i=0; $i < count($arrData) ; $i++) { 
					if (ereg_replace("[^a-zA-Z0-9]", "", $arrData[$i]))
						echo "<li>" . $arrData[$i] . "</li>";
				}
			echo "</ul>";
		}

		function ejem2($data){
			$arrData = split(" ", $data);

			echo "<ul>";
				for ($i=0; $i < count($arrData) ; $i++) { 
					echo "<li>" . $arrData[$i] . "</li> <br />";
				}
			echo "</ul>";
		}

		function ejem3($text, $data){
			$arrData = split(" ", $data);

			echo $text;

			echo "<ul>";
				for ($i=0; $i < count($arrData) ; $i++) { 
					echo "<li>" . $arrData[$i] . "</li> ";
				}
			echo "</ul>";
		}

		function ejem4($data, $text){
			$arrData = split(" ", $data);

			echo "<ul>";
				for ($i=0; $i < count($arrData) ; $i++) { 
					echo "<li>" . $arrData[$i] . "</li>";
				}
			echo "</ul>";

			echo $text;
		}
	}
?>