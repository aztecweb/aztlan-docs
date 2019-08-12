# Aztlan

## Docker
```
docker-compose build --pull
```

## Server
```
docker-compose up docusaurus
```

## Development

docker-compose run --rm docusaurus yarn start

## Build static site
```
docker-compose run --rm docusaurus yarn build
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
