<?php
/**
 * Checks that else/elseif/catch statements start on a new line.
 *
 * PHP version 7
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */

namespace Geniem\Sniffs\ControlStructures;

use WordPressCS\WordPress\Sniff;

/**
 * Checks that else/elseif/catch statements start on a new line.
 *
 * This has been copied originally from:
 * https://github.com/zroger/phpcs-drupal/blob/master/Sniffs/ControlStructures/ElseCatchNewlineSniff.php
 *
 * @category PHP
 * @package  PHP_CodeSniffer
 * @link     http://pear.php.net/package/PHP_CodeSniffer
 */
class ElseCatchNewlineSniff extends Sniff {
    /**
     * Returns an array of tokens this test wants to listen for.
     *
     * @return array
     */
    public function register() {
        return [
            T_ELSE,
            T_ELSEIF,
            T_CATCH,
        ];
    }//end register()

    /**
     * Processes this test, when one of its tokens is encountered.
     *
     * @param int $stackPtr The position of the current token in the stack passed in $tokens.
     *
     * @return void
     */
    public function process_token( $stackPtr ) {
        $tokens            = $this->phpcsFile->getTokens();
        $prevNonWhiteSpace = $this->phpcsFile->findPrevious(
            \PHP_CodeSniffer_Tokens::$emptyTokens,
            ( $stackPtr - 1 ),
            null,
            true
        );

        if ( $tokens[ $prevNonWhiteSpace ]['line'] === $tokens[ $stackPtr ]['line'] ) {
            $error = '%s must start on a new line';
            $data  = [ $tokens[ $stackPtr ]['content'] ];
            $this->phpcsFile->addError( $error, $stackPtr, 'ElseNewline', $data );
        }

    }//end process_token()

}//end class
