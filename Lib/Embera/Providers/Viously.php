<?php

namespace Embera\Providers;

/**
 * The Viously Provider
 * @link https://www.viously.com/fr
 */
class Viously extends \Embera\Adapters\Service
{
    /** inline {@inheritdoc} */
    protected $apiUrl = 'https://www.viously.com/oembed?url=';

    /** inline {@inheritdoc} */
    protected function validateUrl()
    {
        $this->url->stripLastSlash();

        // [A-Za-z0-9\-]+ => All letters + numbers + dashes (upper or lower case)
        return (preg_match('~viously.com\/([A-Za-z0-9\-]+)\/([A-Za-z0-9\-]+)~i', $this->url));
    }
}

?>
