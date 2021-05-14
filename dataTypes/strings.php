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

		// let string = "string";
		// alert(string.toUpperCase());//STRING

		// round number to given precision
		let n = 1.234567;
		// alert( n.toFixed(2) );

		// convert string to a number

		// let str = '123';
			// str = Number(str);
		//123

		// null/undefined have no methods

		let  x = 'hello';
		// x.test = 5;
		// alert(x.test);
		let single = 'single quotes';
		let double = "double quotes";
		let backTick = `Back tick quotes`;

		function sum(a, b){
			return a + b;
		}

		// alert(`This is a backtick string with a variable inside of it > ${sum(1, 2)}`);

		let guestList = `Guests: 
		John, 
		Mary, 
		Bob, 
		Peter`;

		// alert("string".length);
		// alert("string"[2]);
		// alert("string".length-2);

		// itterate over a string 
		// let string = "hello";
		// for( let char of string){
		// 	alert(char);
		// }


		// string return index of string str.indexOf(string, startingPosition);
		// let str = "widget with id";
		// alert( str.indexOf('widget') );
		// alert( str.indexOf('Widget') );
		// alert( str.indexOf('id') );
		let str = "As sly as a fox, as strong as an Ox";
		let target = ' as '; //string to look for
		let pos = 0;

		// while(true){
		// 	let foundPos = str.indexOf(target, pos);
		// 	if (foundPos == -1) break;

		// 	alert(`Found at ${foundPos}`);
		// 	pos = foundPos + 1;
		// }

		// pos = -1;

		// while((pos = str.indexOf(target, pos + 1)) != -1){
		// 	alert( pos );
		// }

		// function ucFirst(string){
		// 	let newString = ""
		// 	for(let i = 0; i < string.length; i++){
		// 		newString += i == 0 ? string[i].toUpperCase() : string[i];
		// 	}
		// 	console.log(newString);
		// };

		let ucFirst = (string) => { 
			return !string ? string : string[0].toUpperCase() + string.slice(1);
		}

		let checkSpam = (string) => {
			let lcString = string.toLowerCase();
			if (lcString.includes('xxx') || lcString.includes('viagra')) {
				return true;
			}else{
				return false;
			}
		}

		let truncate = (string, maxLength) => {
			return (string.length > maxLength) ?
				(string.slice(0,(maxLength-3)) + "...") : string;
		}

		let extractCurrencyValue = (value, symbol) =>{
			return + value.slice(1);
		}
		
		// console.log(checkSpam(' sad sadas viagra'));
		// console.log(ucFirst("practice"));

		// console.log(truncate('string', 20));

		// console.log(extractCurrencyValue("$12345.02", '$'));

		let array = [1, 2, 3, 4, 5];

		// for(let i = 0; i < array.length; i ++ ){
		// 	console.log( array[i] );
		// }

		// for(let key in array){
		// 	console.log(key);
		// }

		let styles = ['Jazz', 'psych'];
		styles.push('Rock-n-Roll');

		function replace_middle_value(array, value){
			let middle = Math.round((array.length - 1 )/ 2 );
			array[middle] = value;
			return array;
		}

		
		function sumInput(){
			let array = [];
			let finalValue = 0;
			let x = 0;
			do{
				x = +prompt("user give a number");
				// console.log(x);
				if (x){
					array.push(+x);	
				}
				
				console.log(array);
			}while( x != null && isFinite(x) && x != "")
			
			for(let i = 0; i < array.length; i++){
				finalValue += array[i];
			}

			return finalValue;
		}
		console.log(sumInput());
		
		// step 1 break it up 

		// A maximal subarray
		// importance: 2

		// Write the function getMaxSubSum(arr)
		 function getMaxSubSum(array){
		 	if all items are negative take none it is == 0
		 	if all items are positive take all
		 	find the positive number with the most in the sub array with items next to it
		 	return subarray sum
		 }

		 function getMaxSubSum(array){
		 	let sums = [];
		 	// loop through the array
		 	for(let i = 0; i<array.length; i++){
		 		sums[] += array[0];
		 		sums[] += array[1];
		 		sums[] += array[2];
		 		sums[] += array[3];
		 		sums[] += array[4];
		 		sums[] += array[5];
		 		
		 	}
		 }
		// The input is an array of numbers, e.g. arr = 

		// The task is: find the contiguous subarray of arr with the maximal sum of items.

		// that will return that sum.

		// step 2 sudo code

		// step 3 write it out

		// step 4 refactor

		// [1, -2, 3, 4, -9, 6].
		for(let a = 0; a <= y; a ++){
			let x = 0 ;
			let subArray = []
			for(let i = 0; i <= x ; i++){ 
				subarray[] = array[i];
			}
		}



		array[0]

		array[0] + array[1]

		array[0] + array[1] + array[2]

		array[0] + array[1] + array[2] + array[3] 

		array[0] + array[1] + array[2] + array[3] + array[4]

		array[0] + array[1] + array[2] + array[3] + array[4] + array[5]			
	</script>
</body>
</html>