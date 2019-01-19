<?php
/**
 * Creator: Bryan Mayor
 * Company: Blue Nest Digital, LLC
 * License: (Blue Nest Digital LLC, All rights reserved)
 * Copyright: Copyright 2018 Blue Nest Digital LLC
 */

class UnsupportedValueException extends RuntimeException
{
    function __construct($label, $value, $validValues = [], Throwable $previous = null) {
        $message = "The value '" . $value . "' is not supported.";

        if($validValues !== null) {
            $message .= " Valid values are '" . print_r($validValues, true) . "'";
        }

        parent::__construct($message, 0, $previous);
    }
}