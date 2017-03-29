<?php

namespace Gins\Genders;

class Male extends \Gins\Gender
{
    /**
     * The english term for the gender.
     *
     * @var string
     */
    protected $term = 'Devsex';

    /**
     * The value used to id this gender.
     *
     * @var string
     */
    protected $value = 'fedora';

    /**
     * Construct our gender.
     *
     * @return $this
     */
    public function __construct()
    {
        $this->noun = new \Gins\Pronouns\Vim();
    }
}
