<?php

namespace LaravelEnumeration\Enumerations;

/**
 * Class IconEnumeration
 * @package LaravelEnumeration\Enumerations
 */
class IconEnumeration
{
    /**
     * Holds predefined icon class names
     *
     * @var array
     */
    private static $icons = [
        
        'address' => 'fas fa-map-marker-alt',
        'phone' => 'fas fa-phone-alt',
        'email' => 'fas fa-envelope',
        'facebook' => 'icon-facebook',
        'twitter' => 'icon-twitter',
        'instagram' => 'icon-instagram',
        'youtube' => 'icon-youtube'
    
    ];
    
    /**
     * Returns predefined icons
     *
     * @return array
     */
    public static function getIcons()
    {
        return self::$icons;
    }
}
