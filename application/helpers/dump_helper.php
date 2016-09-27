<?php
/**
 * Created by PhpStorm.
 * User: Rizki Herdatullah
 * Date: 9/26/2016
 * Time: 10:30 PM
 */
/**
 * Dump helper. Functions to dump variables to the screen, in a nicley formatted manner.
 * @author Joost van Veen
 * @version 1.0
 */
if (!function_exists('dump')) {
    /** @noinspection PhpInconsistentReturnPointsInspection
     * @param $var
     * @param string $label
     * @param bool $echo
     * @return mixed|string
     */
    function dump ($var, $label = 'Dump', $echo = TRUE)
    {
        // Store dump in variable
        ob_start();
        /** @noinspection ForgottenDebugOutputInspection */
        var_dump($var);
        $output = ob_get_clean();

        // Add formatting
        $output = preg_replace('/]=>n(s+)/m', '] => ', $output);
        $output = '<pre style="background: #FFFEEF; color: #000; border: 1px dotted #000; padding: 10px; margin: 10px 0; text-align: left;">' . $label . ' => ' . $output . '</pre>';

        // Output
        if ($echo == TRUE) {
            echo $output;
        }
        else {
            return $output;
        }
    }
}

if (!function_exists('dump_exit')) {
    function dump_exit($var, $label = 'Dump', $echo = TRUE) {
        dump ($var, $label, $echo);
        exit;
    }
}