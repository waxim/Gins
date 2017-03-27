<?php

namespace Gins\Tests;

class NoneTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "n";
    protected $term = "None";

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\None();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
