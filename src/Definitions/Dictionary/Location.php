<?php
/**
 * Created by PhpStorm.
 * User: Angel Gonzalez
 * Date: 09/25/2019
 * Time: 00:40
 */

namespace ProjectSaturn\Definitions\Dictionary;

use Illuminate\Support\Fluent;

class Location extends Fluent
{
    public function setAltitude($altitude)
    {
        $this->attributes['altitude'] = $altitude;

        return $this;
    }

    public function setLatitude($latitude)
    {
        $this->attributes['latitude'] = $latitude;

        return $this;
    }

    public function setLongitude($longitude)
    {
        $this->attributes['longitude'] = $longitude;

        return $this;
    }

    public function setRelevantText($relevantText)
    {
        $this->attributes['relevantText'] = $relevantText;

        return $this;
    }
}
