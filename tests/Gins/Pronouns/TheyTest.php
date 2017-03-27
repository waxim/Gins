<?php

namespace Gins\Tests;

class TheyTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "they";
    protected $subject = "They";
    protected $object = "Them";
    protected $possessive = "Their";
    protected $possessive_plural = "Theirs";
    protected $reflective = "Themself";

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\They();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
