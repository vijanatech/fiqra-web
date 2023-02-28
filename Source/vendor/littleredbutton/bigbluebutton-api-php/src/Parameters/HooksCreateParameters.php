<?php
/**
 * BigBlueButton open source conferencing system - https://www.bigbluebutton.org/.
 *
 * Copyright (c) 2016-2018 BigBlueButton Inc. and by respective authors (see below).
 *
 * This program is free software; you can redistribute it and/or modify it under the
 * terms of the GNU Lesser General Public License as published by the Free Software
 * Foundation; either version 3.0 of the License, or (at your option) any later
 * version.
 *
 * BigBlueButton is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 * PARTICULAR PURPOSE. See the GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License along
 * with BigBlueButton; if not, see <http://www.gnu.org/licenses/>.
 */

namespace BigBlueButton\Parameters;

/**
 * @method string    getCallbackURL()
 * @method $this     setCallbackURL(string $url)
 * @method string    getMeetingID()
 * @method $this     setMeetingID(string $id)
 * @method bool|null isGetRaw()
 * @method $this     setGetRaw(bool $getRaw)
 */
class HooksCreateParameters extends BaseParameters
{
    /**
     * @var string
     */
    protected $callbackURL;

    /**
     * @var string
     */
    protected $meetingID;

    /**
     * @var bool
     */
    protected $getRaw;

    public function __construct(string $callbackURL)
    {
        $this->callbackURL = $callbackURL;
    }

    /**
     * @deprecated use getCallbackURL() instead
     *
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackURL;
    }

    /**
     * @deprecated use setCallbackURL() instead
     *
     * @return HooksCreateParameters
     */
    public function setCallbackUrl(string $callbackURL)
    {
        $this->callbackURL = $callbackURL;

        return $this;
    }

    /**
     * @deprecated use getMeetingID() instead
     *
     * @return string
     */
    public function getMeetingId()
    {
        return $this->meetingID;
    }

    /**
     * @deprecated use setMeetingID() instead
     *
     * @return HooksCreateParameters
     */
    public function setMeetingId(string $meetingID)
    {
        $this->meetingID = $meetingID;

        return $this;
    }

    /**
     * @deprecated use isGetRaw()
     *
     * @return bool
     */
    public function getRaw()
    {
        return $this->getRaw;
    }
}
