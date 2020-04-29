<?php

namespace Embera\Providers;

/**
 * The 20minutes Provider
 * @link https://www.20minutes.fr
 */
class TwentyMinutes extends \Embera\Adapters\Service
{
    /** inline {@inheritdoc} */
    protected $apiUrl = 'https://www.20minutes.fr/';

    /** inline {@inheritdoc} */
    protected function validateUrl()
    {
        $this->url->stripLastSlash();

        return (preg_match('/^https:\/\/www.20minutes.fr/', $this->url));
    }
}
