var usd = 380;
var eur = 430;
var gbp = 480;
var tg = prompt("Сумма в тенге");
var value = prompt("валюта");

if (value==1)
	n = tg / usd ;
else if(value==2)
	n = tg/ eur;
else if(value==3);
	n= tg / gbp;
	alert(n);