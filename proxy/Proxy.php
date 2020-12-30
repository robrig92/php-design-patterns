<?php

require_once(__DIR__ . '/Downloader.php');
require_once(__DIR__ . '/../utils/Output.php');

class Proxy implements Downloader
{
    protected $cache;
    protected $downloader;

    public function __construct(Downloader $downloader)
    {
        $this->cache = [];
        $this->downloader = $downloader;
    }

    public function download(string $url)
    {
        if (isset($this->cache[$url])) {
            renderln("From cache");
            return $this->cache[$url];
        }

        $content = $this->downloader->download($url);
        $this->cache[$url] = $content;

        return $this->cache[$url];
    }
}
