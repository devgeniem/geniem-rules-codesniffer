<?php
/**
 * This file contains intentional errors.
 * Please do not fix this file.
 *
 * @package TestData
 */

namespace Geniem\TestData;

/**
 * Class Errors
 *
 * @package Geniem\TestData
 */
class Errors {
    public function ThisIsAMethod() { // This line should fail because it's not snake_case
        try {
            throw new \Exception( 'Exception' );
        } catch ( \Exception $e ) { // This line should fail because ElseCatchNewlineSniff
            error_log( $e->getMessage() ); // WordPress.PHP.DevelopmentFunctions.error_log_error_log
        }
    }
}
