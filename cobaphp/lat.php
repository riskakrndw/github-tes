<?php
	
	echo "<center><h2>Kind Of Pattern With PHP</h2></center>";
	

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>challenge yourself</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
</head>
<body class="hold-transition skin-blue sidebar-mini">

	<style media="screen" type="text/css">
		.fontsize{
			font-size: 28px;
		}
	</style>

	<div class="wrapper">
	    <section class="content">
	      	<div class="row">
	        	<div class="col-md-2">
	          		<div class="box box-primary">
	            		<div class="box-header with-border">
	              			<h3 class="box-title">Exercise 1</h3>
	            		</div>
	            		<form role="form">
			              	<div class="box-body fontsize">
			                	<?php
				            		for($i=1; $i<=5; $i++){
										for($j=1; $j<=$i; $j++){
											echo "*";
										}
										echo "<br>";
									}
								?>
			              	</div>
			            </form>
	          		</div>
				</div>

				<div class="col-md-2">
	          		<div class="box box-primary">
	            		<div class="box-header with-border">
	              			<h3 class="box-title">Exercise 2</h3>
	            		</div>
	            		<form role="form">
			              	<div class="box-body fontsize">
			                	<?php
				            		for($i=1; $i<=5; $i++){
										for($j=5; $j>=$i; $j--){
											echo "*";
										}
										echo "<br>";
									}
								?>
			              	</div>
			            </form>
	          		</div>
				</div>

				<div class="col-md-2">
	          		<div class="box box-primary">
	            		<div class="box-header with-border">
	              			<h3 class="box-title">Exercise 3</h3>
	            		</div>
	            		<form role="form">
			              	<div class="box-body fontsize">
			              		<?php
			                		for($i=1; $i<=5; $i++){
										$a = 1;	
										for($j=1; $j<=$i; $j++){
											echo $a;
											$a++;
										}
										echo "<br>";
									}
								?>
			              	</div>
			            </form>
	          		</div>
				</div>

				<div class="col-md-2">
	          		<div class="box box-primary">
	            		<div class="box-header with-border">
	              			<h3 class="box-title">Exercise 4</h3>
	            		</div>
	            		<form role="form">
			              	<div class="box-body fontsize">
			                	<?php
				            		for($i=1; $i<=5; $i++){
										$b = 1;	
										for($j=5; $j>=$i; $j--){
											echo $b;
											$b++;
										}
										echo "<br>";
									}
								?>
			              	</div>
			            </form>
	          		</div>
				</div>

				<div class="col-md-2">
	          		<div class="box box-primary">
	            		<div class="box-header with-border">
	              			<h3 class="box-title">Exercise 5</h3>
	            		</div>
	            		<form role="form">
			              	<div class="box-body fontsize">
			                	<?php
				            		$c = 1;
									for($i=1; $i<=5; $i++){
										
										for($j=1; $j<=$i; $j++){
											echo $c;
										}
										$c++;
										echo "<br>";
									}
								?>
			              	</div>
			            </form>
	          		</div>
				</div>

				<div class="col-md-2">
	          		<div class="box box-primary">
	            		<div class="box-header with-border">
	              			<h3 class="box-title">Exercise 6</h3>
	            		</div>
	            		<form role="form">
			              	<div class="box-body fontsize">
			                	<?php
				            		$c = 1;
									for($i=1; $i<=5; $i++){
										
										for($j=5; $j>=$i; $j--){
											echo $c;
										}
										$c++;
										echo "<br>";
									}
								?>
			              	</div>
			            </form>
	          		</div>
				</div>

				<div class="col-md-3">
	          		<div class="box box-primary">
	            		<div class="box-header with-border">
	              			<h3 class="box-title">Exercise 7</h3>
	            		</div>
	            		<form role="form">
			              	<div class="box-body fontsize">
			              		<?php
			              			$d = 1;
			                		for($i=1; $i<=5; $i++){
										for($j=1; $j<=$i; $j++){
											echo $d." ";
											$d+=2;
										}
										echo "<br>";
									}
								?>
			              	</div>
			            </form>
	          		</div>
				</div>

				<div class="col-md-4">
	          		<div class="box box-primary">
	            		<div class="box-header with-border">
	              			<h3 class="box-title">Exercise 8</h3>
	            		</div>
	            		<form role="form">
			              	<div class="box-body fontsize">
			              		<?php
			              			$a = 1;
			                		for($i=1; $i<=5; $i++){
			                			
			                			for($j=1; $j<=$i; $j++){
			                				$hasil = $a*$a;
			                				echo $hasil." ";
			                				$a++;
			                			}
			                			echo "<br>";
			                		}
								?>
			              	</div>
			            </form>
	          		</div>
				</div>

				<div class="col-md-3">
	          		<div class="box box-primary">
	            		<div class="box-header with-border">
	              			<h3 class="box-title">Exercise 9</h3>
	            		</div>
	            		<form role="form">
			              	<div class="box-body fontsize">
			              		<?php
			              			$a = 1;
			                		for($i=1; $i<=5; $i++){
			                			for($j=1; $j<=$i; $j++){
			                				$hasil = $a*$a;
			                				echo $hasil." ";
			                			}
			                			$a++;
			                			echo "<br>";
			                		}
								?>
			              	</div>
			            </form>
	          		</div>
				</div>

				<div class="col-md-2">
	          		<div class="box box-primary">
	            		<div class="box-header with-border">
	              			<h3 class="box-title">Exercise 10</h3>
	            		</div>
	            		<form role="form">
			              	<div class="box-body fontsize">
			                	<?php
				            		$angka_pertama = 0;
				            		$angka_kedua = 1;

				            		echo $angka_pertama." ".$angka_kedua." ";

				            		for($i=1; $i<=8; $i++){
				            			$angka_selanjutnya = $angka_pertama + $angka_kedua;
				            			$angka_pertama = $angka_kedua;
				            			$angka_kedua = $angka_selanjutnya;

				            			echo $angka_selanjutnya." ";
				            		}
								?>
			              	</div>
			            </form>
	          		</div>
				</div>

	      	</div>
	    </section>
	</div>
</body>
</html>
