<!DOCTYPE html>
<html>
<head>
	<title>JavaScript Practice | Object Copy</title>
</head>
<body>
	<script>
		'use strict';
		// making a clone of an object 
		let user = {
			name: "John",
			age: 30
		};

		let clone = {};

		for(let key in user){
			clone[key] = user[key];
		}

		// clone is now a fully independant object

		clone.age// 30
		clone.name//john

		// or we can use a method Object.assign

		// Object.assign(dest, [src1, src2, src3...])

		let user = {name: "John"};
		let permission1 = {canView: true};
		let permission2 = {canEdit: true};
		// copies all properties from permission1 and permission 2 into user
		Object.assign(user, permission1, permission2);
		// now user = {name: "john", canView: true, canEdit: true};
		// if propperty name exists it gets overwritten
		// replace for in loop for cloning

		let clone = Object.assign({}, user);
		// clone is now a copy of user

		// NESTED OBJECTS
		let user = {
			name: 'John',
			sizes: {
				height: 182,
				weight: 50
			}
		};

		alert(user.sizes.height);


		let user = {
			name: "John",
			sizes: {
				height: 182,
				width: 50
			}
		};

		let clone = Object.assign({}, user);
		user.sizes.width ++ ;
		alert(clone.sizes.width)// 51
		alert(user.sizes.width)//51
		// we need to do deep cloning to make them seperate values because it is a refernece
		alert(clone.sizes.width);

		// _.cloneDeep(obj).

























	</script>
</body>
</html>