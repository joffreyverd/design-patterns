# design-patterns

Please find several examples of playable design patterns I already used.

## Installation
1. install PHP & composer
```sh
sudo apt install php -y && sudo apt install composer -y
```
2. dumps the autoloader
```sh
composer dump-autoload -o
```

## Commands
```sh
php index.php # get the list of testable patterns
php index.php pattern # execute a specific pattern
```

## Create a new pattern
1. Add to `App\DesignPattern::LIST` the new pattern name,
2. Create the associated controller into `Controller`,
3. Create the associated directory into `App`,
4. Play with it!
