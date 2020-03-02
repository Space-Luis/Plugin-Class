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

use pocketmine\utils\Config;

class Main extends PluginBase implements Listener{ 

    public function onEnable(){
        $this->getLogger()->notice("Config - 1");
        $this->getServer()->getPluginManager()->registerEvents($this,$this);
        
        $this->data = new Config($this->getDataFolder() . "Config.yml", Config::YAML, [
            "message" => "콘피그 예시"
        ]);
        $this->db = $this->data->getAll();
    }
    
    public function onCommand (CommandSender $sender, Command $command, string $label, array $args): bool{
		if ($command->getName() === '테스트'){
			$sender->sendMessage($this->db["message"]);
    	}
     	return true;
    }
    
}