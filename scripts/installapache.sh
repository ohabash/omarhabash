#!/bin/bash
yum -y install httpd > /var/log/installapache.out 2>&1


webhook_url="https://hooks.slack.com/services/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"
channel="#general"
# channel=$channel$1;
text="AWS-OH: Deployment detected"


escapedText=$(echo $text | sed 's/"/\"/g' | sed "s/'/\'/g" )
json="{\"channel\": \"$channel\", \"text\": \"$escapedText\"}"

curl -s -d "payload=$json" "$webhook_url"