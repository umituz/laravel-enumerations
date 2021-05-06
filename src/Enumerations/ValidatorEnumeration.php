<?php

namespace LaravelEnumeration\Enumerations;

/**
 * Class ValidatorEnumeration
 * @package LaravelEnumeration\Enumerations
 */
class ValidatorEnumeration
{
    /**
     * Returns the maximum length of column type TEXT
     */
	const MAX_TEXT_LENGTH = 1000;
	
    /**
     * Returns the maximum length of column type VARCHAR
     */
	const MAX_STRING_LENGTH = 191;
	
    /**
     * Returns the maximum length of column type CHAR
     */
	const MAX_CHAR_LENGTH = 30;
	
    /**
     * Returns the minimum length of column type CHAR
     */
	const MIN_CHAR_LENGTH = 15;
	
    /**
     * Returns the maximum length of column type INTEGER
     */
	const MAX_INTEGER_LENGTH = 11;
	
    /**
     * Returns the maximum length of column type BIG INTEGER
     */
	const MAX_BIG_INTEGER_LENGTH = 20;
	
    /**
     * Returns the maximum length of column type TINYINT
     */
	const MAX_TINYINT_LENGTH = 1;
}