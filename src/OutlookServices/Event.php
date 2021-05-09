<?php

/**
 * Modified: 2020-05-29T07:19:37+00:00
 */
namespace Office365\OutlookServices;


use Office365\Entity;
use Office365\Common\DateTimeTimeZone;
use Office365\Common\Location;
use Office365\Common\PatternedRecurrence;
use Office365\Runtime\ClientValueCollection;
use Office365\Runtime\ResourcePath;
/**
 *  "An event in a calendar."
 */
class Event extends Entity
{
    /**
     * The start time zone that was set when the event was created. A value of `tzone://Microsoft/Custom` indicates that a legacy custom time zone was set in desktop Outlook. 
     * @return string
     */
    public function getOriginalStartTimeZone()
    {
        if (!$this->isPropertyAvailable("OriginalStartTimeZone")) {
            return null;
        }
        return $this->getProperty("OriginalStartTimeZone");
    }
    /**
     * The start time zone that was set when the event was created. A value of `tzone://Microsoft/Custom` indicates that a legacy custom time zone was set in desktop Outlook. 
     * @var string
     */
    public function setOriginalStartTimeZone($value)
    {
        $this->setProperty("OriginalStartTimeZone", $value, true);
    }
    /**
     * The end time zone that was set when the event was created. A value of `tzone://Microsoft/Custom` indicates that a legacy custom time zone was set in desktop Outlook.
     * @return string
     */
    public function getOriginalEndTimeZone()
    {
        if (!$this->isPropertyAvailable("OriginalEndTimeZone")) {
            return null;
        }
        return $this->getProperty("OriginalEndTimeZone");
    }
    /**
     * The end time zone that was set when the event was created. A value of `tzone://Microsoft/Custom` indicates that a legacy custom time zone was set in desktop Outlook.
     * @var string
     */
    public function setOriginalEndTimeZone($value)
    {
        $this->setProperty("OriginalEndTimeZone", $value, true);
    }
    /**
     * A unique identifier that is shared by all instances of an event across different calendars. Read-only.
     * @return string
     */
    public function getICalUId()
    {
        if (!$this->isPropertyAvailable("ICalUId")) {
            return null;
        }
        return $this->getProperty("ICalUId");
    }
    /**
     * A unique identifier that is shared by all instances of an event across different calendars. Read-only.
     * @var string
     */
    public function setICalUId($value)
    {
        $this->setProperty("ICalUId", $value, true);
    }
    /**
     * The number of minutes before the event start time that the reminder alert occurs.
     * @return integer
     */
    public function getReminderMinutesBeforeStart()
    {
        if (!$this->isPropertyAvailable("ReminderMinutesBeforeStart")) {
            return null;
        }
        return $this->getProperty("ReminderMinutesBeforeStart");
    }
    /**
     * The number of minutes before the event start time that the reminder alert occurs.
     * @var integer
     */
    public function setReminderMinutesBeforeStart($value)
    {
        $this->setProperty("ReminderMinutesBeforeStart", $value, true);
    }
    /**
     * Set to true if an alert is set to remind the user of the event.
     * @return bool
     */
    public function getIsReminderOn()
    {
        if (!$this->isPropertyAvailable("IsReminderOn")) {
            return null;
        }
        return $this->getProperty("IsReminderOn");
    }
    /**
     * Set to true if an alert is set to remind the user of the event.
     * @var bool
     */
    public function setIsReminderOn($value)
    {
        $this->setProperty("IsReminderOn", $value, true);
    }
    /**
     * Set to true if the event has attachments.
     * @return bool
     */
    public function getHasAttachments()
    {
        if (!$this->isPropertyAvailable("HasAttachments")) {
            return null;
        }
        return $this->getProperty("HasAttachments");
    }
    /**
     * Set to true if the event has attachments.
     * @var bool
     */
    public function setHasAttachments($value)
    {
        $this->setProperty("HasAttachments", $value, true);
    }
    /**
     * The text of the event's subject line.
     * @return string
     */
    public function getSubject()
    {
        if (!$this->isPropertyAvailable("Subject")) {
            return null;
        }
        return $this->getProperty("Subject");
    }
    /**
     * The text of the event's subject line.
     * @var string
     */
    public function setSubject($value)
    {
        $this->setProperty("Subject", $value, true);
    }
    /**
     * The preview of the message associated with the event. It is in text format.
     * @return string
     */
    public function getBodyPreview()
    {
        if (!$this->isPropertyAvailable("BodyPreview")) {
            return null;
        }
        return $this->getProperty("BodyPreview");
    }
    /**
     * The preview of the message associated with the event. It is in text format.
     * @var string
     */
    public function setBodyPreview($value)
    {
        $this->setProperty("BodyPreview", $value, true);
    }
    /**
     * Set to true if the event lasts all day.
     * @return bool
     */
    public function getIsAllDay()
    {
        if (!$this->isPropertyAvailable("IsAllDay")) {
            return null;
        }
        return $this->getProperty("IsAllDay");
    }
    /**
     * Set to true if the event lasts all day.
     * @var bool
     */
    public function setIsAllDay($value)
    {
        $this->setProperty("IsAllDay", $value, true);
    }
    /**
     * Set to true if the event has been canceled.
     * @return bool
     */
    public function getIsCancelled()
    {
        if (!$this->isPropertyAvailable("IsCancelled")) {
            return null;
        }
        return $this->getProperty("IsCancelled");
    }
    /**
     * Set to true if the event has been canceled.
     * @var bool
     */
    public function setIsCancelled($value)
    {
        $this->setProperty("IsCancelled", $value, true);
    }
    /**
     * Set to true if the calendar owner (specified by the **owner** property of the [calendar](calendar.md)) is the organizer of the event (specified by the **organizer** property of the **event**). This also applies if a delegate organized the event on behalf of the owner.
     * @return bool
     */
    public function getIsOrganizer()
    {
        if (!$this->isPropertyAvailable("IsOrganizer")) {
            return null;
        }
        return $this->getProperty("IsOrganizer");
    }
    /**
     * Set to true if the calendar owner (specified by the **owner** property of the [calendar](calendar.md)) is the organizer of the event (specified by the **organizer** property of the **event**). This also applies if a delegate organized the event on behalf of the owner.
     * @var bool
     */
    public function setIsOrganizer($value)
    {
        $this->setProperty("IsOrganizer", $value, true);
    }
    /**
     * Set to true if the sender would like a response when the event is accepted or declined.
     * @return bool
     */
    public function getResponseRequested()
    {
        if (!$this->isPropertyAvailable("ResponseRequested")) {
            return null;
        }
        return $this->getProperty("ResponseRequested");
    }
    /**
     * Set to true if the sender would like a response when the event is accepted or declined.
     * @var bool
     */
    public function setResponseRequested($value)
    {
        $this->setProperty("ResponseRequested", $value, true);
    }
    /**
     * The ID for the recurring series master item, if this event is part of a recurring series.
     * @return string
     */
    public function getSeriesMasterId()
    {
        if (!$this->isPropertyAvailable("SeriesMasterId")) {
            return null;
        }
        return $this->getProperty("SeriesMasterId");
    }
    /**
     * The ID for the recurring series master item, if this event is part of a recurring series.
     * @var string
     */
    public function setSeriesMasterId($value)
    {
        $this->setProperty("SeriesMasterId", $value, true);
    }
    /**
     * The organizer of the event.
     * @return Recipient
     */
    public function getOrganizer()
    {
        if (!$this->isPropertyAvailable("Organizer")) {
            return null;
        }
        return $this->getProperty("Organizer");
    }
    /**
     * The organizer of the event.
     * @var Recipient
     */
    public function setOrganizer($value)
    {
        $this->setProperty("Organizer", $value, true);
    }
    /**
     * The URL to open the event in Outlook on the web.<br/><br/>Outlook on the web opens the event in the browser if you are signed in to your mailbox. Otherwise, Outlook on the web prompts you to sign in.<br/><br/>This URL can be accessed from within an iFrame.
     * @return string
     */
    public function getWebLink()
    {
        if (!$this->isPropertyAvailable("WebLink")) {
            return null;
        }
        return $this->getProperty("WebLink");
    }
    /**
     * The URL to open the event in Outlook on the web.<br/><br/>Outlook on the web opens the event in the browser if you are signed in to your mailbox. Otherwise, Outlook on the web prompts you to sign in.<br/><br/>This URL can be accessed from within an iFrame.
     * @var string
     */
    public function setWebLink($value)
    {
        $this->setProperty("WebLink", $value, true);
    }
    /**
     * A URL for an online meeting. The property is set only when an organizer specifies an event as an online meeting such as a Skype meeting. Read-only.
     * @return string
     */
    public function getOnlineMeetingUrl()
    {
        if (!$this->isPropertyAvailable("OnlineMeetingUrl")) {
            return null;
        }
        return $this->getProperty("OnlineMeetingUrl");
    }
    /**
     * A URL for an online meeting. The property is set only when an organizer specifies an event as an online meeting such as a Skype meeting. Read-only.
     * @var string
     */
    public function setOnlineMeetingUrl($value)
    {
        $this->setProperty("OnlineMeetingUrl", $value, true);
    }
    /**
     * The date, time, and time zone that the event starts. By default, the start time is in UTC.
     * @return DateTimeTimeZone
     */
    public function getStart()
    {
        if (!$this->isPropertyAvailable("Start")) {
            return null;
        }
        return $this->getProperty("Start");
    }
    /**
     * The date, time, and time zone that the event starts. By default, the start time is in UTC.
     * @var DateTimeTimeZone
     */
    public function setStart($value)
    {
        $this->setProperty("Start", $value, true);
    }
    /**
     * The date, time, and time zone that the event ends. By default, the end time is in UTC.
     * @return DateTimeTimeZone
     */
    public function getEnd()
    {
        if (!$this->isPropertyAvailable("End")) {
            return null;
        }
        return $this->getProperty("End");
    }
    /**
     * The date, time, and time zone that the event ends. By default, the end time is in UTC.
     * @var DateTimeTimeZone
     */
    public function setEnd($value)
    {
        $this->setProperty("End", $value, true);
    }
    /**
     * The calendar that contains the event. Navigation property. Read-only.
     * @return Calendar
     */
    public function getCalendar()
    {
        if (!$this->isPropertyAvailable("Calendar")) {
            $this->setProperty("Calendar", new Calendar($this->getContext(), new ResourcePath("Calendar", $this->getResourcePath())));
        }
        return $this->getProperty("Calendar");
    }
    /**
     * Indicates the type of response sent in response to an event message.
     * @return ResponseStatus
     */
    public function getResponseStatus()
    {
        if (!$this->isPropertyAvailable("ResponseStatus")) {
            return null;
        }
        return $this->getProperty("ResponseStatus");
    }
    /**
     * Indicates the type of response sent in response to an event message.
     * @var ResponseStatus
     */
    public function setResponseStatus($value)
    {
        $this->setProperty("ResponseStatus", $value, true);
    }
    /**
     * The body of the message associated with the event. It can be in HTML or text format.
     * @return ItemBody
     */
    public function getBody()
    {
        if (!$this->isPropertyAvailable("Body")) {
            return null;
        }
        return $this->getProperty("Body");
    }
    /**
     * The body of the message associated with the event. It can be in HTML or text format.
     * @var ItemBody
     */
    public function setBody($value)
    {
        $this->setProperty("Body", $value, true);
    }
    /**
     * The location of the event.
     * @return Location
     */
    public function getLocation()
    {
        if (!$this->isPropertyAvailable("Location")) {
            return null;
        }
        return $this->getProperty("Location");
    }

    /**
     * The location of the event.
     *
     * @return self
     * @var Location
     */
    public function setLocation($value)
    {
        $this->setProperty("Location", $value);
        return $this;
    }
    /**
     * The recurrence pattern for the event.
     * @return PatternedRecurrence
     */
    public function getRecurrence()
    {
        if (!$this->isPropertyAvailable("Recurrence")) {
            return null;
        }
        return $this->getProperty("Recurrence");
    }
    /**
     * The recurrence pattern for the event.
     * @var PatternedRecurrence
     */
    public function setRecurrence($value)
    {
        $this->setProperty("Recurrence", $value, true);
    }
    /**
     *  `True` if this event has online meeting information, `false` otherwise. Default is false. Optional.
     * @return bool
     */
    public function getIsOnlineMeeting()
    {
        if (!$this->isPropertyAvailable("IsOnlineMeeting")) {
            return null;
        }
        return $this->getProperty("IsOnlineMeeting");
    }
    /**
     *  `True` if this event has online meeting information, `false` otherwise. Default is false. Optional.
     * @var bool
     */
    public function setIsOnlineMeeting($value)
    {
        $this->setProperty("IsOnlineMeeting", $value, true);
    }
    /**
     * @return bool
     */
    public function getAllowNewTimeProposals()
    {
        if (!$this->isPropertyAvailable("AllowNewTimeProposals")) {
            return null;
        }
        return $this->getProperty("AllowNewTimeProposals");
    }
    /**
     * @var bool
     */
    public function setAllowNewTimeProposals($value)
    {
        $this->setProperty("AllowNewTimeProposals", $value, true);
    }


    /**
     * @return ClientValueCollection
     */
    public function getAttendees(){
        return $this->getProperty("Attendees",new ClientValueCollection(Attendee::class));
    }
}