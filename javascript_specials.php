<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | JavaScript Specials</title>
</head>
<body>
	<script>
		'use strict';
		alert('Hello');
		alert('World!');

		let variable = "A variable";
		var variable2 = "still a variable";
		const variable3 = "A constant variable";

		let dataTypes = ['number', 'bigint', 'string', 'boolean', null, undefined, 'object or symbol'];

		// the type of operator returns the data type of a value

		typeof('string');
		typeof(1);
		alert(typeof([]));

		prompt('This is a prompt!', '[default]');
		alert('This is an alert');
		confirm('this is a confirm!');

		let operators = ["+", "*", "/", "-", "++", "--", "%", '*=', "+=", "-=", "/=", "=", "? :"];

		let conditional = "true ? alert(true) : alert(false)";
		let logical = "&& || !";
		let nullish = "a ?? b";
		let comparison = "== || === || < || > || !< || !>";

		let loops = () =>{
			while(x > 10){
				console.log(x);
				x--;
			}
			let x =  0;
			do{
				alert(x)
				x++ ;
			}while(x < 10)

			for(let i = 0 ; i <= 10 ; i++){
				alert(i);
			}

			switch(value){
				case 1:
					alert(1);
					break;
				case 2:
					alert(2);
					break
				case 3:
				case 4:
					alert('3, 4');
					break;
				default:
					alert('default');
					break
			}

			let recursion = () => {
				return 0 if n == 0
				recursion(n-1)
				alert(n);
			}
		}


		function sum(a, b){
			return a + b;
		}

		let sum = function(a, b){
			return a + b;
		}

		let sum = (a, b) => {
			return a + b;
		} 

		let double = n => n * 2 ;

		let sayHi = () => alert('say hi!~');



	</script>





	<script>
		//enable strict mode for javascript
		'use strict';
		// function to put number to the power of n
		function pow(x,n){
			let result=1;
			
			for(let i=0;i<n;i++){
				result*=x;
			}
			
			return result;
		}


		let x = prompt("x?", ''), n = prompt("n?",'');
		
		// if n <= 0 then throw error
		(n <= 0) ?
		  alert(`Power ${n} is not supported,
		  		please enter an integer number 
		  		greater than zero`)
		:
		  alert(pow(x, n))
		;
	</script>





















</body>
</html>