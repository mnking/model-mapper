<?php
/**
 * Created by PhpStorm.
 * User: mnking
 * Date: 21/10/2017
 * Time: 00:13
 */

namespace Mnking\ModelMapper\Models;

use Mnking\ModelMapper\Traits\ModelMapperTrait;

class User
{

    use ModelMapperTrait;

    /**
     * @var string
     */
    public $name;

    /**
     * @var integer
     */
    public $age;

    /**
     * @var boolean
     */
    public $isMarriage;

    /**
     * @var float
     */
    public $income;

    /**
     * @var array
     */
    public $metadata;

    /**
     * @var \Doctrine\Common\Collections\ArrayCollection(\Mnking\ModelMapper\Models\User)
     */
    public $friends;
}