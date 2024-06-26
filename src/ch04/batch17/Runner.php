<?php declare(strict_types=1);

namespace popp\ch04\batch17;

class Runner 
{
    public static function run() 
    {
        $p = new Person();
        $p->name = "bob";
        $p->age = 44;
        print_r($p);
        unset($p->name);
        print_r($p);
    }

    public static function run2()
    {
        /* listing 04.86, page 129 */
        /* Working with Interceptors (aka overloading, magic methods) */
        $p = new Person();
        $p->name = "bob";
        // the $myname property becomes 'BOB'
        print $p->getName();
    }
}