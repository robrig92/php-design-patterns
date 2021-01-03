<?php

require_once(__DIR__ . '/Proxy.php');
require_once(__DIR__ . '/../utils/Output.php');
require_once(__DIR__ . '/SimpleDownloader.php');
require_once(__DIR__ . '/../ApplicationInterface.php');

class DownloadClient implements ApplicationInterface
{
    public function execute(): void
    {
        $urlA = 'https://refactoring.guru/images/content-public/logos/logo-covid-winter-2x.png';
        $urlB = 'https://refactoring.guru/images/patterns/banners/examples-ide-2x.png';
        $downloader = new Proxy(new SimpleDownloader());

        renderln($downloader->download($urlA));
        renderln($downloader->download($urlB));
        renderln($downloader->download($urlA));
    }
}
