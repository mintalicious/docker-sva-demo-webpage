#!/bin/sh

export TITLE="SVA Demo HTTP Request Metadata"

if [ $# -gt 0 ]
then
	export TITLE="$*"
fi

echo $TITLE

php -S 0.0.0.0:8080 -t $PWD

