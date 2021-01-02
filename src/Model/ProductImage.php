<?php


namespace Marlemiesz\SellasistLib\Model;


class ProductImage extends \ArrayObject implements Model
{
    /**
     * @param mixed $index
     * @param mixed $newval
     */
    public function offsetSet($index, $newval)
    {
        if (!is_string($newval)) {
            throw new \InvalidArgumentException("Must be string");
        }

        parent::offsetSet($index, $newval);
    }

}