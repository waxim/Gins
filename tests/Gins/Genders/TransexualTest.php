<?php

namespace Gins\Tests;

class TransexualTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'ts';
    protected $term = 'Transsexual';

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Transsexual();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
