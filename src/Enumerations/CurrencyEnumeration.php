<?php

namespace LaravelEnumeration\Enumerations;

/**
 * Class CurrencyEnumeration
 * @package LaravelEnumeration\Enumerations
 */
class CurrencyEnumeration
{
	/**
	 * Default dollar code
	 */
    const CURRENCY_USD = 'usd';
	
	/**
	 * Default euro code
	 */
    const CURRENCY_EUR = 'eur';
	
	/**
	 * Default turkish lira code
	 */
    const CURRENCY_TRY = 'try';
    
    /**
     * Holds predefined currencies
     *
     * @var array
     */
    private static $currencies = [
        
        self::CURRENCY_USD => '$',
        
        self::CURRENCY_EUR => '€',
        
        self::CURRENCY_TRY => '₺'
    
    ];
    
    /**
     * Returns predefined currencies
     *
     * @return array
     */
    public static function getCurrencies()
    {
        return self::$currencies;
    }
}
