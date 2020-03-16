<?php

      class Logic {
          
        private $presenter;
        function __construct(Presenter $presenter) {
               $this->presenter = $presenter;
        }
        function putHome() {
              $this->presenter->putHome();
        }

        function printCalendars() {
            global $client;
            $this->presenter->putCalendarTitle();
            foreach (getCalendarList($client)['items'] as $calendar) {
                $this->presenter->putCalendarListElement($calendar);
            }
        }
        
        function printCalendarContents() {
           
            // global $client;
            $this->presenter->putCalendarListTitle();  
            foreach ($this->retrieveEvents($_GET['showThisCalendar']) as $event) { 
                $this->presenter->putEventListElement($event);
            }
        }
        
        
        
        function printEventDetails() {
            // global $client;
            foreach ($this->retrieveEvents($_GET['calendarId']) as $event)
                if ($this->isCurrentEvent($event)) {
                    $this->presenter->putEvents($event);
                }
        }
        
        private function isCurrentEvent($event) {
            return $event['id'] == $_GET['showThisEvent'];
        }
        
        private function retrieveEvents($calendarId) {
            global $client;
            return getEventList($client, htmlspecialchars($calendarId))['items'];
        }

      }