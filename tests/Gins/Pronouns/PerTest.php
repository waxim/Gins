<?php

namespace Gins\Tests;

class PerTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "per";
    protected $subject = "Per";
    protected $object = "Per";
    protected $possessive = "Pers";
    protected $possessive_plural = "Pers";
    protected $reflective = "Perself";

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\Per();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
