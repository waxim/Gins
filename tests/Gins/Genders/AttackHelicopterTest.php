<?php

namespace Gins\Tests;

class AttackHelicopterTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'ah';
    protected $term = 'Attack Helicopter';

    public function testGenderTerms()
    {
        $gender = new \Gins\Genders\AttackHelicopter();

        $this->assertSame($gender->getValue(), $this->value);
        $this->assertSame($gender->getTerm(), $this->term);
        $this->assertTrue(is_object($gender->getNouns()));
    }
}
