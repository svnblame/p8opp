<?php declare(strict_types=1);

namespace popp\ch04\batch21;
/* listing 04.101, page 139, Copying Objects with __clone() */
class Account
{
    public function __construct(public float $balance) {}
}