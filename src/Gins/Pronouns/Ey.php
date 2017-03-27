<?php

namespace Gins\Pronouns;

class Ey extends \Gins\Pronoun
{
    /**
     * Store a value for this pronoun.
     *
     * @var string
     */
    protected $value = 'ey';

    /**
     * The Subject noun.
     *
     * @var string
     */
    protected $subject = 'Ey';

    /**
     * The Object noun.
     *
     * @var string
     */
    protected $object = 'Em';

    /**
     * The Possessive noun.
     *
     * @var string
     */
    protected $possessive = 'Eir';

    /**
     * The Possessive Plural noun.
     *
     * @var string
     */
    protected $possessive_plural = 'Eirs';

    /**
     * The Reflection noun.
     *
     * @var string
     */
    protected $reflective = 'Eirself';
}
