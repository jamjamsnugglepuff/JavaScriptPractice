<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | The Switch</title>
</head>
<body>
	<script>
		'use strict';
		// // use strict for enabled new standards javascript
		// let a = +prompt('a?', '')
		// switch(a){
		// 	case 0:
		// 		alert(0);
		// 		break;
		// 	case 1:
		// 		alert(1);
		// 		break
		// 	case 2:
		// 	case 3:
		// 		alert('2, 3');
		// 		break;
		// }
	</script>

	<script>
		'use strict';
		function checkAge(age) {
		  if (age > 18) {
		    return true;
		  } else {
		    return confirm('Did parents allow you?');
		  }
		}

		function checkAge(age){
			age > 18 ? true : confirm('Did your parents allow you?');
		}

		function checkAge(age){
			return (age > 18) || confirm('Did your parents allow you?');
		}

		function min(a, b){
			return (a < b) ? a : b;
		}

		function pow(x, n){
			return x ** n;
		}

		function pow(x, n){
			let y = x;

			do{
				alert(y);
				n--;
				y *= x;	
			}while(n > 0);
		}
		
		// pow(2,2);
		function pow(x, n){
			y = x;
			for(let i = 0 ; i < n ; i++){
				y *= x;
			}
			return y; 
		}

	</script>
</body>
</html>