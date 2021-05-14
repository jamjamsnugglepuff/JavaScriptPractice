<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | To Primitive</title>
</head>
<body>
	<script>
		'use strict';
		// function NewObject(){

		// }

		// // object to string conversion
		// let newObject = new NewObject();

		// alert(newObject);

		// let secondObject = new NewObject();

		// secondObject[newObject] = 123;

		// alert(secondObject[newObject]);


		// // object to number conversion
		// function Obj(){

		// }

		// let obj = new Obj;

		// let num = Number(obj)

		// let n = +obj;
		// let delta = date1 - date2;

		// SYMBOL TO PRIMITIVE
		// function Obj(){

		// }

		// let obj = new Obj();

		// obj[Symbol.toPrimitive] = function(hint);

	

		let user = {
			name: "Bob",
			money: 2000,
			[Symbol.toPrimitive](hint){
				alert(`hint: ${hint}`);
				return hint == "string" ? `name: ${this.name}` : this.money; 
			}
		}
		// conversions demo
		alert(user); // to string
		alert(+user); // to number
		alert(user+500); // to number because addition of number
	</script>
</body>
</html>