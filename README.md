AutoMail2Abuse
==============

Send messages to ISP's abuse emails(taken from whois)


Parser mode

Usage example parse.php

Logger mode

Add to .htaccess
RewriteEngine On
RewriteCond %{QUERY_STRING} (etc/passwd|shellx.php|proc/self/environ|jack.php)
RewriteRule ^(.*)$ http://1.1.1.1/am2a/logger.php?host=%{HTTP_HOST}&uri=%{REQUEST_URI}&q=%{QUERY_STRING}&agent=%{HTTP_USER_AGENT}&ip=%{REMOTE_ADDR} [L]

Usage example logger.php
