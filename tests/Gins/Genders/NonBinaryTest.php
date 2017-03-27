<?php

namespace Gins\Tests;

class NonBinaryTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'x';
    protected $term = 'Non-Binary';

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\NonBinary();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
