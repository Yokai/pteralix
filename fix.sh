#!/bin/sh
chown rrpvdkhs:rrpvdkhs .
chown -R rrpvdkhs:rrpvdkhs *
find . -type f | xargs chmod 664
find ./bin -type f | xargs chmod 775
find . -type d | xargs chmod 775
find . -type d | xargs chmod +s
umask 0002
