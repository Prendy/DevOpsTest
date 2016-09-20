#!/bin/bash
cd /www
time >> ../logs/deploy.log
git pull >> ../logs/deploy.log 2>&1
