<?php
/**
 * EmailConfirmedNonCaptcha class
 *
 * @author Will Kahn-Greene
 * @addtogroup extensions
 */

class EmailConfirmedNonCaptcha extends SimpleCaptcha {
    /**
     * Check if the submitted form matches the captcha session data provided
     * by the plugin when the form was generated.
     *
     * Override this!
     *
     * @param string $answer
     * @param array $info
     * @return bool
     */
    function keyMatch($answer, $info) {
        // always return false since this captcha always fails
        return false;
    }

    /**
     * Insert a captcha prompt into the edit form.
     * This sample implementation generates a simple arithmetic operation;
     * it would be easy to defeat by machine.
     *
     * Override this!
     *
     * @return string HTML
     */
    function getForm() {
        global $wgEmailConfirmedNonCaptchaText;
        return "<p>{$wgEmailConfirmedNonCaptchaText}</p>";
    }

    /**
     * Show a message asking the user to enter a captcha on edit
     * The result will be treated as wiki text
     *
     * @param $action Action being performed
     * @return string
     */
    function getMessage($action) {
        $name = 'emailconfirmedcaptcha-' . $action;
        $text = wfMsg($name);
        # Obtain a more tailored message, if possible, otherwise, fall back to
        # the default for edits
        return wfEmptyMsg($name, $text) ? wfMsg('emailconfirmedcaptcha-edit') : $text;
    }
}
