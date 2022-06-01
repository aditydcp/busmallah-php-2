<?php
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/secret/busmallah-470dc-firebase-adminsdk-l12o9-b328314158.json');

$firebase = (new Factory)
   ->withServiceAccount($serviceAccount)
   ->withDatabaseUri('https://busmallah-470dc-default-rtdb.asia-southeast1.firebasedatabase.app/')
   ->create();

$database = $firebase->getDatabase();