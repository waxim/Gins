<?php

namespace Gins\Tests;

class AndrogynousTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'andy';
    protected $term = 'Androgynous';

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Androgynous();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
