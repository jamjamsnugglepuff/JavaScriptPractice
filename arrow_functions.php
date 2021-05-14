<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | Arrow Functions</title>
</head>
<body>
	<script>
		'use strict';
		// arrow functions
		// let func = (arg1, arg2, arg3, ...) => expression
		
		// let func = function(arg1, arg2, arg3){
		// 	return expression
		// }

		// let sum = (a, b) => a + b ; 
		// This arrow function is a shorter form of this function
			// let sum = function(a, b){
			// 	return a + b;
			// }
	

		// let sum = (a, b) => {
		// 	return a + b;
		// }

		// alert(sum(1, 2));
	</script>

	<script>
		'use strict';
		// one argument
		// let double = a => a*2;
		// alert(double(2));

		// let sayHi = () => alert('hello');

		// sayHi();

		// let age = prompt('What is your age?', 18);
		// let welcome = (age < 18) ?
		// 			() => alert('Hello') :
		// 			() => alert('Greetings') ;  
		// welcome();
		
		// let sum = (a, b) => {
		// 	let result = a + b;
		// 	return result;
		// }

		// alert(sum(1, 4));
		let ask = (question, yes, no) => confirm(question) ? yes() : no();

		ask('Do you agree?',
		  () => alert('You agreed'),
		  ()=> alert("you canceled the execution")
		);
	</script>
</body>
</html>