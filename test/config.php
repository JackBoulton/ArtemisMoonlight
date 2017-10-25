<?php
// Used for misc debug output
$debug = false;
// Database information
$db_server = "localhost";
$db_user = "fcRoster";
$db_pass = "yt3MTu^TVy5H";
$db_database = "fcRoster";
$db_port = ""; // can be left blank if default (3306)
// Default number of members per page
$perPage = 30;
// Fetch the id below from Lodestone : http://na.finalfantasyxiv.com/lodestone/freecompany/9232379236109517808/
$fc_id = "9234631035923243632";

$classes = [
    ["name" => "gladiator", "type" => "battle", "image" => "assets/PLD.png" ],
	["name" => "marauder", "type" => "battle", "image" => "assets/WAR.png" ],
    ["name" => "lancer", "type" => "battle", "image" => "assets/DRG.png" ],
	["name" => "pugilist", "type" => "battle", "image" => "assets/MNK.png" ],
	["name" => "archer", "type" => "battle", "image" => "assets/BRD.png" ],
    ["name" => "rogue", "type" => "battle", "image" => "assets/NIN.png" ],
	["name" => "conjurer", "type" => "battle", "image" => "assets/WHM.png" ],
    ["name" => "thaumaturge", "type" => "battle", "image" => "assets/BLM.png" ],
	["name" => "arcanist", "type" => "battle", "image" => "assets/ACN.png" ],
    ["name" => "dark knight", "type" => "battle", "image" => "assets/DRK.png" ],
	["name" => "machinist", "type" => "battle", "image" => "assets/MCH.png" ],
    ["name" => "astrologian", "type" => "battle", "image" => "assets/AST.png" ],
	["name" => "carpenter", "type" => "hand", "image" => "assets/carpenter.png" ],
    ["name" => "blacksmith", "type" => "hand", "image" => "assets/blacksmith.png" ],
	["name" => "armorer", "type" => "hand", "image" => "assets/armorer.png" ],
    ["name" => "goldsmith", "type" => "hand", "image" => "assets/goldsmith.png" ],
	["name" => "leatherworker", "type" => "hand", "image" => "assets/leatherworker.png" ],
	["name" => "weaver", "type" => "hand", "image" => "assets/weaver.png" ],
	["name" => "alchemist", "type" => "hand", "image" => "assets/alchemist.png" ],
	["name" => "culinarian", "type" => "hand", "image" => "assets/culinarian.png" ],
	["name" => "miner", "type" => "hand", "image" => "assets/miner.png" ],
	["name" => "botanist", "type" => "hand", "image" => "assets/botanist.png" ],
	["name" => "fisher", "type" => "hand", "image" => "assets/fisher.png" ],
];
?>