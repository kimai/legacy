<?php
/**
 * Quick and dirty Kimai installer script.
 *
 * Find the newest version at: https://github.com/kimai/scripts
 */

// THIS NEEDS TO BE CHANGED TO YOUR ENVIROMENT
define('KIMAI_DOMAIN', 'http://www.example.com');
define('KIMAI_TIMEZONE', 'Europe/Berlin');

// No need to configure anything below this point
if (!defined('KIMAI_DOMAIN') || empty(KIMAI_DOMAIN) || KIMAI_DOMAIN == 'http://www.example.com') {
	die('Please adjust your KIMAI_DOMAIN setting in: ' . __FILE__ . PHP_EOL);
}

// broken by design ... things must be cleared up ...
passthru('chmod -R 777 htdocs/temporary/');
passthru('chmod -R 777 htdocs/includes/');

// load configuration in the format Kimai uses it as well, see includes/autoconf.php in your running installation
include 'autoconf.php';

// ATTENTION, THIS IS IMPORTANT AND DANGEROUS:
// This nasty little command will drop ALL tables with prefix set in kimai config within the configured database
// make sure you don't have any other tables starting with this prefix
echo 'Resetting database' . PHP_EOL;
$sql = 'mysql --user='.$server_username.' --password='.$server_password.' --host='.$server_hostname.' --database='.$server_database.' --silent --skip-column-names -e "show tables" | grep -v '.$server_prefix.' | gawk \'{print "DROP TABLE " $1 ";"}\' | mysql --user='.$server_username.' --password='.$server_password.' --host='.$server_hostname.' --database='.$server_database;
passthru($sql);

echo 'Installing database' . PHP_EOL;
echo kimaiInstall(
	KIMAI_DOMAIN . '/installer/processor.php',
	array(
		'axAction' => 'write_config',
		'hostname' => $server_hostname,
		'username' => $server_username,
		'password' => $server_password,
		'lang'     => $language,
		'prefix'   => $server_prefix,
		'database' => $server_database
	)
);

echo 'Configuring KIMAI' . PHP_EOL;
echo kimaiInstall(
	KIMAI_DOMAIN . '/installer/install.php',
	array(
		'accept'   => 1,
		'timezone' => KIMAI_TIMEZONE
	)
);

echo 'DONE, enjoy Kimai at ' . KIMAI_DOMAIN . PHP_EOL;

// Call the installer script via CURL
function kimaiInstall($url, $params)
{
	$kimaiUrl = $url . '?' . http_build_query($params);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $kimaiUrl);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$output = curl_exec($ch);
	curl_close($ch);
	return $output;
}
