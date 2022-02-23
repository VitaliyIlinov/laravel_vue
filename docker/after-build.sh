#!/usr/bin/env bash

# Exit the script if any statement returns a non-true return value
set -e

apt autoremove -y 2&>1 >/dev/null || true
apt clean -y 2&>1 >/dev/null || true
apt autoclean -y 2&>1 >/dev/null || true

rm -rf \
  /var/lib/apt/lists/* \
  /tmp/*

find /var/log -type f | while read f; do
    echo -ne '' > ${f} 2&>1 > /dev/null || true;
done
