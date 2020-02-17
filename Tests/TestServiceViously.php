<?php

require_once 'TestProviders.php';

class TestServiceViously extends TestProviders
{
    protected $urls = array(
        'valid' => array(
            'https://www.viously.com/video-fr/p-LdALOtB4U',
            'https://www.viously.com/positivr/gw2jTFu7Lsr',
        ),
        'invalid' => array(
            'https://www.ultimedia.com/default/index/videogeneric/notid/8mr0v0',
            'https://dailymotion.com/default/index/videogeneric/id/8mr0v0',
            'https://www.viously.com/positivr_/gw2jTFu7Lsr', // Contain underscore
        )
    );

    public function testProvider() { $this->validateProvider('Viously'); }
}
?>
