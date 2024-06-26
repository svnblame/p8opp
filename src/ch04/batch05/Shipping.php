<?php declare(strict_types=1);

namespace popp\ch04\batch05;

/* listing 04.29, page 91 */
class Shipping implements Chargeable
{
    public function __construct(private float $price) 
    {
        // 
    }

    public function getPrice(): float 
    {
        return $this->price;
    }
}
