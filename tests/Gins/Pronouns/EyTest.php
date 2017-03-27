<?php

namespace Gins\Tests;

class EyTest extends \PHPUnit_Framework_TestCase
{
    protected $value = 'ey';
    protected $subject = 'Ey';
    protected $object = 'Em';
    protected $possessive = 'Eir';
    protected $possessive_plural = 'Eirs';
    protected $reflective = 'Eirself';

    public function testNouns()
    {
        $noun = new \Gins\Pronouns\Ey();

        $this->assertSame($noun->getValue(), $this->value);
        $this->assertSame($noun->getSubject(), $this->subject);
        $this->assertSame($noun->getObject(), $this->object);
        $this->assertSame($noun->getPossessive(), $this->possessive);
        $this->assertSame($noun->getPossessivePlural(), $this->possessive_plural);
        $this->assertSame($noun->getReflective(), $this->reflective);
    }
}
