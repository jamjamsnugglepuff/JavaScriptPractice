<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | Function Expressions</title>
</head>
<body>
	<script>
		// 'use strict';
		// let sayHi = () => {
		// 	alert('Hi');
		// };

		// sayHi();

		// let sayBye = function(){
		// 	alert('Bye');
		// };

		// sayBye();		
	</script>

	<script>
		'use strict';
		function ask(question, yes, no){
			if(confirm(question)){
				yes();
			}else{
				no();
			}
		}

		function showOk(){
			alert('You agreed.');
		}

		function showCancel(){
			alert("You canceled the execution");
		}

		// ask("Do you agree", showOk, showCancel);

		ask("Do you agree?",
			()=>{alert("You agree");} ,
			()=>{alert("You cancelled the execution")}
			);

		// function decleration

		function myFunction(firstPart, secondPart){
			return firstPart + secondPart;
		}

		// function expression

		let myFunction = function(firstPart, secondPart){
			return firstPart + secondPart;
		}
	</script>
</body>
</html>