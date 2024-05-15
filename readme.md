Просто тестовый репозиторий для показа простейших примеров

Установка composer:
1. Создать файл composer.json в папке src
2. Запустить composer install (на windows - php composer install)
3. Во входной точке подключить автозагрузчик. Проследить за относительным путем до файла autoload.php.
В данном случае входная точка во вложенной папке web, поэтому сперва нужно подняться на уровень вверх:

```require __DIR__ . './../vendor/autoload.php';```

4. namespace каждого файла начинается с App

### PHPStan

Установка: `composer require --dev phpstan/phpstan`

Запуск: `docker exec -it api_php vendor/bin/phpstan analyse .`

### PHPCS

Установка: `composer require --dev squizlabs/php_codesniffer`

Проверка: `docker exec -it api_php vendor/bin/phpcs .`

Автоматическое исправление: `docker exec -it api_php vendor/bin/phpcbf .`