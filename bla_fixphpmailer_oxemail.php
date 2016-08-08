<?php
class bla_fixphpmailer_oxemail extends bla_fixphpmailer_oxemail_parent
{
	public function __construct()
	{
		parent::__construct();
		$this->set('Encoding','base64');
	}
    
}