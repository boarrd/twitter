<?php

namespace Boarrd\Twitter\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Boarrd\Twitter\Events\Mentioned;
use Illuminate\Foundation\Inspiring;

class SendFakeTweet extends Command
{
    protected $signature = 'boarrd:send-fake-tweet {text?} {--Q|quote : Attach a quote to the tweet}';

    protected $description = 'Send a fake tweet';

    public function handle()
    {
        $this->info('Sending fake tweet...');

        $text = $this->argument('text') ?? Inspiring::quote();

        $quote = $this->option('quote')
            ? Inspiring::quote()
            : '';

        event(new Mentioned($this->getFakeTweetProperties($text, $quote)));

        $this->info('All done!');
    }

    protected function getFakeTweetProperties(string $text, string $quote) : array
    {
        $stubName = empty($quote)
            ? 'regularTweet'
            : 'tweetWithQuote';

        $tweetStub = file_get_contents(__DIR__."/../../../resources/stubs/tweets/{$stubName}.json");

        $tweetContent = $this->fillPlaceHolders($tweetStub, [
            '%text%' => $text,
            '%quote%' => $quote,
            '%currentTime%' => Carbon::now()->subHour()->format('D M d H:i:s +0000 Y'),
            '%textLength%' => strlen($text),
        ]);

        return json_decode($tweetContent, true);
    }

    protected function fillPlaceHolders(string $text, array $replacements) : string
    {
        return str_replace(
            array_keys($replacements),
            array_values($replacements),
            $text
        );
    }
}
