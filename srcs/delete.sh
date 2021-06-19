docker stop $(docker ps -a -q)
docker rm $(docker ps -a -q)
docker container prune
docker rmi $(docker images -q)

# docker image rm $(docker images | grep grafana_img | tr -s ' ' | cut -d" " -f3)
