<?php
$sMetadataVersion = '1.1';
$aModule          = array(
    'id'          => 'fix-phpmailer',
    'title'       => '<b>fix:</b> PHPMailer bug #751',
    'description' => '<a href="https://github.com/PHPMailer/PHPMailer/issues/751" target="_blank">https://github.com/PHPMailer/PHPMailer/issues/751</a>',
    'thumbnail'   => 'bestlife.png',
    'version'     => '0.1.0',
    'author'      => 'Marat Bedoev, Bestlife AG',
    'email'       => 'oxid@bestlife.ag',
    'url'         => 'http://www.bestlife.ag',
    'extend'      => array('oxemail' => 'fix-phpmailer/bla_fixphpmailer_oxemail')
);
