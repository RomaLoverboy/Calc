var Month = [];
            Month[0] = 31
            Month[1] = 28
            Month[2] = 31
			Month[3] = 30
			Month[4] = 31
			Month[5] = 30
			Month[6] = 31
			Month[7] = 31
			Month[8] = 30
			Month[9] = 31
			Month[10] = 30
			Month[11] = 31

function Visokostny(year){
	var Dat = new Date(year, 1, 29);
	var s = new Date(year, 2, 1);
	if(Dat.getMonth() !== s.getMonth())
	{
	  Month[2] = 29;
var countDays = 366;
return countDays;	  
	} else 
countDays = 365;
return countDays;
}
function funcSuccess(data){
	
	$("#result").text(data);
	
}

 $(document).ready(function(){
	$("#submit").bind("click", function () {
		
		var da = $("#datepicker").val();
		var d = new Date(da);
		var year = d.getFullYear();
		var daysy = Visokostny(year);
		
		var month = d.getMonth();
		var daysn = Month[month];
		
		var summ1 = $( "#slider" ).slider("value");
		var summadd = $( "#slid" ).slider("value");
		
		function raschet(summ1, summadd, daysn, daysy){
			if ($("input[type='radio']:checked").val() == "Да"){ 
			return summ1 + (summ1 + summadd) * daysn * ( 10 / daysy);
			}
			if ($("input[type='radio']:checked").val() == "Нет"){ 
			return (summ1 ^2) + daysn * ( 10 / daysy);
		}
		}
		
		var result = raschet(summ1, summadd, daysn, daysy);

		$.ajax ({
		url: "showResult.php",
        type: "POST",		
		data: ({result: result}),
		dataType: "html",
		success: funcSuccess
		});
	});
});
$('#slider').animate({opacity: "0.5"}, 500);
$( function() {
    $( "#datepicker" ).datepicker();
  } );
  
$(document).ready(function(){
  $( "#slider" ).slider({
value : 1000,//Значение, которое будет выставлено слайдеру при загрузке
  min : 1000,//Минимально возможное значение на ползунке
  max : 3000000,//Максимально возможное значение на ползунке
  step : 1000,//Шаг, с которым будет двигаться ползунок
 
  create: function( event, ui ) {
   val = $( "#slider" ).slider("value");//При создании слайдера, получаем его значение в перемен. val
  $( "#contentSlider" ).html( val );//Заполняем этим значением элемент с id contentSlider
 },
 slide: function( event, ui ) {
  $( "#contentSlider" ).val( ui.value );//При изменении значения ползунка заполняем элемент с id contentSlider
  
            }
        });
});

$( function() {
    $( "#datepicker" ).datepicker();
  } );
  
$(document).ready(function(){
  $( "#slid" ).slider({
value : 1000,//Значение, которое будет выставлено слайдеру при загрузке
  min : 1000,//Минимально возможное значение на ползунке
  max : 3000000,//Максимально возможное значение на ползунке
  step : 1000,//Шаг, с которым будет двигаться ползунок
  create: function( event, ui ) {
   val = $( "#slid" ).slider("value");//При создании слайдера, получаем его значение в перемен. val
  $( "#contentSl" ).html( val );//Заполняем этим значением элемент с id contentSlider
 },
 slide: function( event, ui ) {
  $( "#contentSl" ).val( ui.value );//При изменении значения ползунка заполняем элемент с id contentSlider
            }
        });
});  
