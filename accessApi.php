<?php
    function createClient() {
        $client = new Google_Client();
        $client->setApplicationName("tuan20173440");
        $client->setDeveloperKey('AIzaSyAbzmopjx2l3ibN3uT1qm9DkDqvndsmgks');
        $client->setClientId('3753101087-v3r2dsskps99c3suip1biiduramqi6vr.apps.googleusercontent.com');
        $client->setClientSecret('rb_93Yr53bchujVdStHq-I43');
        $client->setRedirectUri('http://localhost/gg_calendar/google_calendar_procedural');
        return $client;
    }
    

?>