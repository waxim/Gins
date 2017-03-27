<?php

namespace Gins\Pronouns;

class They extends \Gins\Pronoun
{
    /**
     * Store a value for this pronoun.
     *
     * @var string
     */
    protected $value = 'they';

    /**
     * The Subject noun.
     *
     * @var string
     */
    protected $subject = 'They';

    /**
     * The Object noun.
     *
     * @var string
     */
    protected $object = 'Them';

    /**
     * The Possessive noun.
     *
     * @var string
     */
    protected $possessive = 'Their';

    /**
     * The Possessive Plural noun.
     *
     * @var string
     */
    protected $possessive_plural = 'Theirs';

    /**
     * The Reflection noun.
     *
     * @var string
     */
    protected $reflective = 'Themself';
}
