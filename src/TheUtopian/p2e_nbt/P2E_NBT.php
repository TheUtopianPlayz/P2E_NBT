<?php
declare(strict_types=1);

namespace TheUtopian\p2e_nbt;

use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Player;
use pocketmine\plugin\PluginBase;

class P2E_NBT extends PluginBase
{
    public function onCommand(CommandSender $sender, Command $command, string $label, array $args): bool
    {
        switch ($command->getName()) {
            case "nbt":
                if (!$sender instanceof Player) {
                    $sender->sendMessage("§cThis command can be used only in game!");
                    return true;
                }
                $nbt = $sender->getInventory()->getItemInHand()->getNamedTag()->toString();
                $this->getServer()->broadcastMessage("§l§c$nbt");
        }
        return true;
    }

}