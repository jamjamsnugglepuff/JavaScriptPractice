<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | Testing Mocha</title>

  <!-- add mocha css, to show results -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mocha/3.2.0/mocha.css">
  <!-- add mocha framework code -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mocha/3.2.0/mocha.js"></script>
  <script>
    mocha.setup('bdd'); // minimal setup
  </script>
  <!-- add chai -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/chai/3.5.0/chai.js"></script>
  <script>
    // chai has a lot of stuff, let's make assert global
    let assert = chai.assert;
  </script>

</head>
<body>
	<h1>Behaviour Driven Development BDD</h1>
	<script>
		function pow(x, n){
			if (n < 0) return NaN;
			if(Math.round(n) != n) return NaN;

			let result = 1;
			for(let i = 0; i < n; i++){
				result *= x;
			}
			return result;
		}
	</script>
	<script src="testing.js"></script>
	<div id="mocha"></div>
	<script>
		mocha.run();
	</script>
</body>
</html>