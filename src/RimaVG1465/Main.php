<?php

namespace RimaVG1465;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\plugin\PluginBase;

class Main extends PluginBase {

    public function onEnable(): void {
        $this->getLogger()->info("MCSnpcInfo telah diaktifkan!");
    }

    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool {
        switch ($command->getName()) {
            case "info":
                $sender->sendMessage("Selamat datang di server!.");
                $sender->sendMessage("Versi server: " . $this->getServer()->getVersion());
                $sender->sendMessage("Pemain online: " . count($this->getServer()->getOnlinePlayers()));
                break;
        }
        return true;
    }
}
