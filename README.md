# php-example
An example project showing how to use the Filebase S3 API with PHP.

## Quick Start
Use the following commands to get started:
```bash
$ git clone git@github.com:filebase/php-example.git && cd php-example
$ docker run --rm -i -v $PWD:/app composer install
$ docker run --rm -i -v $PWD:/app -e AWS_ACCESS_KEY_ID=your_key -e AWS_SECRET_ACCESS_KEY=your_secret -w /app php:7.4-cli php index.php
```
