<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Лабораторная работа</title>
	</head>
	<body>
		<form method="POST" action="">
			<a>Введите числа</a><input type="text" name="numbers"><br/>
			<input type="submit" value="Отправить">
		</form>
		<?php

			//1
			$number=$_POST['numbers'];
			$string=explode(' ',$number);
			$sort = [];
			foreach ($string as $i) {
				if ($i > 0) {
					array_push($sort, $i);
				}
			}
			echo count($sort);

			//2
			for ($i = 0;$i < count($string);$i++){
				if($string[$i] == 0){
					$last = $i;
				}
			}
			for($k = $last;$k < count($string);$k++){
				$result+=$string[$k];
			}
			echo "<br>";
			echo $result;
			echo "<br>";

			//3
			$sort=[];
			$unsort=[];
			foreach ($string as $i){
				if(intval($i)==1){
					array_push($sort, $i);
				}
				else{
					array_push($unsort, $i);
				}
			}
			$cad = array_merge($sort, $unsort);
			print_r($cad);
		?>	
	</body>
</html>