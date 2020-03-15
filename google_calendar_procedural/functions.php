<?php

function doUserAction($client) {
	putMenu();
	if (!isset($_GET['action'])) return;
		
		$_GET['action']();

}






function printCalendars() {
	global $client;
	putCalendarTitle();
	foreach (getCalendarList($client)['items'] as $calendar) {
		putCalendarListElement($calendar);
	}
}

function printCalendarContents() {
	
	
	putCalendarListTitle();
	foreach (retrieveEvents($_GET['showThisCalendar']) as $event) {
		putEventListElement($event);
	}
}



function printEventDetails() {
	global $client;
	foreach (retrieveEvents($_GET['calendarId']) as $event)
		if (isCurrentEvent($event)) {
			putEvents($event);
		}
}

function isCurrentEvent($event) {
    return $event['id'] == $_GET['showThisEvent'];
}

function retrieveEvents($calendarId) {
	global $client;
	return getEventList($client, htmlspecialchars($calendarId))['items'];
}