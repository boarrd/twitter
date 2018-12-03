<?php

namespace Boarrd;

use Boarrd\Framework\Tiles\AbstractTile;
use Facades\Boarrd\Twitter\Helpers\TweetHistory;

class Twitter extends AbstractTile
{
    public function __construct(string $position)
    {
        parent::__construct($position);

        $this->requireAttributes('initial-tweets');
    }

    protected function getInitialTweetsAttribute()
    {
        return e(json_encode(TweetHistory::getTweets()));
    }

    public function getElement()
    {
        return parent::getElement()->setVueAttribute('initial-tweets');
    }
}
