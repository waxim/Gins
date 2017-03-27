<?php

namespace Gins\Tests;

class GenderNonconformingTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'gnc';
    protected $term = 'Gender Non-Conforming';

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\GenderNonconforming();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
