#!/bin/sh
mv    /pqcrypto    /usr/local/lib/python3.11/site-packages/pqcrypto
nginx
uvicorn main:app
