<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | Objects</title>
</head>
<body>
	<script>
		// strict mode enabled for updated javascript
		'use strict';
		
		// object constructor syntax
		let object = new Object();

		// object literal syntax
		let syntaxObject = {};

		let user = {
			name: "John",
			age: 32
		};

		// the value of a object can be of any type

		user.isAdmin = true;

		//  to delete a property of an object

		delete user.age;

		// can also have multi word property names

		let bird = {
			"bird type": "emu",
			weight: 90,
			age: 100, // can end with a comma
		};

		// set
		bird['bird type'] = "Duck";
		// get
		alert(bird['bird type']);
		// delete
		delete bird['bird type'];

		// obtain property name as result of expression

		let dog = {
			breed: 'Staffy',
			"tail size": 200,
			color: "brown"
		};

		let value = "tail size";

		dog[value] = 400;

		// pass values to select key value pair;
		let mike = {
			name: 'sam',
			age: 100
		};

		let variable = prompt("what do you want to know about the user", 'name');

		alert(mike.variable);

		// COMPUTED PROPERTIES [.......]

		let fruit = prompt("Which fruit to buy?", 'apple');
		let bag = {
			[fruit]: 5
		};

		// more complex computed properties
		alert(bag.apple)

		let value = 'apple';
		let computer = {
			[ value + "computer"]: 5,
		};

		// property value shorthand

		function makeUser(name, age){
			return {
				name: name,
				age: age
			};
		}

		// or 

		function makeUser(name, age){
			return {
				name,
				age
			}
		}

		let user = {};

		alert( user.noSuchProperty === underfined );

		// or (key in Object)
		let user = {
			name: "Bob",
			age: 22
		}

		alert("name" in user);
		alert("age" in user);

		// FOR IN loop

		let user = {
			name: "John",
			age: 30,
			isAdmin: true
		};

		for(let key in user){
			alert(key) //alerts key name
			alert(user[key]) // alerts value
		} ;



		let user = {
			name: "John",
			surname: "Smith",
		};

		user.name = "Pete";
		delete john.name;

		function isEmpty(obj){
			for(let key in obj){
				return false
			}
			return true;
		}

		let salaries = {
			John: 100,
			Ann: 160,
			Pete: 130,
		};

		function sumSalaries(obj){
			let sum = 0;
			for(let key in obj){
				sum += obj[key];
			}
			return sum;
		}


		function multipleNumeric(obj){
			for(let key in obj){
				if(typeof(obj[key]) == "number" ){
					obj[key] *= 2;
				}
			}
		}



	</script>
</body>
</html>