<?php

namespace Gins\Genders;

class NonBinary extends \Gins\Gender
{
    /**
     * The english term for the gender.
     *
     * @var string
     */
    protected $term = "Non-Binary";

    /**
     * The value used to id this gender.
     *
     * @var string
     */
    protected $value = "x";

    /**
     * Construct our gender
     *
     * @return $this
     */
    public function __construct()
    {
        $this->noun = new \Gins\Pronouns\They();
    }
}
