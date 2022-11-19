#!/bin/bash

function PushIt()
{
  git add .
  git commit -m "05 project restored"
  git push origin master
}

cd /f/inetpub/wwwroot/ZurasMVC
clear
git log

while true; do
    read -p "Do you wish to push your changes to Github? " yn
    case $yn in
        [Yy]* ) PushIt; break;;
        [Nn]* ) exit;;
        * ) echo "Please answer yes or no.";;
    esac
done

