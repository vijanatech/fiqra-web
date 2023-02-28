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
 * Class GetRecordingsParameters.
 *
 * @method string getMeetingID()
 * @method $this  setMeetingID(string $id)
 * @method string getRecordID()
 * @method $this  setRecordID(string $recordID)
 * @method string getState()
 * @method $this  setState(string $state)
 */
class GetRecordingsParameters extends MetaParameters
{
    /**
     * @var string
     */
    protected $meetingID;

    /**
     * @var string
     */
    protected $recordID;

    /**
     * @var string
     */
    protected $state;

    /**
     * @deprecated use getMeetingID()
     *
     * @return string
     */
    public function getMeetingId()
    {
        return $this->meetingID;
    }

    /**
     * @deprecated use setMeetingID()
     *
     * @return GetRecordingsParameters
     */
    public function setMeetingId(string $meetingID)
    {
        $this->meetingID = $meetingID;

        return $this;
    }

    /**
     * @deprecated use getRecordID()
     *
     * @return string
     */
    public function getRecordId()
    {
        return $this->recordID;
    }

    /**
     * @deprecated use setRecordID()
     *
     * @return GetRecordingsParameters
     */
    public function setRecordId(string $recordID)
    {
        $this->recordID = $recordID;

        return $this;
    }
}
