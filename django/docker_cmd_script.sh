#!/bin/sh
nginx
gunicorn myproject.wsgi
