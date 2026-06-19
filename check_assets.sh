#!/bin/bash

declare -a urls=(
  "https://growighairsolution.com/assets/full%20lace-hair-patch-styling.png"
  "https://growighairsolution.com/assets/full%20lace-hair-patch-hero.png"
  "https://growighairsolution.com/assets/full%20lace-hair-patch-before-after.png"
  "https://growighairsolution.com/assets/front%20lace-hair-patch-before-after.png"
  "https://growighairsolution.com/assets/front%20lace-hair-patch-styling.png"
  "https://growighairsolution.com/assets/front%20lace-hair-patch-hero.png"
  "https://growighairsolution.com/assets/bmw-hair-patch-hero.png"
  "https://growighairsolution.com/assets/french%20lace-hair-patch-styling.png"
  "https://growighairsolution.com/assets/french%20lace-hair-patch-before-after.png"
  "https://growighairsolution.com/assets/french%20lace-hair-patch-hero.png"
)

for url in "${urls[@]}"; do
  status=$(curl -o /dev/null -s -w "%{http_code}" "$url")
  echo "$url -> $status"
  if [[ $status -ge 400 && $status -lt 500 ]]; then
    echo "[WARN] $url returned client error $status"
  fi
done
