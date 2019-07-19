<?php

namespace App\Twitter;

interface Social {
    
    public function __construct($apiKey);
    public function getApiKey();

}