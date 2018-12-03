<?php

namespace Boarrd\Twitter\Helpers;

use Spatie\Valuestore\Valuestore;
use Boarrd\Twitter\Events\Mentioned;

class TweetHistory
{
    /** @var \Spatie\Valuestore\Valuestore */
    protected $valuestore;

    public function __construct(string $path = null)
    {
        $this->valuestore = Valuestore::make($path ?? storage_path('app/tweetHistory.json'));
    }

    public function handle(Mentioned $event)
    {
        $this->addTweet($event->tweetProperties);
    }

    public function addTweet(array $tweetProperties)
    {
        $this->valuestore->put(
            'tweets',
            collect($this->valuestore->get('tweets', []))
                ->prepend($tweetProperties)
                ->unique('id')
                ->take(50)
        );
    }

    public function getTweets() : array
    {
        return $this->valuestore->get('tweets', []);
    }
}
