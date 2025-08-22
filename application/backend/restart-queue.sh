#!/bin/bash
ps ax | grep queue:work | awk '{print($1)}' | xargs echo -n | xargs kill -9
