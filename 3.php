<html>
	<head> 
		<meta charset="UTF-8"> 
		<TITLE>Текстовый документ 1</title>
	</head>
	<body>
		<form action="3.php" method="GET">
		<input type="text" name="arg1" value="<?php 
			if (isset($_GET['arg1'])){
				echo htmlspecialchars($_GET['arg1']);
			}
		?>">
		<input type="text" name="arg2" value="<?php 
			if(!empty($_GET['arg2'])) {
				echo htmlspecialchars($_GET['arg2']);
			} 
		?>">
		<input type="submit" value="Сумма" name="add">
		<input type="submit" value="Вычитание" name="sub">
		</form>
		<?php function calc($arg1,$arg2,$action){
			if ($action=="add"){
				return intval($arg1)+intval($arg2);
		} else if ($action=="sub"){
			return intval($arg1)-intval($arg2);
			}
		}
		if(isset($_GET['arg1'])&&isset($_GET['arg2'])){ 
		if (isset($_GET["add"])) {
			$action="add";
		} else if (isset($_GET["sub"])){
			$action="sub";
		}?>
		<div>
		Результат: <?=calc($_GET['arg1'], $_GET['arg2'], $action)?>
		</div>
		<?php } ?>
	</body>
</html>