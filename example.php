<?php
require_once 'vendor/autoload.php';

use Isisfa\SearchZipcode\Search;

$search = new Search;

$result = $search->getAddressFromZipcode('21321560');

print_r($result);