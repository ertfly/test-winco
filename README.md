# Test Winco

## Prerequisites
- Docker, docker-compose or PHP 8.1
- Shell commands

## Clone this project
- Access folder destination project
- Clone project
```
git clone git@github.com:ertfly/test-winco.git
```

- Access folder project
```
cd test-winco
```

## Deploy with Docker
- Duplicate file with name docker-compose.yml
```
cp docker-compose.sample.yml docker-compose.yml
```
- Check the port in docker-compose.yml file, if available port, continue in next step
```
    ports:
      - '8000:80'
```
- Build de container
```
docker-compose build
```
- Start container
```
docker-compose up
```
- There are 2 test formats, one on the command line (test-1.php, test-2.php, test-3.php) and another on the web in the public folder.
- For format web, access your localhost and port defined, in this example: http://localhost:8000
- For format in command line, keep open this command, open new terminal in same folder and access container 
```
docker-compose exec web bash
```
- Execute tests by file
```
php test-1.php
php test-2.php
php test-3.php
```

## Deploy without Docker
- Unzip vendor.zip, this files contains autoload class for execution
- Check version PHP is 8.1 or later
- For format web, access folder project and execute this command, access your browser in port defined, example http://localhost:8000
```
php -S 0.0.0.0:8000 -t public
```
- For format command line execute this:
```
php test-1.php
php test-2.php
php test-3.php
```

### Thank you :D