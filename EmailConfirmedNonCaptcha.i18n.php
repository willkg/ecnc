<?php
/**
 * Internationalisation file for the EmailConfirmedNonCaptcha plug-in.
 *
 * @addtogroup Extensions
*/

$messages = array();

/** English */
$messages['en'] = array(
    'emailconfirmedcaptcha-desc' => 'Email Confirmed Non Captcha generator for Confirm Edit',
    'emailconfirmedcaptcha-addurl' => 'Your edit includes new external links.',
    'emailconfirmedcaptcha-badlogin' => '',
    'emailconfirmedcaptcha-createaccount' => '',
    'emailconfirmedcaptcha-create' => '',
    'emailconfirmedcaptcha-edit' => '',
    'emailconfirmedcaptchahelp-text' => "Web sites that accept contributions from the public, like this wiki, are often abused by spammers who use automated tools to add their links to many sites.
While these spam links can be removed, they are a significant nuisance.

Sometimes, especially when adding new web links to a page, the wiki may require you to confirm your email address first.
Since this is a task that is hard to automate, it will allow most real humans to make their contributions while stopping most spammers and other robotic attackers.

Please contact the [[{{MediaWiki:Grouppage-sysop}}|site administrators]] for assistance if this is unexpectedly preventing you from making legitimate contributions.

Click the 'back' button in your browser to return to the page editor.",
);


/** Message documentation */
$messages['qqq'] = array(
    'emailconfirmedcaptcha-desc' => '{{desc}}',
    'emailconfirmedcaptcha-addurl' => 'See also
*{{msg-mw|captcha-addurl}}
*{{msg-mw|Fancycaptcha-addurl}}',
    'emailconfirmedcaptcha-badlogin' => 'See also
*{{msg-mw|captcha-badlogin}}
*{{msg-mw|Fancycaptcha-badlogin}}',
    'emailconfirmedcaptcha-createaccount' => 'See also
*{{msg-mw|captcha-createaccount}}
*{{msg-mw|Fancycaptcha-createaccount}}',
    'emailconfirmedcaptcha-create' => 'See also
*{{msg-mw|Captcha-create}}
*{{msg-mw|Fancycaptcha-create}}',
    'emailconfirmedcaptcha-edit' => 'See also
*{{msg-mw|Captcha-edit}}
*{{msg-mw|Fancycaptcha-edit}}',
    'emailconfirmedcaptchahelp-text' => 'See also {{msg-mw|Captchahelp-text}}.',
);
