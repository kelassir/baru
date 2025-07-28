<?php

$databases['default']['default'] = array (
  'database' => 'drupaldb',
  'username' => 'drupaluser',
  'password' => 'drupalpass',
  'host' => 'mysql3',
  'driver' => 'mysql',
  'port' => '3306',
  'prefix' => '',
);

$settings['hash_salt'] = 'replace_this_with_a_real_salt_value';

// Redis cache configuration
$settings['redis.connection']['interface'] = 'PhpRedis';
$settings['redis.connection']['host'] = 'redis3';

// Use Redis for all caches, except a few
$settings['cache']['default'] = 'cache.backend.redis';
$settings['cache']['bins']['bootstrap'] = 'cache.backend.database';
$settings['cache']['bins']['discovery'] = 'cache.backend.database';
$settings['cache']['bins']['config'] = 'cache.backend.database';

// Enable Redis service definitions
$settings['container_yamls'][] = 'modules/contrib/redis/example.services.yml';

// Trusted host pattern (optional, adjust accordingly)
$settings['trusted_host_patterns'] = [
  '^localhost$',
  '^127\.0\.0\.1$',
];

