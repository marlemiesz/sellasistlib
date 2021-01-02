<?php


namespace Marlemiesz\SellasistLib\Collection;


use Marlemiesz\SellasistLib\Model\ProductList;

class Products extends \ArrayObject implements Collection
{
    /**
     * @param mixed $index
     * @param mixed $newval
     */
    public function offsetSet($index, $newval)
    {
        if (!($newval instanceof ProductList)) {
            throw new \InvalidArgumentException("Item must be instance of Marlemiesz\SellasistLib\Model\ProductList");
        }

        parent::offsetSet($index, $newval);
    }
}