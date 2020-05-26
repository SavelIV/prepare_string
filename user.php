<?php

// var.2 - php

/**
 * Get preparing string
 */
class userApi
{

  function getApiPath($user, $apiTemplate)
  {

    $this->user = $user;

    return preg_replace_callback(
      '|%(.*)%|isU',
      function ($matches) {
        return rawurlencode($this->user[$matches[1]]);
      },
      $apiTemplate
    );
  }
}

$user = [
  'id' => 20,
  'name' => 'John Dow',
  'role' => 'QA',
  'salary' => 100
];

$apiTemplatesSet1 = [
  '/api/items/%id%/%name%',
  '/api/items/%id%/%role%',
  '/api/items/%id%/%salary%'
];

$userApi = new userApi();
echo (json_encode($userApi->getApiPath($user, $apiTemplatesSet1), JSON_UNESCAPED_SLASHES));
