<?php

namespace LadinoXx\InfinitSlots;

use pocketmine\event\Listener;
use LadinoXx\InfinitSlots\Main;
use pocketmine\event\player\PlayerLoginEvent;
use pocketmine\event\server\QueryRegenerateEvent;

class EventsListener implements Listener {

    public $plugin;

    public function __construct(Main $plugin)
    {
        $this->plugin = $plugin;
    }

    public function getPlugin() : Main
    {
        return $this->plugin;
    }

    public function onLogin(PlayerLoginEvent $ev) : void
    {
        $query = $this->getPlugin()->getServer()->getQueryInformation();
        $query->setMaxPlayerCount(count($this->getPlugin()->getServer()->getOnlinePlayers()) + 1);
    }

    public function onQuery(QueryRegenerateEvent $ev) : void
    {
        $ev->getQueryInfo()->setMaxPlayerCount(count($this->getPlugin()->getServer()->getOnlinePlayers()) + 1);
    }
}