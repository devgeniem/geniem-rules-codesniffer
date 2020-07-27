<?php
/**
 * This file contains stuff that shouldn't trigger errors.
 *
 * @package TestData
 */

namespace Geniem\TestData;

/**
 * Class NoErrors
 *
 * @package Geniem\TestData
 */
class NoErrors {
    /**
     * No Errors.
     *
     * @return array
     */
    public function no_errors() {

        $result = array_map( function ( $item ) {
            return $item;
        }, [] );

        array_walk( $result->callbacks, function( $callbacks, $priority ) use ( &$hooks ) {
            foreach ( $callbacks as $id => $callback ) {
                $hooks[] = array_merge( [ 'id' => $id, 'priority' => $priority ], $callback );
            }
        } );

        return $result;
    }
}
