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
 * Class PublishRecordingsParameters.
 *
 * @method string    getRecordID()
 * @method $this     setRecordID(string $recordID)
 * @method bool|null isPublish()
 * @method $this     setPublish(bool $publish)
 */
class PublishRecordingsParameters extends BaseParameters
{
    /**
     * @var string
     */
    protected $recordID;

    /**
     * @var bool
     */
    protected $publish;

    public function __construct(string $recordID, bool $publish)
    {
        $this->recordID = $recordID;
        $this->publish = $publish;
    }

    /**
     * @deprecated use getRecordID() instead
     *
     * @return string
     */
    public function getRecordingId()
    {
        return $this->recordID;
    }

    /**
     * @deprecated use setRecordID() instead
     *
     * @return PublishRecordingsParameters
     */
    public function setRecordingId(string $recordID)
    {
        $this->recordID = $recordID;

        return $this;
    }
}
