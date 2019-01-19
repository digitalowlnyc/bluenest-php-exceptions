<?php
/**
 * Creator: Bryan Mayor
 * Company: Blue Nest Digital, LLC
 * License: (Blue Nest Digital LLC, All rights reserved)
 * Copyright: Copyright 2018 Blue Nest Digital LLC
 */

/**
 * Class DomainAssertionException
 *
 * A domain specific exception triggered by explicit assertion or validation logic
 */

class DomainAssertionException extends DomainException {
    private $expectedValue;
    private $actualValue;
    private $fieldName;

    function __construct(string $message = "", int $code = 0, Throwable $previous = null) {
        parent::__construct($message, $code, $previous);
    }

    public static function create($fieldName, $expectedValue, $actualValue) {
        $message = "Bad value for '" . $fieldName . "': expected=" . $expectedValue . ", actual=" . $actualValue;

        $exception = new DomainAssertionException($message);
        $exception->actualValue = $actualValue;
        $exception->expectedValue = $expectedValue;
        $exception->fieldName = $fieldName;

        return $exception;
    }
}