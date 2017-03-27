<?php

namespace Gins\Tests;

class OtherTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "o";
    protected $term = "Other";
    protected $altterm = "M2F Trans";

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Other();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }

    public function testAltTerm()
    {
        $gender = new \Gins\Genders\Other();
        $this->assertSame($gender->getTerm(), $this->term);
        $gender->setTerm($this->altterm);
        $this->assertSame($gender->getTerm(), $this->altterm);
    }
}
