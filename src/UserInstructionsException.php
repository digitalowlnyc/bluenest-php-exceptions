<?php
/**
 * Creator: Bryan Mayor
 * Company: Blue Nest Digital, LLC
 * License: (Blue Nest Digital LLC, All rights reserved)
 * Copyright: Copyright 2018 Blue Nest Digital LLC
 */

class UserInstructionsException extends RuntimeException
{
    function __construct(string $message = "", int $code = 0, Throwable $previous = null) {
        $message = "User action required: " . $message;
        parent::__construct($message, $code, $previous);
    }
}