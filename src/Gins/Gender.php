<?php

namespace Gins;

class Gender
{
    /**
     * The english term for the gender.
     *
     * @var string
     */
    protected $term;

    /**
     * The value used to id this gender.
     *
     * @var string
     */
    protected $value;

    /**
     * We can assume nouns sometimes.
     *
     * @var Gins\Pronoun
     */
    protected $noun;

    /**
     * Get our term
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Get our value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Get our nouns
     *
     * @return Gins\Pronoun
     */
    public function getNouns()
    {
        return isset($this->noun) ? $this->noun : new \Gins\Pronouns\They();
    }

    /**
     * Set our nouns
     *
     * @param Gins\Pronoun
     * @return string
     */
    public function setNouns(\Gins\Pronoun $nouns)
    {
        $this->noun = $nouns;
    }
}
