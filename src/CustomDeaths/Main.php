<?php

namespace CustomDeaths;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;

class Main extends PluginBase implements Listener{

    public function onEnable(){
        $this->saveDefaultConfig();
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
    }

    /**
     * @param PlayerDeathEvent $event
     */
    public function onPlayerDeath(PlayerDeathEvent $event){
        $player = $event->getPlayer();
        $cause = $player->getLastDamageCause();
        $message = $this->getConfig()->get("death-messages")["default"];
        
        if ($cause instanceof EntityDamageEvent){
            switch($cause->getCause()){
                case EntityDamageEvent::CAUSE_ENTITY_ATTACK:
                    if ($cause instanceof EntityDamageByEntityEvent){
                        $killer = $cause->getDamager()->getName();
                        $message = str_replace(["{player}", "{killer}"], [$player->getName(), $killer], $this->getConfig()->get("death-messages")["entity-attack"]);
                    }
                    break;
                case EntityDamageEvent::CAUSE_FALL:
                    $message = str_replace("{player}", $player->getName(), $this->getConfig()->get("death-messages")["fall"]);
                    break;
                case EntityDamageEvent::CAUSE_DROWNING:
                    $message = str_replace("{player}", $player->getName(), $this->getConfig()->get("death-messages")["drowning"]);
                    break;
                case EntityDamageEvent::CAUSE_SUICIDE:
                    $message = str_replace("{player}", $player->getName(), $this->getConfig()->get("death-messages")["kill-command"]);
                    break;
            }
        }

        $event->setDeathMessage($message);
    }
}
