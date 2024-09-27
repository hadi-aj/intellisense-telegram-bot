<?php

namespace HadiAj\IntelliSenseTelegramBot\types;

/**
 * This object represents a point on the map.
 *
 * @property Float $latitude Latitude as defined by sender
 * @property Float $longitude Longitude as defined by sender
 * @property Float $horizontal_accuracy Optional. The radius of uncertainty for the location, measured in meters; 0-1500
 * @property Integer $live_period Optional. Time relative to the message sending date, during which the location can be updated; in seconds. For active live locations only.
 * @property Integer $heading Optional. The direction in which user is moving, in degrees; 1-360. For active live locations only.
 * @property Integer $proximity_alert_radius Optional. The maximum distance for proximity alerts about approaching another chat member, in meters. For sent live locations only.
 */
class Location {

}
