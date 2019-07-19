<?php

namespace App\Twitter;

use Illuminate\Database\Eloquent\Model;

class Twitter extends Model implements Social
{
    
    protected $apiKey;
    public $additional;

    public function __construct($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    public function getApiKey()
    {
        return $this->apiKey;
    }
}
