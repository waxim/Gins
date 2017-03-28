<?php

namespace Gins\Genders;

class AttackHelicopter extends \Gins\Gender
{
    /**
     * The english term for the gender.
     *
     * @var string
     */
    protected $term = 'Attack Helicopter';

    /**
     * The value used to id this gender.
     *
     * @var string
     */
    protected $value = 'ah';

    /**
     * Construct our gender.
     *
     * @return $this
     */
    public function __construct()
    {
        $this->noun = new \Gins\Pronouns\Choppa();
    }
}
