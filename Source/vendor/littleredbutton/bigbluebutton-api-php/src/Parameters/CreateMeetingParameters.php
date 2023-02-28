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

use BigBlueButton\Core\GuestPolicy;
use BigBlueButton\Core\MeetingLayout;

/**
 * @method string    getName()
 * @method $this     setName(string $name)
 * @method string    getMeetingID()
 * @method $this     setMeetingID(string $id)
 * @method string    getAttendeePW()
 * @method $this     setAttendeePW(string $password)
 * @method string    getModeratorPW()
 * @method $this     setModeratorPW(string $password)
 * @method string    getWelcome()
 * @method $this     setWelcome(string $welcome)
 * @method string    getDialNumber()
 * @method $this     setDialNumber(string $dialNumber)
 * @method string    getVoiceBridge()
 * @method $this     setVoiceBridge(string $voiceBridge)
 * @method string    getWebVoice()
 * @method $this     setWebVoice(string $webVoice)
 * @method int       getMaxParticipants()
 * @method $this     setMaxParticipants(int $maxParticipants)
 * @method string    getLogoutURL()
 * @method $this     setLogoutURL(string $logoutURL)
 * @method bool|null isRecord()
 * @method $this     setRecord(bool $isRecord)
 * @method int       getDuration()
 * @method $this     setDuration(int $duration)
 * @method string    getParentMeetingID()
 * @method $this     setParentMeetingID(string $parentMeetingID)
 * @method int       getSequence()
 * @method $this     setSequence(int $sequence)
 * @method bool|null isFreeJoin()
 * @method $this     setFreeJoin(bool $isFreeJoin)
 * @method bool|null isBreakoutRoomsEnabled()
 * @method $this     setBreakoutRoomsEnabled(bool $isBreakoutRoomsEnabled)
 * @method bool|null isBreakoutRoomsPrivateChatEnabled()
 * @method $this     setBreakoutRoomsPrivateChatEnabled(bool $isBreakoutRoomsPrivateChatEnabled)
 * @method bool|null isBreakoutRoomsRecord()
 * @method $this     setBreakoutRoomsRecord(bool $isBreakoutRoomsRecord)
 * @method string    getModeratorOnlyMessage()
 * @method $this     setModeratorOnlyMessage(string $message)
 * @method bool|null isAutoStartRecording()
 * @method $this     setAutoStartRecording(bool $isAutoStartRecording)
 * @method bool|null isAllowStartStopRecording()
 * @method $this     setAllowStartStopRecording(bool $isAllow)
 * @method bool|null isWebcamsOnlyForModerator()
 * @method $this     setWebcamsOnlyForModerator(bool $isWebcamsOnlyForModerator)
 * @method string    getLogo()
 * @method $this     setLogo(string $logo)
 * @method string    getBannerText()
 * @method $this     setBannerText(string $bannerText)
 * @method string    getBannerColor()
 * @method $this     setBannerColor(string $bannerColor)
 * @method string    getCopyright()
 * @method $this     setCopyright(string $copyright)
 * @method bool|null isMuteOnStart()
 * @method $this     setMuteOnStart(bool $isMuteOnStart)
 * @method bool|null isAllowModsToUnmuteUsers()
 * @method $this     setAllowModsToUnmuteUsers(bool $isAllowModsToUnmuteUsers)
 * @method bool|null isLockSettingsDisableCam()
 * @method $this     setLockSettingsDisableCam(bool $isLockSettingsDisableCam)
 * @method bool|null isLockSettingsDisableMic()
 * @method $this     setLockSettingsDisableMic(bool $isLockSettingsDisableMic)
 * @method bool|null isLockSettingsDisablePrivateChat()
 * @method $this     setLockSettingsDisablePrivateChat(bool $isLockSettingsDisablePrivateChat)
 * @method bool|null isLockSettingsDisablePublicChat()
 * @method $this     setLockSettingsDisablePublicChat(bool $isLockSettingsDisablePublicChat)
 * @method bool|null isLockSettingsDisableNote()
 * @method $this     setLockSettingsDisableNote(bool $isLockSettingsDisableNote)
 * @method bool|null isLockSettingsLockedLayout()
 * @method $this     setLockSettingsLockedLayout(bool $isLockSettingsLockedLayout)
 * @method bool|null isLockSettingsHideUserList()
 * @method $this     setLockSettingsHideUserList(bool $isLockSettingsHideUserList)
 * @method bool|null isLockSettingsLockOnJoin()
 * @method $this     setLockSettingsLockOnJoin(bool $isLockSettingsLockOnJoin)
 * @method bool|null isLockSettingsLockOnJoinConfigurable()
 * @method $this     setLockSettingsLockOnJoinConfigurable(bool $isLockSettingsLockOnJoinConfigurable)
 * @method string    getGuestPolicy()
 * @method $this     setGuestPolicy(string $guestPolicy)
 * @method bool|null isMeetingKeepEvents()
 * @method $this     setMeetingKeepEvents(bool $isMeetingKeepEvents)
 * @method bool|null isEndWhenNoModerator()
 * @method $this     setEndWhenNoModerator(bool $isEndWhenNoModerator)
 * @method int       getEndWhenNoModeratorDelayInMinutes()
 * @method $this     setEndWhenNoModeratorDelayInMinutes(int $endWhenNoModeratorDelayInMinutes)
 * @method string    getMeetingLayout()
 * @method $this     setMeetingLayout(string $meetingLayout)
 * @method string    getMeetingEndedURL()
 * @method $this     setMeetingEndedURL(string $meetingEndedURL)
 * @method bool|null isLearningDashboardEnabled()
 * @method $this     setLearningDashboardEnabled(bool $isLearningDashboardEnabled)
 * @method int       getLearningDashboardCleanupDelayInMinutes()
 * @method $this     setLearningDashboardCleanupDelayInMinutes(int $learningDashboardCleanupDelayInMinutes)
 * @method bool|null isAllowModsToEjectCameras()
 * @method $this     setAllowModsToEjectCameras(bool $isAllowModsToEjectCameras)
 * @method bool|null isAllowRequestsWithoutSession()
 * @method $this     setAllowRequestsWithoutSession(bool $isAllowRequestsWithoutSession)
 * @method bool|null isVirtualBackgroundsDisabled()
 * @method $this     setVirtualBackgroundsDisabled(bool $isVirtualBackgroundsDisabled)
 * @method int       getUserCameraCap()
 * @method $this     setUserCameraCap(int $cap)
 */
class CreateMeetingParameters extends MetaParameters
{
    /**
     * @deprecated use GuestPolicy::ALWAYS_ACCEPT instead
     */
    public const ALWAYS_ACCEPT = GuestPolicy::ALWAYS_ACCEPT;
    /**
     * @deprecated use GuestPolicy::ALWAYS_DENY instead
     */
    public const ALWAYS_DENY = GuestPolicy::ALWAYS_DENY;
    /**
     * @deprecated use GuestPolicy::ASK_MODERATOR instead
     */
    public const ASK_MODERATOR = GuestPolicy::ASK_MODERATOR;
    /**
     * @deprecated use GuestPolicy::ALWAYS_ACCEPT_AUTH instead
     */
    public const ALWAYS_ACCEPT_AUTH = GuestPolicy::ALWAYS_ACCEPT_AUTH;

    /**
     * @deprecated use MeetingLayout::CUSTOM_LAYOUT instead
     */
    public const CUSTOM_LAYOUT = MeetingLayout::CUSTOM_LAYOUT;
    /**
     * @deprecated use MeetingLayout::SMART_LAYOUT instead
     */
    public const SMART_LAYOUT = MeetingLayout::SMART_LAYOUT;
    /**
     * @deprecated use MeetingLayout::PRESENTATION_FOCUS instead
     */
    public const PRESENTATION_FOCUS = MeetingLayout::PRESENTATION_FOCUS;
    /**
     * @deprecated use MeetingLayout::VIDEO_FOCUS instead
     */
    public const VIDEO_FOCUS = MeetingLayout::VIDEO_FOCUS;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $meetingID;

    /**
     * @var string
     */
    protected $attendeePW;

    /**
     * @var string
     */
    protected $moderatorPW;

    /**
     * @var string
     */
    protected $welcome;

    /**
     * @var string
     */
    protected $dialNumber;

    /**
     * @var string
     */
    protected $voiceBridge;

    /**
     * @var string
     */
    protected $webVoice;

    /**
     * @var int
     */
    protected $maxParticipants;

    /**
     * @var string
     */
    protected $logoutURL;

    /**
     * @var bool
     */
    protected $record;

    /**
     * @var int
     */
    protected $duration;

    /**
     * @var bool
     */
    protected $isBreakout;

    /**
     * @var string
     */
    protected $parentMeetingID;

    /**
     * @var int
     */
    protected $sequence;

    /**
     * @var bool
     */
    protected $freeJoin;

    /**
     * @var bool
     */
    protected $breakoutRoomsEnabled;

    /**
     * @var bool
     */
    protected $breakoutRoomsPrivateChatEnabled;

    /**
     * @var bool
     */
    protected $breakoutRoomsRecord;

    /**
     * @var string
     */
    protected $moderatorOnlyMessage;

    /**
     * @var bool
     */
    protected $autoStartRecording;

    /**
     * @var bool
     */
    protected $allowStartStopRecording;

    /**
     * @var bool
     */
    protected $webcamsOnlyForModerator;

    /**
     * @var string
     */
    protected $logo;

    /**
     * @var string
     */
    protected $bannerText;

    /**
     * @var string
     */
    protected $bannerColor;

    /**
     * @var string
     */
    protected $copyright;

    /**
     * @var bool
     */
    protected $muteOnStart;

    /**
     * @var bool
     */
    protected $allowModsToUnmuteUsers;

    /**
     * @var bool
     */
    protected $lockSettingsDisableCam;

    /**
     * @var bool
     */
    protected $lockSettingsDisableMic;

    /**
     * @var bool
     */
    protected $lockSettingsDisablePrivateChat;

    /**
     * @var bool
     */
    protected $lockSettingsDisablePublicChat;

    /**
     * @var bool
     */
    protected $lockSettingsDisableNote;

    /**
     * @var bool
     */
    protected $lockSettingsLockedLayout;

    /**
     * @var bool
     */
    protected $lockSettingsHideUserList;

    /**
     * @var bool
     */
    protected $lockSettingsLockOnJoin;

    /**
     * @var bool
     */
    protected $lockSettingsLockOnJoinConfigurable;

    /**
     * @var string
     */
    protected $guestPolicy = GuestPolicy::ALWAYS_ACCEPT;

    /**
     * @var bool
     */
    protected $meetingKeepEvents;

    /**
     * @var bool
     */
    protected $endWhenNoModerator;

    /**
     * @var int
     */
    protected $endWhenNoModeratorDelayInMinutes;

    /**
     * @var string
     */
    protected $meetingLayout;

    /**
     * @var string
     */
    protected $meetingEndedURL;

    /**
     * @var bool
     */
    protected $learningDashboardEnabled;

    /**
     * @var int
     */
    protected $learningDashboardCleanupDelayInMinutes;

    /**
     * @var bool
     */
    protected $allowModsToEjectCameras;

    /**
     * @var bool
     */
    protected $allowRequestsWithoutSession;

    /**
     * @var bool
     */
    protected $virtualBackgroundsDisabled;

    /**
     * @var int
     */
    protected $userCameraCap;

    /**
     * @var array
     */
    private $presentations = [];

    public function __construct(string $meetingID, string $name)
    {
        $this->meetingID = $meetingID;
        $this->name = $name;
    }

    /**
     * @deprecated use getName()
     *
     * @return string
     */
    public function getMeetingName()
    {
        return $this->name;
    }

    /**
     * @deprecated use setName()
     *
     * @return static
     */
    public function setMeetingName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

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
     * @return CreateMeetingParameters
     */
    public function setMeetingId(string $meetingID)
    {
        $this->meetingID = $meetingID;

        return $this;
    }

    /**
     * @deprecated use getAttendeePW()
     *
     * @return string
     */
    public function getAttendeePassword()
    {
        return $this->attendeePW;
    }

    /**
     * @deprecated use setAttendeePW()
     *
     * @return static
     */
    public function setAttendeePassword(string $password): self
    {
        $this->attendeePW = $password;

        return $this;
    }

    /**
     * @deprecated use getModeratorPW()
     *
     * @return string
     */
    public function getModeratorPassword()
    {
        return $this->moderatorPW;
    }

    /**
     * @deprecated use setModeratorPW()
     *
     * @return static
     */
    public function setModeratorPassword(string $password): self
    {
        $this->moderatorPW = $password;

        return $this;
    }

    /**
     * @deprecated use getWelcome()
     *
     * @return string
     */
    public function getWelcomeMessage()
    {
        return $this->welcome;
    }

    /**
     * @deprecated use setWelcome()
     *
     * @return CreateMeetingParameters
     */
    public function setWelcomeMessage(string $welcome)
    {
        $this->welcome = $welcome;

        return $this;
    }

    /**
     * @deprecated use getLogoutURL()
     *
     * @return string
     */
    public function getLogoutUrl()
    {
        return $this->logoutURL;
    }

    /**
     * @deprecated use setLogoutURL()
     *
     * @return CreateMeetingParameters
     */
    public function setLogoutUrl(string $logoutUrl)
    {
        $this->logoutURL = $logoutUrl;

        return $this;
    }

    /**
     * @deprecated use isRecord()
     *
     * @return bool
     */
    public function isRecorded()
    {
        return $this->record;
    }

    /**
     * @return CreateMeetingParameters
     */
    public function setEndCallbackUrl(string $endCallbackUrl)
    {
        $this->addMeta('endCallbackUrl', $endCallbackUrl);

        return $this;
    }

    /**
     * @return CreateMeetingParameters
     */
    public function setRecordingReadyCallbackUrl(string $recordingReadyCallbackUrl)
    {
        $this->addMeta('bbb-recording-ready-url', $recordingReadyCallbackUrl);

        return $this;
    }

    /**
     * @return bool
     */
    public function isBreakout()
    {
        return $this->isBreakout;
    }

    public function isUserCameraCapDisabled(): bool
    {
        return $this->userCameraCap === 0;
    }

    /**
     * @return CreateMeetingParameters
     */
    public function disableUserCameraCap(): self
    {
        $this->userCameraCap = 0;

        return $this;
    }

    /**
     * @return CreateMeetingParameters
     */
    public function setBreakout(bool $isBreakout)
    {
        $this->isBreakout = $isBreakout;

        return $this;
    }

    /**
     * @deprecated use getParentMeetingID()
     *
     * @return string
     */
    public function getParentMeetingId()
    {
        return $this->parentMeetingID;
    }

    /**
     * @deprecated use setParentMeetingID()
     *
     * @return CreateMeetingParameters
     */
    public function setParentMeetingId(string $parentMeetingID)
    {
        $this->parentMeetingID = $parentMeetingID;

        return $this;
    }

    /**
     * @return bool
     */
    public function isGuestPolicyAlwaysDeny()
    {
        return $this->guestPolicy === GuestPolicy::ALWAYS_DENY;
    }

    /**
     * @return CreateMeetingParameters
     */
    public function setGuestPolicyAlwaysDeny()
    {
        $this->guestPolicy = GuestPolicy::ALWAYS_DENY;

        return $this;
    }

    /**
     * @return bool
     */
    public function isGuestPolicyAskModerator()
    {
        return $this->guestPolicy === GuestPolicy::ASK_MODERATOR;
    }

    /**
     * Ask moderator on join of non-moderators if user/guest is allowed to enter the meeting.
     *
     * @return CreateMeetingParameters
     */
    public function setGuestPolicyAskModerator()
    {
        $this->guestPolicy = GuestPolicy::ASK_MODERATOR;

        return $this;
    }

    /**
     * @return bool
     */
    public function isGuestPolicyAlwaysAcceptAuth()
    {
        return $this->guestPolicy === GuestPolicy::ALWAYS_ACCEPT_AUTH;
    }

    /**
     * Ask moderator on join of guests is allowed to enter the meeting, user are allowed to join directly.
     *
     * @return CreateMeetingParameters
     */
    public function setGuestPolicyAlwaysAcceptAuth()
    {
        $this->guestPolicy = GuestPolicy::ALWAYS_ACCEPT_AUTH;

        return $this;
    }

    /**
     * @return bool
     */
    public function isGuestPolicyAlwaysAccept()
    {
        return $this->guestPolicy === self::ALWAYS_ACCEPT;
    }

    /**
     * @return CreateMeetingParameters
     */
    public function setGuestPolicyAlwaysAccept()
    {
        $this->guestPolicy = self::ALWAYS_ACCEPT;

        return $this;
    }

    /**
     * @return CreateMeetingParameters
     */
    public function addPresentation(string $nameOrUrl, ?string $content = null, ?string $filename = null)
    {
        if (!$filename) {
            $this->presentations[$nameOrUrl] = !$content ?: base64_encode($content);
        } else {
            $this->presentations[$nameOrUrl] = $filename;
        }

        return $this;
    }

    public function getPresentations(): array
    {
        return $this->presentations;
    }

    /**
     * @return mixed
     */
    public function getPresentationsAsXML()
    {
        $result = '';

        if (!empty($this->presentations)) {
            $xml = new \SimpleXMLElement('<?xml version="1.0" encoding="UTF-8"?><modules/>');
            $module = $xml->addChild('module');
            $module->addAttribute('name', 'presentation');

            foreach ($this->presentations as $nameOrUrl => $content) {
                if (strpos($nameOrUrl, 'http') === 0) {
                    $presentation = $module->addChild('document');
                    $presentation->addAttribute('url', $nameOrUrl);
                    if (\is_string($content)) {
                        $presentation->addAttribute('filename', $content);
                    }
                } else {
                    $document = $module->addChild('document');
                    $document->addAttribute('name', $nameOrUrl);
                    $document[0] = $content;
                }
            }
            $result = $xml->asXML();
        }

        return $result;
    }

    /**
     * @return string
     */
    public function getHTTPQuery()
    {
        $queries = $this->getHTTPQueryArray();

        if ($this->isBreakout()) {
            if ($this->parentMeetingID === null || $this->sequence === null) {
                trigger_error('Breakout rooms require a parentMeetingID and sequence number.', \E_USER_WARNING);
            }
        } else {
            $queries = $this->filterBreakoutRelatedQueries($queries);
        }

        return http_build_query($queries, '', '&', \PHP_QUERY_RFC3986);
    }

    private function filterBreakoutRelatedQueries(array $queries)
    {
        return array_filter($queries, function ($query) {
            return !\in_array($query, ['isBreakout', 'parentMeetingID', 'sequence', 'freeJoin']);
        });
    }
}
