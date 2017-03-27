<?php

namespace Gins\Tests;

class XTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'x';
    protected $subject = 'X';
    protected $object = 'X';
    protected $possessive = 'X';
    protected $possessive_plural = 'Xs';
    protected $reflective = 'Xself';

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\X();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
