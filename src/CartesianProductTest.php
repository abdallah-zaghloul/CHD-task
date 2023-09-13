<?php
namespace AbdallahZaghloul\CartesianProduct;

use PHPUnit\Framework\TestCase;

class CartesianProductTest extends TestCase
{
    /** Test Cartesian Product
     * @return void
     */
    public function testCartesianProduct()
    {
        $array_1 = [1,2];
        $array_2 = ['a','b'];
        $expected =  [[1, 'a'], [1, 'b'], [2, 'a'], [2, 'b']];
        $result = cartesianProduct($array_1, $array_2);
        $this->assertEquals($expected, $result);
        print_r($result);
    }
}