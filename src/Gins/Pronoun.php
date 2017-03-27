<?php

namespace Gins;

class Pronoun
{
    /**
     * Store a value for this pronoun.
     *
     * @var string
     */
    protected $value;

    /**
     * The Subject noun.
     *
     * @var string
     */
    protected $subject;

    /**
     * The Object noun.
     *
     * @var string
     */
    protected $object;

    /**
     * The Possessive noun.
     *
     * @var string
     */
    protected $possessive;

    /**
     * The Possessive Plural noun.
     *
     * @var string
     */
    protected $possessive_plural;

    /**
     * The Reflection noun.
     *
     * @var string
     */
    protected $reflective;

    /**
     * Return our value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Alias for getSubject().
     *
     * @return string
     */
    public function getNoun()
    {
        return $this->getSubject();
    }

    /**
     * Gets our subject.
     *
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Gets our object.
     *
     * @return string
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Gets our possessive.
     *
     * @return string
     */
    public function getPossessive()
    {
        return $this->possessive;
    }

    /**
     * Get possessive_plural.
     *
     * @return string
     */
    public function getPossessivePlural()
    {
        return $this->possessive_plural;
    }

    /**
     * Get reflective.
     *
     * @return string
     */
    public function getReflective()
    {
        return $this->reflective;
    }
}
