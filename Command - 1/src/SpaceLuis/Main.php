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

use pocketmine\command\CommandSender;
use pocketmine\command\PluginCommand;
use pocketmine\command\Command;

class Main extends PluginBase implements Listener{ 

    public function onEnable(){
        $this->getLogger()->notice("Command - 1");
    }
    
    public function onCommand (CommandSender $sender, Command $command, string $label, array $args): bool{
		if ($command->getName() === '테스트'){
			$sender->sendMessage("플러그인 커맨드 테스트");
    	}
     	return true;
    }
    
}