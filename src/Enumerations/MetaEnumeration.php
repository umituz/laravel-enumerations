<?php

namespace LaravelEnumeration\Enumerations;

/**
 * Class MetaEnumeration
 * @package LaravelEnumeration\Enumerations
 */
class MetaEnumeration
{
	/**
	 * Robots can index
	 */
    const YES_INDEX = null;

    /**
     * Robots can't index
     */
    const NO_INDEX = 'noindex';

    /**
     * Robots can't follow
     */
    const NO_FOLLOW = 'nofollow';

    /**
     * Robots can't index and follow
     */
    const NO_INDEX_NO_FOLLOW = 'noindex,nofollow';
}