// creating a function called pow return the number to the power of n

describe("pow", function() {

	
// pow function automatic testing
	describe("raises to the power of 3", function(){

		function makeTest(x){
			let expected = x * x * x;

			it(`${x} to the power of 3 is ${expected}`, function(){
				assert.equal(pow(x, 3), expected);
			});
		}

		for(let x = 1; x <= 5; x++){
			makeTest(x);
		}

		it("for negative n the result is NAN", function(){
			assert.isNaN(pow(2,-1));
		});

		it("if non-integer n return NAN", function(){
			assert.isNaN(pow(2, 1.5));
		})

	});


// testing before after tests

	// describe('test', function(){
	// 	// before / after all tests alert 
	// 	before(() => alert("Testing started - before all tests"));
	// 	after(() => alert("Testing finished - after all tests"));

	// 	// before each test / after each test
	// 	beforeEach(() => alert("Before a test - enter a test"));
	// 	afterEach(() => alert("After a test - exit a test"));

	// 	it('test1', () => alert(1));
	// 	it('test2', () => alert(2));
	// });


	// it('2 raised to the power of 3 is 8', function() {
	// 	assert.equal(pow(2, 3), 8);
	// });

	// it('3 raised to the power of 4 is 81', function() {
	// 	assert.equal(pow(3, 4), 81);
	// });

});

