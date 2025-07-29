# Final Day
<pre>
  # mkdir export3
  # cd export3
  # tmux new -s sabah
  # nano docker-compose.yml
  # nano .env
</pre>

```
MYSQL_ROOT_PASSWORD=rootpass
MYSQL_DATABASE=drupaldb
MYSQL_USER=drupaluser
MYSQL_PASSWORD=drupalpass
```
<pre>
  # docker-compose up
</pre>

## Assignment
Install drupal di browser http://IP-ADDRESS:20200

Test Redis Server di browser http://IP-ADDRESS:20204

## Grafana Gua Gomantong
<pre>
  # docker pull grafana/grafana
</pre>

## Configure Redis to Drupal
on TMUX CTRL+b c

<pre>
  # docker ps
</pre>

on TMUX CTRL+b "
<pre>
  # docker exec -it export3-drupal3-1 bash
</pre>

on TMUX CTRL+b %
<pre>
  # docker exec -it export3-drupal3-1 bash
  # cd /var/www/html
  # ls -l
  # cd sites
  # ls -l
  # cd default
  # ls -l
</pre>

copy dari repository/settings.php ke dalam baris terakhir settings.php (jangan replace, tambah line jer)
<pre>
  # apt-get update && apt-get install -y nano
</pre>

next install redis di dalam container drupal
<pre>
  # apt-get update && apt-get install -y \
    libz-dev \
    libpng-dev \
    libonig-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    pkg-config \
    libssl-dev \
    && pecl install redis \
    && docker-php-ext-enable redis \
    && composer require drupal/redis
  # nano /var/www/html/sites/default/redis.services.yml
</pre>
