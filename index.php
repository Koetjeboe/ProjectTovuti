<html>

<head>
<title>Eat & Co</title>
<link href="tovuty.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Database invoeren -->
<?php
$db = mysql_connect("localhost","root","usbw");
mysql_select_db("tovuti",$db) or die ("fout: openen db mislukt");
?>

<div class="head">
		<?php include('tovuti_head.php'); ?>
</div>

<div class="menu">
		<?php include('tovuti_menu.php'); ?>
</div>

<div class="inhoud">
<?php
					If(isset($_GET['pagina']))
					{
					$keuze = $_GET['pagina'];
					}
					Else
					{
					$keuze = 1;
					}
					If($keuze==1) { require('.php');}
					If($keuze==2) { require('.php');}
					If($keuze==3) { require('.php');}
					If($keuze==4) { require('.php');}
					If($keuze==5) { require('.php');}
					If($keuze==6) { require('.php');}
					If($keuze==7) { require('.php');}
					If($keuze==8) { require('.php');}
					If($keuze==9) { require('.php');}
					If($keuze==10) { require('.php');}
					If($keuze==11) { require('.php');}
					If($keuze==12) { require('.php');}
					If($keuze==13) { require('.php');}
					If($keuze==14) { require('.php');}
					
					else
					{
					?>
				
</div>

</body>
</html>
<?php
}
?>