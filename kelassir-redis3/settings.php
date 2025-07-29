
$settings['redis.connection']['interface'] = 'PhpRedis';
$settings['redis.connection']['host'] = 'redis3';

$settings['cache']['default'] = 'cache.backend.redis';
$settings['cache']['bins']['bootstrap'] = 'cache.backend.redis';
$settings['cache']['bins']['discovery'] = 'cache.backend.redis';
$settings['cache']['bins']['config'] = 'cache.backend.redis';

$settings['container_yamls'][] = '/var/www/html/sites/default/redis.services.yml';
