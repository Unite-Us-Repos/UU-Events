
<?php
/**
 * Get the current timezone abbreviation (e.g. PST, EST) for a given timezone identifier.
 *
 * @param string $timezoneIdentifier A valid timezone identifier like 'America/Los_Angeles'.
 * @param string|null $dateTime Optional date/time string. If null, current date/time is used.
 * @return string|false The timezone abbreviation (e.g. PST, EDT), or false on failure.
 */
function getTimezoneAbbreviation(string $timezoneIdentifier, string $dateTime = null) {
    try {
        // Create a DateTimeZone object with the given identifier
        $timezone = new DateTimeZone($timezoneIdentifier);

        // Create a DateTime object with the given timezone and optional datetime string
        $date = new DateTime($dateTime ?? 'now', $timezone);

        // Return the timezone abbreviation (e.g. PST, PDT, EST)
        return $date->format('T');
    } catch (Exception $e) {
        // Return false if an invalid timezone identifier or date is provided
        return false;
    }
}
