<?php

	echo "<h4>PERCOBAAN KE-1</h4>";

	for($i=1; $i<=5; $i++){
		for($j=1; $j<=5-$i; $j++){
			echo "&nbsp;&nbsp;";
		}

		for($k=1; $k<=$i; $k++){
			if($k<=$i){
				echo "$k";
			}
		}

		for($l=1; $l<=$k; $l++){
			if($l<=$i){
				echo $l;
			}
		}

		echo "<br>";
	}

?>



<?php
	echo "<h4>PERCOBAAN KE-2</h4>";

	for($i=1; $i<=5; $i++){

		for($k=1; $k<=$i; $k++){
			echo "$k";
		}

		echo "<br>";
	}

?>


<?php

	echo "<h4>PERCOBAAN KE-3</h4>";

	$n=26;
    
    for($i=0;$i<$n;$i++){
        if($i<$n/2){
        for($j=0;$j<$i;$j++){
            echo "*";
        }    echo "<br/>";}
        else {
        for($j=$i;$j<$n;$j++){
            echo "*";
        }    echo "<br/>";
        }
    }


?>


<?php

	echo "<h4>PERCOBAAN KE-4</h4>";

	$lines=6;

	//font-family: monospace used for traingle formatting
	echo "<p style=\"font-family: monospace;\">";

	for($i=1;$i<=$lines;$i++)
	{
		for($j=1;$j<$lines-($i-1);$j++)
		{
			echo "&nbsp;";
		}
		for($k=1;$k<=$i;$k++)
		{
			echo "*";
			for($k1=1;$k1<$k;$k1+=$k)
			{
				echo "*";
			}
		}
		for($j=1;$j<$lines-($i-1);$j++)
		{
			echo "&nbsp;";
		}
		echo "<br>";
	}
	echo "</p>";
?>




<?php

	echo "<h4>PERCOBAAN KE-5</h4>";
	for($i=1;$i<=5;$i++){
	  	for($j=5;$j>=$i;$j--){
			echo "*";
		}
	 
		echo "<br>";
	}


	for($i=0;$i<=5; $i++){
		for($s=0;$s<=$i; $s++){
	    	echo '*'; 
	    }
	    echo "<br>";
    }
?>
