<?php

require_once(__DIR__ . '/Downloader.php');

class SimpleDownloader implements Downloader
{
    public function download(string $url)
    {
        $content = file_get_contents($url);

        return "File size " . strlen($content);
    }
}
