<?php

namespace Gins\Tests;

class NeutroisTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "no";
    protected $term = "Neutrois";

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Neutrois();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
