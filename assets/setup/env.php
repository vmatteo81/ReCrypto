<?php

if (!defined('APP_NAME'))                       define('APP_NAME', 'KycDefiWallet');
if (!defined('APP_ORGANIZATION'))               define('APP_ORGANIZATION', 'DefiAuthority');
if (!defined('APP_OWNER'))                      define('APP_OWNER', 'vmatteo81');
if (!defined('APP_DESCRIPTION'))                define('APP_DESCRIPTION', 'add Kyc to defi wallet');

if (!defined('ALLOWED_INACTIVITY_TIME'))        define('ALLOWED_INACTIVITY_TIME', time()+1*60);

if (!defined('DB_DATABASE'))                    define('DB_DATABASE', 'kycdefiwallet');
if (!defined('DB_HOST'))                        define('DB_HOST','localhost');
if (!defined('DB_USERNAME'))                    define('DB_USERNAME','root');
if (!defined('DB_PASSWORD'))                    define('DB_PASSWORD' ,'');
if (!defined('DB_PORT'))                        define('DB_PORT' ,'');

if (!defined('MAIL_HOST'))                      define('MAIL_HOST', 'smtp-relay.sendinblue.com');
if (!defined('MAIL_USERNAME'))                  define('MAIL_USERNAME', 'vmatteo23@yahoo.it');
if (!defined('MAIL_PASSWORD'))                  define('MAIL_PASSWORD', 'Z94Bmw0EqDJHGS1n');
if (!defined('MAIL_ENCRYPTION'))                define('MAIL_ENCRYPTION', 'ssl');
if (!defined('MAIL_PORT'))                      define('MAIL_PORT', 587);