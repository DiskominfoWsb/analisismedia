<?php
defined('BASEPATH') or exit('No direct script access allowed');

// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin
$config['recaptcha_site_key'] = '6LcGjDQeAAAAAGYDG03W_YcwjGsNg4ysKIdZrJBs';
$config['recaptcha_secret_key'] = '6LcGjDQeAAAAAPcXJaIg_KigCZ57XTN6YZdbgQMa';

// $config['recaptcha_site_key'] = '6LdQPg4cAAAAANN2nwe-0jCk070uuaDbX9gRZ7VY';
// $config['recaptcha_secret_key'] = '6LdQPg4cAAAAAFGomc1JIjN0_w51SByQ7LbBQ1Bv';

// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'en';

/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */
