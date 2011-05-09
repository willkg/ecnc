?php
/**
 * A non-captcha plugin that requires emailconfirmed.
 *
 * Copyright (C) 2011 Participatory Culture Foundation
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along
 * with this program; if not, write to the Free Software Foundation, Inc.,
 * 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 * http://www.gnu.org/copyleft/gpl.html
 *
 * @addtogroup Extensions
 */

if (!defined('MEDIAWIKI')) {
    exit;
}

global $wgEmailConfirmedNonCaptchaText;
$wgEmailConfirmedNonCaptchaText = 'You must confirm your email address before you can continue.';

$dirfile = dirname(__FILE__);
$wgExtensionMessagesFiles['EmailConfirmedNonCaptcha'] = $dirfile . '/EmailConfirmedNonCaptcha.i18n.php';
$wgAutoloadClasses['EmailConfirmedNonCaptcha'] = $dirfile . '/EmailConfirmedNonCaptcha.class.php';
