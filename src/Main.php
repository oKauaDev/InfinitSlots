<?php

declare(strict_types=1);

namespace LadinoXx\InfinitSlots;

use pocketmine\plugin\PluginBase;
use LadinoXx\InfinitSlots\EventsListener;

class Main extends PluginBase{

    public function onEnable() : void
    {
        if ($this->getServer()->getMaxPlayers() <= 20) {
            $this->getLogger()->warning("Os 'slots infinitos' são apenas visuais, você precisa colocar uma quantidade grande de slots para não lotar.");
        }
        $this->getServer()->getPluginManager()->registerEvents(new EventsListener($this), $this);
        $query = $this->getServer()->getQueryInformation();
        $query->setMaxPlayerCount(1);
        $this->getLogger()->info("InfinitSlots ligado, feito por LADINO#0001");
    }
}
