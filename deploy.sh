#!/bin/bash
cd /www
git pull >> ../logs/deploy.log 2>&1
