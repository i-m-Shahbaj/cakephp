#!/usr/bin/env bash
# Used as a default to seed config/.env which
# enables you to use environment variables to configure
# the aspects of your application that vary by
# environment.
#
# To use this file, first copy it into `config/.env`. Also ensure the related
# code block for loading this file is uncommented in `config/boostrap.php`
#
# In development .env files are parsed by PHP
# and set into the environment. This provides a simpler
# development workflow over standard environment variables.
export APP_NAME="__APP_NAME__"
export DEBUG="true"
export APP_ENCODING="UTF-8"
export APP_DEFAULT_LOCALE="en_US"
export APP_DEFAULT_TIMEZONE="UTC"
export SECURITY_SALT="__SALT__"

# Uncomment these to define cache configuration via environment variables.
#export CACHE_DURATION="+2 minutes"
#export CACHE_DEFAULT_URL="file://tmp/cache/?prefix=${APP_NAME}_default&duration=${CACHE_DURATION}"
#export CACHE_CAKECORE_URL="file://tmp/cache/persistent?prefix=${APP_NAME}_cake_core&serialize=true&duration=${CACHE_DURATION}"
#export CACHE_CAKEMODEL_URL="file://tmp/cache/models?prefix=${APP_NAME}_cake_model&serialize=true&duration=${CACHE_DURATION}"

# Uncomment these to define email transport configuration via environment variables.
#export EMAIL_TRANSPORT_DEFAULT_URL=""

# Uncomment these to define database configuration via environment variables.
#export DATABASE_URL="mysql://my_app:secret@localhost/${APP_NAME}?encoding=utf8&timezone=UTC&cacheMetadata=true&quoteIdentifiers=false&persistent=false"
#export DATABASE_TEST_URL="mysql://my_app:secret@localhost/test_${APP_NAME}?encoding=utf8&timezone=UTC&cacheMetadata=true&quoteIdentifiers=false&persistent=false"

# Uncomment these to define logging configuration via environment variables.
#export LOG_DEBUG_URL="file://logs/?levels[]=notice&levels[]=info&levels[]=debug&file=debug"
#export LOG_ERROR_URL="file://logs/?levels[]=warning&levels[]=error&levels[]=critical&levels[]=alert&levels[]=emergency&file=error"
