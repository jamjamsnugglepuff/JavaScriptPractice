<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | Garbage Collector</title>
</head>
<body>
	<script>
		'use strict';

		let object = {name: 'bob'};
		object = null ;
		// its deleted

		function marry(man, woman) {
		  woman.husband = man;
		  man.wife = woman;

		  return {
		    father: man,
		    mother: woman
		  }
		}

		let family = marry({
		  name: "John"
		}, {
		  name: "Ann"
		});

		// to delete the two objects we need to delete the references
		delete family.father;
		delete family.mother.husband
		// or we can delete thewhole object 

		family = null;
	</script>
</body>
</html>