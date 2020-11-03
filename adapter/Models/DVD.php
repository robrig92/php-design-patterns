<?php

require_once(__DIR__ . '/../../utils/Output.php');

class DVD
{
    private $label;
    private $length;
    private $tracks;

    public function __constructor(string $label, float $length, SplFixedArray $tracks)
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
            $this->tracks->rewind(), $count = 0;
            $this->tracks->valid() && $count < $number;
            $this->tracks->next()
        );

        renderln("Current song playing {$this->tracks->current()}");
    }
}