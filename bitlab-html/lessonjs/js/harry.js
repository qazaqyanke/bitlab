let author = prompt("Имя автора");

books = [
{"name":"Harry Potter and the Philosopher's Stone", "price": "50$", "author":"Joanne Rowling", "ISBN":"1233123",},
{"name":"Harry Potter and the Chamber of Secrets", "price": "40$", "author":"Joanne Rowling", "ISBN":"222332",},
{"name":"Harry Potter and the Prisoner of Azkaban","price": "55$", "author":"Joanne Rowling", "ISBN":"452323",}
];


for(var i=0; i<books.length;i++){
	prompt+=[i] ["name"] + " - " + books[i] ["price"]+" - " + books[i] ["author"] + " - " + books[i] ["ISBN"] 
	if(books[i].name == name && books.[i].author == author){
		notFound = false;
	}

//}

//alert(prompt);

//var author = prompt('author')
//var ISBN = prompt('ISBN')
//var notFound = true;
//{"author":"Joanne Rowling", "ISBN": "1233123"},
//{"login":"222", "password": "222"},
//{"login":"333", "password": "333"},
//{"login":"444", "password": "444"},];

//var text = "";

//for (var i=0;i<users.length;i++){
	//if(users[i].author == author && user[i].ISBN == ISBN){
		//notFound = false;
		//alert('found');
	//}
//}

//if (notFound == true){
	//alert("not found");
//}