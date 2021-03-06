<?php 

// PDO CONNECTION 
$sql_host = 'localhost';
$sql_dbname = 'fftopplayers';
$sql_user = 'root';
$sql_pass = '';

$db_options = array(
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
);

$db = new PDO('mysql:host='. $sql_host .';dbname='. $sql_dbname, $sql_user, $sql_pass, $db_options);

// ALLOWED SERVER'S NAMES 
$worlds = array('Mondial', 'Louisoix', 'Adamantoise', 'Aegis', 'Alexander', 'Anima', 'Asura', 'Atomos', 'Bahamut', 'Balmung', 'Behemoth', 'Belias', 'Brynhildr', 'Cactuar', 'Carbuncle', 'Cerberus', 'Chocobo', 'Coeurl', 'Diabolos', 'Durandal', 'Excalibur', 'Exodus', 'Faerie', 'Famfrit', 'Fenrir', 'Garuda', 'Gilgamesh', 'Goblin', 'Gungnir', 'Hades', 'Hyperion', 'Ifrit', 'Ixion', 'Jenova', 'Kujata', 'Lamia', 'Leviathan', 'Lich', 'Malboro', 'Mandragora', 'Masamune', 'Mateus', 'Midgardsormr', 'Moogle', 'Odin', 'Omega', 'Pandaemonium', 'Phoenix', 'Ragnarok', 'Ramuh', 'Ridill', 'Sargatanas', 'Shinryu', 'Shiva', 'Siren', 'Tiamat', 'Titan', 'Tonberry', 'Typhon', 'Ultima', 'Ultros', 'Unicorn', 'Valefor', 'Yojimbo', 'Zalera', 'Zeromus', 'Zodiar');

// PULL FREQUENCY 
$rankingHoursDelay = (60*60*24); // 24 hours (maximum pull frequency)
$guildHoursDelay = (60*60*2); // 2 hours (maximum pull frequency)
