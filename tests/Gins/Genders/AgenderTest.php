<?php

namespace Gins\Tests;

class AgenderTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "ag";
    protected $term = "Agender";

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Agender();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
