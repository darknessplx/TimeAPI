<?php

namespace darknessplx\TimeAPI;

class TimeManager {

    /** @var string Current timezone */
    private static string $timezone = "Europe/Warsaw";

    /** @var string Default time format */
    private static string $defaultFormat = "H:i:s";

    /**
     * Set the timezone (country/region)
     */
    public static function setTimezone(string $timezone): void {
        self::$timezone = $timezone;
    }

    /**
     * Set the default time format
     */
    public static function setFormat(string $format): void {
        self::$defaultFormat = $format;
    }

    /**
     * Get current time with optional format
     * If no format is provided, uses the default format
     */
    public static function getTime(?string $format = null): string {
        date_default_timezone_set(self::$timezone);
        return date($format ?? self::$defaultFormat);
    }

    /**
     * Get full date and time in "d.m.Y H:i:s" format
     */
    public static function getDateTime(): string {
        return self::getTime("d.m.Y H:i:s");
    }
}
