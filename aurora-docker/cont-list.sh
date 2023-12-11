clear
sudo docker ps -a --format "{{.Names}}\t\t{{.Status}}\t{{.Ports}}"