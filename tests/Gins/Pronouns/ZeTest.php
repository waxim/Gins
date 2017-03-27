<?php

namespace Gins\Tests;

class ZeTest extends \PHPUnit_Framework_TestCase
{
    protected $value = "ze";
    protected $subject = "Ze";
    protected $object = "Hir";
    protected $possessive = "Hir";
    protected $possessive_plural = "Hirs";
    protected $reflective = "Hirself";

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\Ze();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
