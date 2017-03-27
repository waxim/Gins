<?php

namespace Gins\Tests;

class MaleTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'm';
    protected $term = 'Male';

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\Male();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
