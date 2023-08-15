#!/bin/sh
nginx
gunicorn  --chdir /app/django_rest   django_rest.wsgi:application --reload --timeout 1000
