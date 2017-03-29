<?php

namespace Gins;

use Gins\Exceptions\PronounNotRegistered as PronounNotRegistered;

class Pronouns
{
    /**
     * An array of our pronouns.
     *
     * @var array
     */
    protected $nouns = [];

    /**
     * Fill out our pronouns.
     *
     * @param array $nouns
     *
     * @return $this
     */
    public function __construct(array $nouns = [])
    {
        $inbuilt = [
            new \Gins\Pronouns\He(),
            new \Gins\Pronouns\She(),
            new \Gins\Pronouns\They(),
            new \Gins\Pronouns\Ae(),
            new \Gins\Pronouns\Ey(),
            new \Gins\Pronouns\Fae(),
            new \Gins\Pronouns\Per(),
            new \Gins\Pronouns\Ve(),
            new \Gins\Pronouns\X(),
            new \Gins\Pronouns\Xe(),
            new \Gins\Pronouns\Ze(),
        ];

        $this->nouns = array_merge($nouns, $inbuilt);
    }

    /**
     * Check all of our pronouns for a value
     * if we dont find one throw error.
     *
     * @param string $value
     *
     * @throws PronounNotRegistered
     *
     * @return Gins\Pronoun
     */
    public function findOrFailByValue($value)
    {
        foreach ($this->nouns as $noun) {
            if ($noun->getValue() == $value) {
                return $noun;
            }
        }

        throw new PronounNotRegistered();
    }

    /**
     * Add a pronoun.
     *
     * @param Gins\Pronoun $noun
     *
     * @return void
     */
    public function addNoun(\Gins\Pronoun $noun)
    {
        array_push($this->nouns, $noun);
    }

    /**
     * Get all our pronouns.
     *
     * @return array|Gins\Gender
     */
    public function getAll()
    {
        return $this->nouns;
    }
}
