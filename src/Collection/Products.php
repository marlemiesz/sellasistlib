<?php


namespace Marlemiesz\SellasistLib\Collection;


use Marlemiesz\SellasistLib\Model\Product;

class Products extends \ArrayObject
{
    /**
     * @param mixed $index
     * @param mixed $newval
     */
    public function offsetSet($index, $newval)
    {
        if ($newval instanceof Product) {
            throw new \InvalidArgumentException("Item must be instance of Marlemiesz\SellasistLib\Model\Product");
        }

        parent::offsetSet($index, $newval);
    }
}