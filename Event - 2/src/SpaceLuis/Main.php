<?php

/*
 #         _____                           
 #        /  ___|                          
 #        \ `--.  _ __    __ _   ___   ___ 
 #         `--. \| '_ \  / _` | / __| / _ \
 #        /\__/ /| |_) || (_| || (__ |  __/
 #        \____/ | .__/  \__,_| \___| \___|
 #               | |                       
 #               |_|                       
 #       _             _      
 #      | |           (_)     
 #      | |     _   _  _  ___ 
 #      | |    | | | || |/ __|
 #      | |____| |_| || |\__ \
 #      \_____/ \__,_||_||___/
 #
 # @author : SpaceLuis
 # @github : https://github.com/Space-Luis
 # @E-Mail : SpaceLuis769@gmail.com
 # @KakaoTalk : @SpaceLuis
 # @Band : Unknown.....(Sorry)
*/

namespace SpaceLuis; 

use pocketmine\plugin\PluginBase;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerItemHeldEvent;

class Main extends PluginBase implements Listener{ 

    public function onEnable(){
        $this->getLogger()->notice("Event - 2");
    }
    
    public function onHeld(PlayerItemHeldEvent $event){
        $player = $event->getPlayer();
        $item = $event->getItem();
        $player->sendTip($item->getName() . "을 들었습니다!");
        
        return true;
    }
}