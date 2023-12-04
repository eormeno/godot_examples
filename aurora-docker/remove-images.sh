#!/bin/bash

# Check if Docker is installed
if ! command -v docker &> /dev/null; then
    echo "Docker is not installed. Please install Docker and try again."
    exit 1
fi

# Check if Docker daemon is running
if ! sudo systemctl is-active --quiet docker; then
  echo "Docker daemon is not running."
fi

# Stop containers
sudo docker stop $(docker ps -a -q) &>/dev/null

# Remove containers
sudo docker rm $(docker ps -a -q) &>/dev/null

# Remove images
sudo docker rmi $(docker images -a -q) $>/dev/null

# Display message in green
echo -e "\e[32mAll containers and images have been removed.\e[0m"