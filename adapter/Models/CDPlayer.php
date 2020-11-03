<?php

require_once(__DIR__ . '/CD.php');
require_once(__DIR__ . '/DVD.php');

class CDPlayer
{
    public function execute()
    {
        $cd = $this->getCd();
        $dvd = $this->getDvd();
    }

    private function getCd()
    {
        return new CD(
            "Never shout never",
            "30:35",
            [
                "Happy",
                "Your biggest fan",
                "I love you five",
                "Black cat",
                "I love you more than you will never know"
            ]
        );
    }

    private function getDvd()
    {
        $tracks = new SplFixedArray(5);

        $tracks[0] = 'Nier Song 1';
        $tracks[1] = 'Nier Song 2';
        $tracks[2] = 'Nier Song 3';
        $tracks[3] = 'Nier Song 4';
        $tracks[4] = 'Nier Song 5';

        return new DVD(
            "Nier automata OST",
            "40:35",
            $tracks
        );
    }
}