<?php declare(strict_types=1);

namespace popp\ch04\batch06;

/* listing 04.22, page 93 */
class ShopProduct
{
    private int $taxrate = 20;

    public function __construct(
        private string $title,
        private string $producerFirstName,
        private string $producerMainName,
        protected float $price 
    ) {}

    public function calculateTax(float $price): float 
    {
        return (($this->taxrate / 100) * $price);
    }
}
