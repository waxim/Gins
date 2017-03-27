<?php

namespace Gins\Tests;

class GenderFluidTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "gf";
    protected $term = "Gender Fluid";

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\GenderFluid();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
