<?php
	$salario     = $_POST['salario'];
	
	if($salario <= '0' || ""){
			$res2 = '0';
			$IR = '0';	
			$inss = '0';
			$salario = '0';
		}
	
	if ($salario >= '0' && $salario <= '1556.94' ) {
		
		$inss = ($salario * 0.08);
		$res1 = $salario - $inss;		
		
		if($res1 >= '0' && $res1 <= '1903.98'){
			$res2 = $res1;
			$IR = '0';			
		}		
	} 
	
	if ($salario >= '1556.95' && $salario <= '2594.92' ) {
		
		$inss = ($salario * 0.09);
		$res1 = $salario - $inss;		
		
		
		if($res1 >= '0' && $res1 <= '1903.98'){
			$res2 = $res1;
			$IR = '0';
		}
			
		if($res1 >= '1903.99' && $res1 < '2826.65'){				
			$IR = ($res1 * 0.075) - ('142.80');
			$res2 = $res1 - $IR;
		}	
		
	}			
	if ($salario >= '2594.93' && $salario <= '5189.82' ) {
		
		
		$inss = ($salario * 0.11);
		$res1 = $salario - $inss;
		
		
		if($res1 >= '0' && $res1 <= '1903.98'){
			$res2 = $res1;
		}
			
		if($res1 >= '1903.99' && $res1 <= '2826.65'){				
			$IR = ($res1 * 0.075) - ('142.80');
			$res2 = $res1 - $IR;
			}					
				
		if($res1 >= '2826.66' && $res1 <= '3751.05'){
			$IR = ($res1 * 0.15) - ('354.80');
			$res2 = $res1 - $IR;
		}
			
		if($res1 >= '3751.06' && $res1 <= '4664.68'){	
			$IR = ($res1 * 0.225) - ('636.13');
			$res2 = $res1 - $IR;
		}
			
		if($res1 >= '4664.69'){	
			$IR = ($res1 * 0.275) - ('869.36');
			$res2 = $res1 - $IR;
		}			
	}	
	
	
	if ($salario >= '5189.83' ) {
		$inss = ('570.8912');
		$res1 = $salario - $inss;		
		
		if($res1 >= '3751.06' && $res1 <= '4664.68'){				
			$IR = ($res1 * 0.225) - ('636.13');
			$res2 = $res1 - $IR;
		}
			
		if($res1 >= '4664.69'){				
			$IR = ($res1 * 0.275) - ('869.36');
			$res2 = $res1 - $IR;
		}			
	}	
?>


<!DOCTYPE html>
<html>
  <head>
	  <title>Calculo Realizado</title>
	  <meta charset="utf-8">
	  <link rel="stylesheet" type="text/css" href="bootstrap.css">
	  
  </head>
  
  <body>
		<div class="jumbotron">
		<div class="container">
			<h1>Calculadora de Impostos</h1>
			<p>Aqui está as informações referentes ao seu salário</p>
		</div>
	</div>
	
	<div class="container">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h2 class="panel-title"><img src="calculadora_icon.png" height="42" width="42"></h2>
			</div>
			<div class="panel-body">
				
				<table align="center">
					<thead>
						<tr>
							<th>		Salário Bruto		</th>
							<th>		Desconto IR			</th>
							<th>		Desconto INSS		</th>
							<th>		Salário Liquido		</th>
						</tr> 
					</thead>
   
					<tbody>
						<?php
							$IR = number_format($IR, 2, ',', '.');
							$salario = number_format($salario, 2, ',', '.');
							$inss = number_format($inss, 2, ',', '.');
							$res2 = number_format($res2, 2, ',', '.');
							echo '<tr>';
							echo "<td>R$ $salario</td>";            
							echo "<td>R$ $IR</td>";
							echo "<td>R$ $inss</td>";  
							echo "<td>R$ $res2</td>";
							echo '</tr>';         
						?>
					</tbody>
				</table>   
				
			</div>
		</div>
	</div>
		
	<form action="index.html" >
		<h3 align="center">
		<input type="submit" value="Voltar" />
	</form>
	
  </body>
</html>