<?php

namespace Zebra\JoinMessage;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;
use pocketmine\event\player\PlayerQuitEvent;

class main extends PluginBase implements Listener
{
    public function onEnable()
    {
        $this->getLogger()->info("JoinMessage Plugin ist Aktiviert");
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }
    public function onJoin(PlayerJoinEvent $event)
    {
       $player = $event->getPlayer();
       $name = $player->getName();
    $event->setJoinMessage("\n\n§eHerzlich Willkommen§6 " . $name . "§e auf LightningMC\n\n");

    }
    public function onQuit(PlayerQuitEvent $event){
        $player = $event->getPlayer();
        $name = $player->getName();
        if ($player->isOP()){
            $event->setQuitMessage("\n\n§4server §6>§2> §r" . $name . "ist vom LightningMC gegangen!\n\n");
        } else {
        $event->setQuitMessage("\n\n§4server §6>§2> §r" . $name . "ist nun nicht mehr auf dem LightningMC Server\n\n"); 
        }
    }
}