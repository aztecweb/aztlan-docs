# Aztlan

## Docker
```
docker-compose build --pull
```

## Setup
```
docker-compose run --rm node yarn
```

## Development
```
docker-compose up server
```

## Build
```
docker-compose run --rm node yarn build
```

## Deployment
Generate a SSH key, stored on `deploy/.ssh`:

```
ssh-keygen -f deploy/.ssh/id_rsa
```

Copy the public key on your server and run the following command to start a new deploy:

```
docker-compose run --rm deployer deploy production
```
