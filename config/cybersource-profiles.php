<?php

/* Cybersource Secure Acceptance W/M Profile Config*/
define('MERCHANT_ID', 'kiwipay');
define('PROFILE_ID',  '483F6A4B-F9E7-42E3-A486-3A139E7A708C');
define('ACCESS_KEY',  '1dcfeff884be3244ab82c2ed351d036b');
define('SECRET_KEY',  '93c98b4b8464417e880f295c12bff3938219a5aad1284411af12266b402ae91468e3295d230e4fa4827d46664d4e8af5cf81d4133b824703b7dff99ca2cf44c61e391f5492a049f49672ecea4cb20d10b81e0e63c8a345c8952391dbe490f1c1b91685e2d531444c9ac492b876ee58aeee0aae67e30e4278aa8022c9e2636a9b');

// DF TEST: 1snn5n9w, LIVE: k8vif92e 
define('DF_ORG_ID', '1snn5n9w');

// PAYMENT URL
define('CYBS_BASE_URL', 'https://testsecureacceptance.cybersource.com');

define('PAYMENT_URL', CYBS_BASE_URL . '/pay');
// define('PAYMENT_URL', '/sa-sop/debug.php');

define('TOKEN_CREATE_URL', CYBS_BASE_URL . '/token/create');
define('TOKEN_UPDATE_URL', CYBS_BASE_URL . '/token/update');

// EOF Secure Acceptance W/M

 /* Cybersource Silnet Order Profile Config*/
// define('MERCHANT_ID', ''); Merchant Id is Unique in two cases
define('PROFILE_ID_S',  '483F6A4B-F9E7-42E3-A486-3A139E7A708C');
define('ACCESS_KEY_S',  '1dcfeff884be3244ab82c2ed351d036b');
define('SECRET_KEY_S',  '93c98b4b8464417e880f295c12bff3938219a5aad1284411af12266b402ae91468e3295d230e4fa4827d46664d4e8af5cf81d4133b824703b7dff99ca2cf44c61e391f5492a049f49672ecea4cb20d10b81e0e63c8a345c8952391dbe490f1c1b91685e2d531444c9ac492b876ee58aeee0aae67e30e4278aa8022c9e2636a9b');

// DF TEST: 1snn5n9w, LIVE: k8vif92e 
define('DF_ORG_ID_S', '1snn5n9w');

// PAYMENT URL
define('CYBS_BASE_URL_S', 'https://testsecureacceptance.cybersource.com/silent');

define('PAYMENT_URL_S', CYBS_BASE_URL_S . '/pay');
// define('PAYMENT_URL', '/sa-sop/debug.php');

define('TOKEN_CREATE_URL_S', CYBS_BASE_URL_S . '/token/create');
define('TOKEN_UPDATE_URL_S', CYBS_BASE_URL_S . '/token/update');

// EOF Silnet Order