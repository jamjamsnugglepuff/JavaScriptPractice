<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | Methods and Primitives</title>
</head>
<body>
	<h1>Methods and Primitives</h1>
	<script>
		'use strict';
		// string to uppercase
		// base=16 is used for hex colors, character encodings etc, digits can be 0..9 or A..F.

		/*base=2 is mostly for debugging bitwise operations, digits can be 0 or 1.

		base=36 is the maximum, digits can be 0..9 or A..Z. The whole latin alphabet is used to represent a number. A funny, but useful case for 36 is when we need to turn a long numeric identifier into something shorter, for example to make a short url. Can simply represent it in the numeral system with base 36:*/

		// round down
		Math.floor();

		// round up
		Math.ceil();

		// round to nearest int
		Math.round();

		// Removes everything after the decimal point
		Math.trunc();

		Multiply-and-divide.

		// For example, to round the number to the 2nd digit after the decimal, we can multiply the number by 100 (or a bigger power of 10), call the rounding function and then divide it back.

		// let num = 1.23456;

		// alert( Math.round(num * 100) / 100 ); // 1.23456 -> 123.456 -> 123 -> 1.23

		// rounds number to fixed n digits after the decimal place
		toFixed(n) ;

		// rounds to closest number 
		toFixed(1);

		// if its shorter then required 00000s are appended for remainder

		// same as value1 === value2
		// compares two values
		Object.is(value1, value2) === true/false;


		alert( parseInt('100px') ); // 100
		alert( parseFloat('12.5em') ); // 12.5

		alert( parseInt('12.3') ); // 12, only the integer part is returned
		alert( parseFloat('12.3.4') ); // 12.3, the second point stops the reading

		There are situations when parseInt/parseFloat will return NaN. It happens when no digits could be read:

		alert( parseInt('a123') ); // NaN, the first symbol stops the process

		// math random 0-1
		Math.random();
		// select max from arguments given,
		Math.max(a, b, c);
		// Select min from arguments given
		Math.min(a, b, c);
		// returns to the power of a to the power of b
		Math.pow(a, b);

		// Append "e" with the zeroes count to the number. Like: 123e6 is the same as 123 with 6 zeroes 123000000.

		// A negative number after "e" causes the number to be divided by 1 with given zeroes. E.g. 123e-6 means 0.000123 (123 millionths).

	</script>
</body>
</html>