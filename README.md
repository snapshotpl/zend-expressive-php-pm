# Expressive + PHP-PM

Zend Expressive application working on PPM (is a process manager, supercharger and load balancer for PHP applications.) https://docs.zendframework.com/zend-expressive/ https://github.com/php-pm/php-pm

## PHP-PM

Start application:
```
vendor/bin/ppm start --bridge=PHPPM\\Psr7\\Psr7Bridge --bootstrap=App\\BootstrapMiddleware
```

Benchmark:
```
composer bench-phppm
```

Preview: [http://127.0.0.1:8080/](http://127.0.0.1:8080/)

## PHP Build in server

Start application:
```
composer serve-buildin
```

Benchmark:
```
composer bench-buildin
```

Preview: [http://127.0.0.1:8081/](http://127.0.0.1:8081/)

## How to download?

```
composer create-project snapshot/zend-expressive-php-pm expressive-phppm
```

## Requiments

ab

```
sudo apt install apache2-utils
```

Prepare php enviroment for PPM https://github.com/php-pm/php-pm#installation