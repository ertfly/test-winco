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