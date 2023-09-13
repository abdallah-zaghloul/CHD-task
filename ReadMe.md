<h2> Cartesian Product Task</h2>

<h3> Description: </h3>

As a developer, your task is to implement a function that calculates the Cartesian product of two arrays in PHP.
The Cartesian product of two sets A and B is the set of all possible ordered pairs (a, b) where a is an element of A and b is an element of B.

<h3> Requirements: </h3>

- Create a function named Cartesian Product that takes two arrays as input parameters.
- The function should return an array containing arrays or tuples representing all possible combinations of elements from the input arrays.
- Handle empty arrays gracefully and return an empty array as a result.
- The order of the elements in the output array does not matter.
- Avoid using built-in functions or libraries that directly provide Cartesian product functionality.
- Your function should take two arrays as input and return a new array containing all possible combinations of elements from the input arrays.

<h3> Example: </h3>
<pre>
PHP :
$result = cartesianProduct([1, 2], ['a', 'b']);
print_r($result);
// Output: [[1, 'a'], [1, 'b'], [2, 'a'], [2, 'b']]

*Please implement the cartesianProduct function in PHP
 according to the requirements provided above.
</pre>

<h3> Solution: </h3>

Please Check src/ dir that contains :
- Implementation: (index.php)
- Test: (CartesianProductTest.php) 