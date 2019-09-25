<?php
/**
 * Created by PhpStorm.
 * User: Angel Gonzalez
 * Date: 09/25/2019
 * Time: 00:40
 */

namespace ProjectSaturn\Definitions\Dictionary;

use Illuminate\Support\Fluent;

class Beacon extends Fluent
{
    /**
     * @param $major
     * @return $this
     */
    public function setMajor($major)
    {
        $this->attributes['major'] = $major;

        return $this;
    }

    /**
     * @param $minor
     * @return $this
     */
    public function setMinor($minor)
    {
        $this->attributes['minor'] = $minor;

        return $this;
    }

    /**
     * @param $proximityUUID
     * @return $this
     */
    public function setProximityUUID($proximityUUID)
    {
        $this->attributes['proximityUUID'] = $proximityUUID;

        return $this;
    }

    /**
     * @param $relevantText
     * @return $this
     */
    public function setRelevantText($relevantText)
    {
        $this->attributes['relevantText'] = $relevantText;

        return $this;
    }
}
