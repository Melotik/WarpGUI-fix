<?php

declare(strict_types=1);

namespace ClickedTran\event;

use pocketmine\player\Player;
use ClickedTran\event\WarpEvent;
use ClickedTran\WarpGUI;

class TeleportWarpEvent extends WarpEvent {
    
    /** @var WarpGUI $plugin */
	public WarpGUI $plugin;

    /** @var Player $player */
	public Player $player;

    public $warp;

	public function __construct(WarpGUI $plugin, Player $player, string $warp){
		$this->plugin = $plugin;
		$this->player = $player;
		$this->warp = $warp;
	}

	public function getPlayer() : Player {
		return $this->player;
	}

	public function getWarp() : string {
		return $this->warp;
	}
}