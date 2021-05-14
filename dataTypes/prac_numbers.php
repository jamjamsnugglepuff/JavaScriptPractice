<!DOCTYPE html>
<html>
<head>
	<title>Prac Numbers</title>
</head>
<body>
	<script>
		'use strict';
		//The built-in function Math.random() creates a random value from 0 to 1 (not including 1).

		// Write the function random(min, max)
		function random(min, max){
		// generate a random floating-point number from min to max (not including max).
		 
		return min + Math.random() * (max - min);

		}


		// Examples of its work:

		// alert( random(1, 5) ); // 1.2345623452
		// alert( random(1, 5) ); // 3.7894332423
		// alert( random(1, 5) ); // 4.3435234525

		// Create a function randomInteger(min, max) that generates a random integer number from min to max including both min and max as possible values.
		function randomInteger(min, max){
			return (min + Math.random() * max).toFixed();
		}
		// alert(randomInteger(1, 5));
		// Any number from the interval min..max must appear with the same probability.

		// Examples of its work:


		
	</script>
</body>
</html>