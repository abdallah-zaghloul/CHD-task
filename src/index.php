<?php

/** Implement array_unique()
 * #Avoid using built-in functions or libraries that directly provide Cartesian product functionality
 * @param array $array
 * @return array
 */
function set(array $array): array
{
    $set = [];
    foreach ($array as $key => $value){
        $set[$value] = $value;
    }
    return $set;
}

/** Solution function
 * @param $array_1
 * @param $array_2
 * @return array
 */
function cartesianProduct($array_1, $array_2): array
{
    $set_1 = set($array_1);
    $set_2 = set($array_2);
    $result = [];

    //Inputs Validation: Return an empty array if any of the input arrays is empty
    if (empty($set_1) or empty($set_2))
        return $result;

    //Nested Loop: Add each combination as an array
    foreach ($set_1 as $element_1) {
        foreach ($set_2 as $element_2) {
            $result[] = [$element_1, $element_2];
        }
    }
    //Final Result
    return $result;
}

//Example
$result = cartesianProduct([1, 2], ['a', 'b']);
print_r($result);

/*================================================================
function dd(...$vars)
{
    var_dump(...$vars);
    die();
}
================================================================*/