<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | if/else</title>
</head>
<body>
	<script>
		// 'use strict';
		// let answer = prompt("Whats the official name of JavaScript?", '');
		// if(answer == "ECMAScript"){
		// 	alert('Right!');
		// }else{
		// 	alert('You dont know? "ECMAScript!"');
		// }
	</script>
	<script>
		// 'use strict';
		// let number = prompt("Enter a number:", '');
		// if(+number > 0){
		// 	alert(1);
		// }else if(+number < 0){
		// 	alert(-1);
		// }else{
		// 	alert(0);
		// }
	</script>
	<script>
		// let result = ((a + b) < 4) ? 'Below' : 'Over';
		// if(a + b < 4){
		// 	result = 'Below';
		// }else{
		// 	result = 'Over';
		// }
	</script>
	<script>
		// 'use strict';
		// let message;

		// if (login == 'Employee') {
		//   message = 'Hello';
		// } else if (login == 'Director') {
		//   message = 'Greetings';
		// } else if (login == '') {
		//   message = 'No login';
		// } else {
		//   message = '';
		// }

		// let message = (login == 'Employee') ? 'Hello' :
		// 			  (login == 'Director') ? 'Greetings' :
		// 			  (login == '') ? 'No login' : '';
	</script>

	<script>
		// 'use strict';
		// let age;

		// if ((age >= 14) && (age <= 90)){

		// }

		// if(!(age >= 14 && age <= 90)){

		// }

	</script>
	<script>
		// 'use strict';
		// let username = prompt('Username:', '');
		// if(username == 'Admin'){
		// 	let password = prompt('Password:', '');
		// 	if(password == 'TheMaster'){
		// 		alert('Welcome!');
		// 	}else if(password != "TheMaster" && password != '' && password != null){
		// 		alert('Wrong password!');
		// 	}else{
		// 		alert('Cancelled');
		// 	}
		// }else if(username == ('' || null)){
		// 	alert('Cancelled');
		// }else{
		// 	alert('I dont know you!');
		// }
	</script>
	<script>
		'use strict';
		// for (let i = 0; i < 3; i++) {
		//   alert( `number ${i}!` );
		// }
		// let i = 0
		// while(i< 3){
		// 	alert(`number ${i}!`);
		// 	i++;
		// }

		// let num;

		// do {
		//   num = prompt("Enter a number greater than 100?", 0);
		// } while (num <= 100 && num);
			

				// check if value is greater then 1
				// check if value can be devided without a remainder except for 1 or itself
				// yes number is not a prime
				// no number is a prime
				// let i = 2 
				// x is less then n
				// y != 0
				
				// let result = "prime";
				// let n = 10;
				// for(let i = 2; i < n; i++){
				// 	let y = n % i;
				// 	if(y == 0){
				// 	result = 'Not prime';
				// 	alert(`${n}%${i}=${y}`);
				// 	}
					
				// }
				// alert(result);

				function primeHandler(n, result=true){
					
					for(let i = 2; i < n ; i++){
					 	if(n % i == 0){
					 		result = false
					 		alert('not prime');
					 		break;	
					 	}
					}
					if(result == true){
						alert('prime');
					}
				}

				primeHandler(10);
				// 5 % 2 == 2.5
				// 5 % 3 == 1.35
				// 5 % 4 == 1.25
				// let n = 5;
				// if (n > 1){
				// 	let result = false
				// 	for(let i = 2; i <= n; i ++){
				// 		n % i == 0 ? result = true : result = false;  
				// 	}
				// 	alert(result);
				// }

	</script>

</body>
</html>