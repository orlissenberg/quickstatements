#!/usr/bin/env bash

# Test if required environment variables have been set
REQUIRED_VARIABLES=(MW_SITE_LANG MW_SITE_NAME WIKIBASE_SCHEME_AND_HOST WIKIBASE_PUBLIC_HOST_AND_PORT VALID_ORIGIN TOOLBASE)
for i in "${REQUIRED_VARIABLES[@]}"; do
    if ! [[ -v "$i" ]]; then
    echo "$i is required but isn't set. You should pass it to docker. See: https://docs.docker.com/engine/reference/commandline/run/#set-environment-variables--e---env---env-file";
    exit 1;
    fi
done

envsubst < /templates/.env > /var/www/html/quickstatements/.env
envsubst < /templates/oauth.ini > /var/www/html/quickstatements/config/oauth.ini
envsubst < /templates/php.ini > /usr/local/etc/php/conf.d/php.ini

docker-php-entrypoint apache2-foreground
