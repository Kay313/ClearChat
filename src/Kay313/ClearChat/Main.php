<?php

namespace Kay313\ClearChat;

use pocketmine\command\Command;
use pocketmine\event\Listener;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\command\CommandSender;
use pocketmine\command\ConsoleCommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase{

	public function onEnable() : void{
		$this->getLogger()->info("ClearChat enabled!");
	}
	public function onDisable() : void{
		$this->getLogger()->info("ClearChat disabled!");
	}

        public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch (strtolower($command->getName())) {
            case "cc":
                if ($sender instanceof Player) {
                    if (!isset($args[0])) {
                        if (!$sender->hasPermission("cc.use")) {
                            return true;
                        } else {
	$this->getServer()->broadcastMessage("§l§cDer Chat wird nun gecleart");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§r");
	$this->getServer()->broadcastMessage("§l§cDer Chat wurde gecleart");
       }
      }
     return true;
    }
   }
  return false;
 }
}
