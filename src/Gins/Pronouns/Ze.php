<?php

namespace Gins\Pronouns;

class Ze extends \Gins\Pronoun
{
    /**
     * Store a value for this pronoun.
     *
     * @var string
     */
    protected $value = 'ze';

    /**
     * The Subject noun.
     *
     * @var string
     */
    protected $subject = 'Ze';

    /**
     * The Object noun.
     *
     * @var string
     */
    protected $object = 'Hir';

    /**
     * The Possessive noun.
     *
     * @var string
     */
    protected $possessive = 'Hir';

    /**
     * The Possessive Plural noun.
     *
     * @var string
     */
    protected $possessive_plural = 'Hirs';

    /**
     * The Reflection noun.
     *
     * @var string
     */
    protected $reflective = 'Hirself';
}
