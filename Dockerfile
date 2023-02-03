FROM php:8.1.2
COPY . /app
WORKDIR /app

RUN apt-get update && \
    apt-get install libffi-dev -y
RUN docker-php-ext-install ffi
CMD [ "php", "main.php" ]