<?php

namespace Gins\Tests;

class GenderQueerTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "gq";
    protected $term = "Gender Queer";

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\GenderQueer();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
