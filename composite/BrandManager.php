<?php

require_once(__DIR__ . '/composites/Item.php');
require_once(__DIR__ . '/composites/Sector.php');
require_once(__DIR__ . '/models/Restaurant.php');
require_once(__DIR__ . '/../ApplicationInterface.php');

class BrandManager implements ApplicationInterface
{
    public function execute(): void
    {
        $brand = $this->getSector();

        $brand->add($this->craftJapanSector());
        $brand->add($this->craftFranceSector());

        $brand->getLocation();
    }

    protected function getSector()
    {
        return new Sector();
    }

    protected function craftFranceSector()
    {
        $france = $this->getSector();
        $gustoff = new Restaurant('Gustoff', 'The France\'s main street', 'France');

        $france->add(new Item($gustoff));
        return $france;
    }

    protected function craftJapanSector()
    {
        $japan = $this->getSector();
        $yukihira = new Restaurant('Yukihira diner place', 'Japan main street', 'Japan');
        $ramenStore = new Restaurant('Ramen store', 'Japan ramen street', 'Japan');

        $japan->add(new Item($yukihira));
        $japan->add(new Item($ramenStore));

        return $japan;
    }
}
