<?php

require_once(__DIR__ . '/composites/Item.php');
require_once(__DIR__ . '/composites/Sector.php');
require_once(__DIR__ . '/models/Restaurant.php');
require_once(__DIR__ . '/../ApplicationInterface.php');

class BrandManager implements ApplicationInterface
{
    public function execute(): void
    {
        $brand = new Sector();
        $gustoff = new Restaurant('Gustoff', 'Francia la calle de París', 'paris');
        $yukihira = new Restaurant('Yukihira diner place', 'Japón main street', 'japon');
        $ramenStore = new Restaurant('Ramen store', 'Japón ramen street', 'japon');

        $japon = new Sector();
        $japon->add(new Item($yukihira));
        $japon->add(new Item($ramenStore));
        $brand->add($japon);

        $francia = new Sector();
        $francia->add(new Item($gustoff));
        $brand->add($francia);

        $brand->getLocation();
    }
}
