#!/bin/bash
urls=(
"https://growighairsolution.com/blog/hair-patch-side-effects-myths-reality"
"https://growighairsolution.com/blog/hair-weaving-in-dwarka"
"https://growighairsolution.com/blog/how-does-hair-patch-work"
"https://growighairsolution.com/blog/what-is-hair-patch"
"https://growighairsolution.com/blog/sleep-swim-exercise-with-hair-patch"
"https://growighairsolution.com/blog/types-of-hair-patches"
"https://growighairsolution.com/blog/are-hair-patches-worth-it"
"https://growighairsolution.com/blog/what-is-hair-patch-treatment"
"https://growighairsolution.com/blog/does-hair-patch-look-natural"
"https://growighairsolution.com/blog/can-hair-patch-fall-off"
"https://growighairsolution.com/blog/hair-patch-price-in-dwarka"
"https://growighairsolution.com/blog/hair-patch-vs-transplant"
"https://growighairsolution.com/blog/what-is-non-surgical-hair-replacement"
"https://growighairsolution.com/blog/human-hair-vs-synthetic-wig"
"https://growighairsolution.com/blog/is-hair-patch-permanent"
"https://growighairsolution.com/blog/is-hair-patch-detectable"
"https://growighairsolution.com/blog/hair-patch-maintenance-tips"
"https://growighairsolution.com/blog/how-long-does-hair-patch-last"
"https://growighairsolution.com/blog/is-hair-patch-safe"
"https://growighairsolution.com/blog/benefits-of-hair-patch-for-men"
"https://growighairsolution.com/blog/non-surgical-hair-replacement-cost-delhi"
"https://growighairsolution.com/blog/which-hair-patch-is-best"
)
for url in "${urls[@]}"; do
  echo "Checking $url"
  status=$(curl -s -o /dev/null -w "%{http_code}" "$url")
  echo "Status: $status"
  if [ "$status" != "200" ]; then
    echo "Warning: $url returned $status"
  fi
done
