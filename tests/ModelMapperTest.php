<?php

namespace Mnking\ModelMapper;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Expr\ClosureExpressionVisitor;
use Doctrine\Common\Collections\ExpressionBuilder;
use Mnking\ModelMapper\Models\User;

class ModelMapperTest extends \PHPUnit\Framework\TestCase
{
    /**
     * Test that true does in fact equal true
     */
    public function testTrueIsTrue()
    {
        $user = new User();
//        $user->age = 27;

        $builder = new ExpressionBuilder();
        $builder->andX(
            $builder->eq('age', 27)
        );

        $friend1 = [
            'name' => 'Rồng',
            'age' => 17,
            'isMarriage' => true,
            'income' => 1233.44,
            'metadata' => [
                'website' => 'king.vn'
            ]
        ];

        $myArray = [
            'name' => (int)'Rồng',
            'age' => (string)27,
            'isMarriage' => (float)true,
            'income' => 1233.4,
            'metadata' => [
                'website' => 'zing.vn'
            ],
            'friends' => [
                (new User())->fromArray($friend1),
            ]
        ];

//        $collection = new ArrayCollection($myArray);
        $userModel = $user->fromArray($myArray);

        var_dump($userModel);

//        var_dump(ClosureExpressionVisitor::getObjectFieldValue($user, 'age'));

//        var_dump($builder->);

        $this->assertTrue(true);
    }
}
