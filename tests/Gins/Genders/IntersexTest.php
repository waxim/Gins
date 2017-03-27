<?php

namespace Gins\Tests;

class IntersexTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'i';
    protected $term = 'Intersex';

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Intersex();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
