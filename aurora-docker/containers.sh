#!/bin/bash

start_containers() {
    sudo docker start $(docker ps -a -q) 2>/dev/null
}

stop_containers() {
    sudo docker stop $(docker ps -a -q) 2>/dev/null
}

# Check if Docker is installed
if ! command -v docker &> /dev/null; then
    echo "Docker is not installed. Please install Docker and try again."
    exit 1
fi

# Check if Docker daemon is running
if ! sudo systemctl is-active --quiet docker; then
  echo "Docker daemon is not running."
fi

# Parse command line arguments
if [[ $# -eq 0 ]]; then
    echo "Usage: $0 [start|stop]"
    exit 1
fi

# Start or stop containers based on command line argument
case $1 in
    start)
        start_containers
        ;;
    stop)
        stop_containers
        ;;
    *)
        echo "Invalid command. Usage: $0 [start|stop]"
        exit 1
        ;;
esac

# Display container status
sudo docker ps -a --format "{{.Names}}\t\t{{.Status}}"
