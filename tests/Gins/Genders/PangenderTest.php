<?php

namespace Gins\Tests;

class PangenderTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "p";
    protected $term = "Pangender";

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Pangender();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
