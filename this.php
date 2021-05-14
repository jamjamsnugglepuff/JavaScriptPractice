<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | This</title>
</head>
<body>
	<script>
		'use strict';
		let user = {name: "john", age: 30};
		user.sayHi = () => alert('Hello!');
		// user.sayHi();

		let secondUser = {
			name: 'Max',
			age: 25
		};

		function sayHi(){
			return alert('Hello!');
		}

		// secondUser.sayHi = sayHi;

		// secondUser.sayHi();

		// methods in an object litteral short hand
		let thirdUser = {
			sayHi: function (){
				alert("Hello!");
			}
		};

		// short hand

		let forthUser = {
			sayHi(){
				alert('Hello!');
			}
		};



		// this in methods

		let fithUser = {
			name: "John",
			age: 44,
			sayHi(){
				// this is the current object
				alert(this.name);
			}
		};

		// fithUser.sayHi();



		let calculator = {
			read(){
				this.x = +prompt('user what is x value', '');
				this.y = +prompt('user what is y value', '');
			},

			sum(){
				return alert(this.x + this.y);
			},

			mul(){
				return alert(this.x * this.y);
			}

		}

		calculator.read();
		calculator.sum();
		calculator.mul();


		let ladder = {
		  step: 0,
		  up() {
		    this.step++;
		    return this;
		  },
		  down() {
		    this.step--;
		    return this;
		  },
		  showStep: function() { // shows the current step
		    alert( this.step );
		    return this;
		  }
		};


	</script>
</body>
</html>