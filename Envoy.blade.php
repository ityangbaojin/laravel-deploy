@servers(['web-1' => 'yang@192.168.56.103', 'web-2' => 'yang@192.168.56.104'])

@task('deploy', ['on' => ['web-1', 'web-2'], 'parallel' => true])
    cd /var/www/html/laravel-deploy
    git pull origin master
    composer install --no-dev
    php artisan migrate --force
@endtask