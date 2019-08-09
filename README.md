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
ssh-keygen -f deploy/.ssh/id_rsa
