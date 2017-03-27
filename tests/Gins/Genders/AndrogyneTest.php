<?php

namespace Gins\Tests;

class AndrogyneTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "and";
    protected $term = "Androgyne";

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Androgyne();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
