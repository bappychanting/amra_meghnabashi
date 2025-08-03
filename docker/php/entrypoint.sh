#!/bin/sh

# Only copy vendor if it doesn't exist
if [ ! -d "/var/www/vendor" ]; then
    echo "Copying vendor/ from image to mounted volume..."
    cp -r /tmp/vendor /var/www/vendor
fi

# Continue with default CMD
exec "$@"