//let usd = 380;
//let tg = prompt('сумма в тенге');
//let value = prompt('валюта');

//if (value==usd)
// n = tg / usd ;
//else if('')


//var cars = ["Toyota", "Mercedes", "BMW"];

//var result = "";

//for(var i=0;i<cars.length;i++){

        ///result+=cars[i]+"\n";

//}

//alert(result);



//var a = Number(prompt('Insert Number'));
//var result = '';
//var Numbers = [];
//	Numbers.push(prompt('Insert'));
//
//
//	result += Numbers[i] + ' ';
///alert(result);






//var a = Number(prompt('Insert Number'));
//var Numbers = [];
//for (var i = 0; i < a; i++) {
	//Numbers.push(prompt('Insert'));
//}

//alert(math.max.apply(null, Numbers));



//var a = Number(prompt('Insert Number'));
//var numbers = [];
//var result = '';
//for (var i = 0; i < a; i++) {
	//numbers.push(prompt('Insert'));
//}


//for (var i = 0; i < numbers.length; i++){

	//result += numbers[i] ** 2 + ' ';
//}


//alert(result);

var login = prompt('Insert login:')
var password = prompt('Insert password:')
var notFound = true;
users = [
{"login":"111", "password": "111"},
{"login":"222", "password": "222"},
{"login":"333", "password": "333"},
{"login":"444", "password": "444"},
{"login":"444", "password": "444"},];

var text = "";

for (var i=0;i<users.length;i++){
	if(users[i].login == login && users[i].password == password){
		notFound = false;
		alert('Welcome');
	}
}

if (notFound == true){
	alert("User not found");
}