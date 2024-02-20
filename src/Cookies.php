<?php

namespace PhpCmsig\HttpList;

class Cookies
{
    /**
     * @return string[]
     */
    public static function getCookies(): array
    {
        return [
            // Google Analytics
            // https://developers.google.com/analytics/devguides/collection/analyticsjs/cookie-usage
            '_ga.*',
            '_gid',
            '_dc_gtm_.+',
            'AMP_TOKEN',
            '__utm.+',

            // Google Conversion Linker
            // https://support.google.com/tagmanager/answer/7549390
            '_gcl.*',

            // Matomo
            // https://matomo.org/faq/general/faq_146/
            '_pk_id.*',
            '_pk_ref.*',
            '_pk_ses.*',
            '_pk_cvar.*',
            '_pk_hsr.*',

            // Cloudflare
            '__cfduid',
            'cf_clearance',
            'cf_use_ob',
            'cf_ob_info',

            // Facebook Pixel
            '_fbp',

            // Blackfire
            '__blackfire',

            // Tideways
            'TIDEWAYS_SESSION',

            // Litespeed HTTP2 Smart Push
            'ls_smartpush',

            // Osano Cookie Consent
            'cookieconsent_status',

            // Cookiebot Cookie Consent
            'CookieConsent',

            // Cypress
            '__cypress_initial',
        ];
    }
}
