<?php

namespace Gins\Tests;

class BigenderTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'big';
    protected $term = 'Bigender';

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Bigender();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
