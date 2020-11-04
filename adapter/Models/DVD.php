<?php

require_once(__DIR__ . '/../../utils/Output.php');

class DVD
{
    private $label;
    private $length;
    private $tracks;

    public function __construct(string $label, string $length, SplFixedArray $tracks)
    {
        $this->label = $label;
        $this->length = $length;
        $this->tracks = $tracks;
    }

    public function getLabel()
    {
        return $this->label;
    }

    public function getLength()
    {
        return $this->length;
    }
    
    public function getTracks()
    {
        return $this->tracks;
    }

    public function reproduce(int $number)
    {
        for (
            $this->tracks->rewind(), $count = 1;
            $this->tracks->valid() && $count < $number;
            $this->tracks->next(), $count++
        );

        renderln("Current song playing {$this->tracks->current()}");
    }

    public function __toString()
    {
        $tracks = $this->tracks->toArray();

        return array_reduce($tracks, function ($text, $track) {
            return "$text $track</br>";
        }, '');
    }
}