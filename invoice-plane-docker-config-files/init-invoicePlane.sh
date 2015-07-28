#!/bin/bash
set -e

mkdir -p /var/www/html/uploads/temp /var/www/html/uploads/archive /var/www/html/uploads/customer_files
chmod o+rwX -R /var/www/html/uploads


# default startup
apache2-foreground
