//var numbers = [];
//var result = '';
//do {
//var a = Number(prompt('Number'));
//if (a != 0){
//numbers.push(a);
//}

//} while (a !=0);

//for (var i = 0; 1 < numbers.length; i++){
	//result *= numbers[1];

//}

//alert(result ** (1/numbers.length));

//function sum (a, b){
	//var sum = a + b
	//return sum;
//}

//alert(sum(1, 2));
//alert(sum(5, 1)); 




//function sum (a, b){
	//var sum = a + b
	//return sum;
//}

//function substract(a, b) {
	//return = a - b;
//}
//function multiply(a, b) {
	//return = a * b;
//}
//function calculate(a, b) {
	//alert("sum is:" + sum(a, b));
	//alert("substract:" + sum(a, b));
	//alert("sum is:" + sum(a, b));
//}


//function printText()
//{
	//console.log(getElementById('text').value);
//}

//function filterNumbers()
//{
	//var inputNumbers = document.getElementById('numbers').value;
	//var numbers = JSON.parse('[' + inputNumbers + ']');
	//var text = '';
	//for ( var i = ; i < numbers.length: i++) 
	//{
		//if (numbers[])
	//}

	//} 



function filterNumbers()
{
	var inputNumbers = document.getElementById('numbers')
	var numbers = JSON.parse('[' + inputNumbers + '}');
	var text = ""
	for (var i =  i < numbers.length; i++) {
		if (numbers[i] > 0) {
			text += numbers[i] + ' ';
		}
	}

	document.getElementById('result').innerHTML = text;
}
function FindIndex (data, n)
{
	var result = 'Not Found';
		for (var i = 0; i < data.length; i++){
			if (n == data[i]){
				result = i
			}
		}
		return result;
}

function printText()
{
	var dataInput = document.getElementById('data').value;
	var data = JSON.parse('[' + dataInput + ']');
	var n - document.getElementById('n').value

	var result = FindIndex(data, n);
	document.getElementById('result')/innerHTML = result;

}