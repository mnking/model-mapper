<?php

namespace Mnking\ModelMapper\Traits;

use League\Fractal\Resource\Item;
use Mnking\ModelMapper\Models\User;

/**
 * Trait ModelMapperTrait
 * @package Mnking\ModelMapper\Traits
 */
trait ModelMapperTrait
{
    public function fromArray(array $array)
    {
//        var_dump((object)$array);
//        $item = new Item($array, $this);
var_dump(serialize($array));
var_dump(strlen(get_class($this)));
var_dump(sprintf(
    'O:%d:"%s"%s',
    strlen(get_class($this)),
    get_class($this),
    strstr(serialize($array), ':')
));
        $item = unserialize(sprintf(
            'O:%d:"%s"%s',
            strlen(get_class($this)),
            get_class($this),
            strstr(serialize($array), ':')
        ));

        return $item;
    }

    public function toArray()
    {

    }

    private function transform(array $array)
    {
        return unserialize(sprintf(
            'O:%d:"%s"%s',
            strlen($this),
            $this,
            strstr(serialize($array), ':')
        ));
    }
}
