kubectl delete -f ./srcs/nginx/nginx.yaml

docker image rm $(docker images | grep nginx_img | tr -s ' ' | cut -d" " -f3)

docker build -t nginx_img ./srcs/nginx

kubectl apply -f ./srcs/nginx/nginx.yaml