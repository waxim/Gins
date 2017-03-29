<?php

namespace Gins\Tests;

class ChoppaTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'choppa';
    protected $subject = 'Choppa';
    protected $object = 'Choppa';
    protected $possessive = 'Choppa\'s';
    protected $possessive_plural = 'Choppas\'';
    protected $reflective = 'Chopself';

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\Choppa();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
