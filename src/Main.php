<?php

declare(strict_types=1);

namespace LadinoXx\InfinitSlots;

use pocketmine\plugin\PluginBase;
use LadinoXx\InfinitSlots\EventsListener;

class Main extends PluginBase{

    public function onEnable() : void
    {
        $this->getServer()->getPluginManager()->registerEvents(new EventsListener($this), $this);
        $query = $this->getServer()->getQueryInformation();
        $query->setMaxPlayerCount(1);
    }
}
