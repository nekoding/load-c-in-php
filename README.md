### About

Experiment with FFI (Foreign Function Interface) class to run c function in php.

##### Note
Please uncomment/enable `ffi` extension in `php.ini` and install php extension `php-ffi`

##### Usage

first compile so file:
```sh
clang -shared -fPIC -o vector.so vector.c
```

then after compilation success run `main.php`
```sh
php main.php
```

Or you can using docker with this command

```sh
docker build -t php-experiment . 
docker run --rm --name php-experiment 
```