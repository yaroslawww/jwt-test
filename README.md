## Create keys
```shell script
cd storage/jwt-keys
ssh-keygen -t rsa -b 4096 -m PEM -f jwtRS256.key
# Don't add passphrase
openssl rsa -in jwtRS256.key -pubout -outform PEM -out jwtRS256.key.pub
cat jwtRS256.key
cat jwtRS256.key.pub
```

## Run examples
```shell script
php apprun create-and-read
php apprun create-token
php apprun read-token <TOKEN_THERE>
```

## Docs

https://tools.ietf.org/html/rfc7519#page-9