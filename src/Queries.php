<?php

namespace PhpCmsig\HttpList;

class Queries
{
    /**
     * @return string[]
     */
    public static function getQueries(): array
    {
        return [
            'L',
            // Matomo
            'mtm_campaign',
            'mtm_keyword',
            'mtm_kwd',
            'mtm_source',
            'mtm_medium',
            'mtm_content',
            'mtm_cid',
            'mtm_group',
            'mtm_placement',
            // Piwik
            'pk_campaign',
            'pk_kwd',
            '_stg_debug',
            // Google
            'utm_source',
            'utm_medium',
            'utm_campaign',
            'utm_term',
            'utm_content',
            'utm_id',
            'utm_source_platform',
            'utm_creative_format',
            'utm_marketing_tactic',
            'gtm_debug',
            '_gl',
            // Google ads
            'gad',
            'gclid',
            'dclid',
            // Facebook
            'fbclid',
            // Microsoft Bing Ads.
            'msclkid',
            // HubSpot Ad Tracking Parameters
            'hsa_acc',
            'hsa_ad',
            'hsa_cam',
            'hsa_grp',
            'hsa_kw',
            'hsa_mt',
            'hsa_net',
            'hsa_src',
            'hsa_tgt',
            'hsa_ver',
            'hsa_ol',
            'hsa_la',
            // HubSpot Email Tracking Parameters
            '_hsenc',
            '_hsmi',
            // HubSpot CTA Tracking Parameters
            '__hssc',
            '__hstc',
            '__hsfp',
            'hsCtaTracking',
            // HubSpot Form Tracking Parameters
            'submissionGuid',
        ];
    }
}
