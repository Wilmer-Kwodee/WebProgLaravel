<?php

namespace App\Models;

/*
    DUMMY DATA PENTING!
                [
                'id' => 1,
                'title' => 'no wayyy i was told to wash my dishes with only 2 liter of water 😭',
                'body' => 're: bruh gud luck 👍😂, re2: bro is cooked ☠️'
            ],
            [
                'id' => 2,
                'title' => 'i just done the hardest water saving challenge 👍',
                'body' => 're: insane!!!, re2: NO WAYYYY, re3: bro did the impossible ☠️'
            ],
            [
                'id' => 3,
                'title' => 'dont drink a single drop of water since the morning 😎 (for the ocean ofc)',
                'body' => 're: bro saves the ocean by dismishing himself ☠️, re2: 😭😭😭'
            ]
 */

class Post
{
    public static function All()
    {
        return [
            [
                'id' => 1,
                'title' => 'no wayyy i was told to wash my dishes with only 2 liter of water 😭',
                'body' => 're: bruh gud luck 👍😂, re2: bro is cooked ☠️'
            ],
            [
                'id' => 2,
                'title' => 'i just done the hardest water saving challenge 👍',
                'body' => 're: insane!!!, re2: NO WAYYYY, re3: bro did the impossible ☠️'
            ],
            [
                'id' => 3,
                'title' => 'dont drink a single drop of water since the morning 😎 (for the ocean ofc)',
                'body' => 're: bro saves the ocean by dismishing himself ☠️, re2: 😭😭😭'
            ]
        ];
    }
}
