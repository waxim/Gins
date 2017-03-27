<?php

namespace Gins\Tests;

class FemaleTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "f";
    protected $term = "Female";

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Female();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
