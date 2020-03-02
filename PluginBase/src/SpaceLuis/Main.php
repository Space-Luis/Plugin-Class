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
//메인파일 위치의 이전 폴더명

use pocketmine\plugin\PluginBase;

class Main extends PluginBase{ 
//해당파일의 이름을 써야합니다.

    public function onEnable(){
        $this->getLogger()->notice("플러그인 적용");
    } 
    //플러그인이 작동될때 작동하는 함수 [ 필수 ]
}