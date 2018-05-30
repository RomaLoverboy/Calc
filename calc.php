<!DOCTYPE html>
<html>
<head>
<title>Калькулятор</title>

<link rel = "stylesheet" href = "bootstrap/css/bootstrap.css"/>
<link rel= "stylesheet" href = "ui/jquery-ui.css"/>
<link rel= "stylesheet" href = "css/style.css"/>
<script src="js/jquery-3.3.1.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="ui/jquery-ui.js"></script>
<script src="js/script.js"></script>
</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class = "container">
  	<div class="collapse navbar-collapse" id="navbar1">
    	<ul class="nav navbar-nav">
			<li class="nav-item" role = "separator">
		    	<a class="nav-link" href="#"> <label id = "color">Кредитные карты<label> </a>
		    </li>
		    <li class="nav-item">
		    	<a class="nav-link" href="vklady.php"> <label id = "color">Вклады </label></a>
		    </li>
			<li class="nav-item">
		    	<a class="nav-link" href="#"> <label id = "color">Дебетовая карта </label></a>
		    </li>
			<li class="nav-item">
		    	<a class="nav-link" href="#"> <label id = "color">Страхование </label></a>
		    </li>
			<li class="nav-item">
		    	<a class="nav-link" href="#"> <label id = "color">Друзья </label></a>
		    </li>
			<li class="nav-item">
		    	<a class="nav-link" href="#"> <label id = "color">Интернет-банк </label></a>
		    </li>
		
		
		</ul>
  	</div>
	</div>
</nav>


</header>



<div class = "container">
<div class = "row">
<div class = "col-md-10">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href = "index.php">Главная</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href = "vklady.php">Вклады</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href = "calc.php">Калькулятор</a></li>
  </ol>
</nav>

<div id = "table">
<br/>
<table>
<h2 id = "calc">Калькулятор</h2>
<br/>

<tr>
<td><label class = "text">Дата оформления вклада</label></td>
<td><input class = "inpt" type = "text" id = "datepicker"/></td>
<td></td>
</tr>
<tr>
<td><label class = "text">Сумма вклада</label></td>
<td><input class = "inpt" type = "text" id = "contentSlider" value = "1000"/></td>
<td><div id = "slider"></div></td>
</tr>
<tr>
<td><label class = "text">Срок вклада</label></td>
<td>
<select name = "select" class = "inpt">
<option value = "1">1 год</option>
<option value = "2">2 года</option>
<option value = "3">3 года</option>
<option value = "4">4 года</option>
<option value = "5">5 лет</option>
</select></td>
<td></td>
</tr>

<tr>
<td><label class = "text">Пополнение вклада</label></td>
<td>
<input type = "radio" name = "calc" value = "Да" checked />  Да 
<input type = "radio" name = "calc" value = "Нет"  /> Нет 
</td>
<td></td>
</tr>

<tr>
<td><label class = "text">Сумма пополнения вклада</label></td>
<td><input class = "inpt" type = "text" id="contentSl" value = "1000"/></td>
<td><div id = "slid"></div></td>
</tr>
</table>
<br/>
<table>
<tr>
<td><input type = "submit" id = "submit" value = "Рассчитать"/></td>
<td><span id = "res"></span>Резульат:</td>
<td><span id = "result"></span></td> 
<td><span id = "rub">руб.</span></td>
</tr>
</table>
<br/>
</div>
</div>
</div>
</div>


<div id = "footer">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class = "container">
  	<div class="collapse navbar-collapse" id="navbar1">
    	<ul class="nav navbar-nav">
			<li class="nav-item" role = "separator">
		    	<a class="nav-link" href="#"> <label id = "color">Кредитные карты<label> </a>
		    </li>
		    <li class="nav-item">
		    	<a class="nav-link" href="vklady.php"> <label id = "color">Вклады </label></a>
		    </li>
			<li class="nav-item">
		    	<a class="nav-link" href="#"> <label id = "color">Дебетовая карта </label></a>
		    </li>
			<li class="nav-item">
		    	<a class="nav-link" href="#"> <label id = "color">Страхование </label></a>
		    </li>
			<li class="nav-item">
		    	<a class="nav-link" href="#"> <label id = "color">Друзья </label></a>
		    </li>
			<li class="nav-item">
		    	<a class="nav-link" href="#"> <label id = "color">Интернет-банк </label></a>
		    </li>
		
		
		</ul>
  	</div>
	</div>
</nav>

</div>		  

</body>
</html>