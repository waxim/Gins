<?php

namespace Gins\Tests;

class TransgenderTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "tg";
    protected $term = "Transgender";

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Transgender();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
