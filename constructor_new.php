<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | Constructor New</title>
</head>
<body>
	<script>
		'use strict';
		// constructor functions
		
		// function User(name){
		// 	this.name = name;
		// 	this.isAdmin = false;
		// }

		// let user = new User('Jack');

		// alert(user.name);
		// alert(user.isAdmin);

		// // single complex object
		
		// let user = new function(){
		// 	this.name = "John";
		// 	this.isAdmin = false;
		// }

		// function User(){
		// 	alert(new.target);
		// }

		// User();

		// new User()

		// function User(name){
		// 	// if run without new it will run it with new for you
		// 	if(!new.target){
		// 		return new User(name);
		// 	}
		// 	this.name = name;
		// }

		// let john = User('John');
		// alert(john.name);

		// Return from constructors

		// Omitting parentheses
		// By the way, we can omit parentheses after new, if it has no arguments:

		// let user = new User; // <-- no parentheses
		// // same as
		// let user = new User();
		// Omitting parentheses here is not considered a “good style”, but the syntax is permitted by specification.

		// function User(name){
		// 	this.name = name;

		// 	this.sayHi = function(){
		// 		alert('My name is: ' + this.name);
		// 	};
		// }

		// let john = new User('John');

		// // john.sayHi(); //My name is : John
		// let obj = {};

		// function A(){
		// 	return obj;
		// }

		// function B(){
		// 	return obj;
		// }

		// let a = new A;
		// let b = new B;
		// alert(a == b);

		function Calculator(){
			this.read = function(){
				this.x = +prompt("give an x value",'');
				this.y = +prompt("give a y value", '');
			};

			this.sum = function(){
				alert(this.x + this.y);
			};

			this.mul = function(){
				alert(this.x * this.y);
			};
		}

		let calculator = new Calculator();

		// calculator.read();
		// calculator.sum();
		// calculator.mul();

		function Accumulator(startingValue){
			this.value = startingValue;

			this.read = function(){
				let input = +prompt("Enter a number:", '');
				this.value += input;
				alert(this.value);
			}
		}

		let accumulator = new Accumulator(20);
		accumulator.read();
	</script>
</body>
</html>