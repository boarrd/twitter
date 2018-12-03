<?php

namespace Boarrd\Twitter\Events;

use Boarrd\Framework\Events\DashboardEvent;

class Mentioned extends DashboardEvent
{
    /** @var array */
    public $tweetProperties;

    public function __construct(array $tweetProperties)
    {
        $this->tweetProperties = $tweetProperties;
    }
}
