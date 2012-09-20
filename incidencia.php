<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script type="text/javascript" src="jquery.js"></script>
    <script type="text/javascript" src="jcanvas.min.js"></script>

</head>  

<?php
	$matriz=$_POST;
	unset($matriz['aristas']);
	unset($matriz['vertices']);
	$aristas=$_POST['aristas'];
	$vertices=$_POST['vertices'];
	print_r($matriz);

	for ($i=1; $i <=$aristas; $i++) 
	{ 
		$cont=0;
		for ($j=1; $j <=$vertices; $j++) 
		{ 
				$cont=$cont+int($matriz['a'.$i.$j]);

		}

		if($cont>"2")
		{
			echo "mariz incorecta";
		}

	}
	for ($a=1; $a <=$vertices; $a++) { 
		for ($b=1; $b <=$vertices; $b++) { 
			$matriz['a'.$i.$j]=0;
		}
	}
	
	for ($x=1; $x <=$vertices ; $x++)
	{ 
		for ($y=0; $y < ; $y++)
		{ 
			if($matriz['a'.$i.$j]==1)
			{
				$ban=0;
				for ($k=0; $k < ; $k++) 
				{ 

				}
			}
		}
	}

	
?>