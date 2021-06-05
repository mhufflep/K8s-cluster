#starting minikube
minikube stop

minikube delete
minikube start --vm-driver=virtualbox --cpus 2 --memory=4000mb --disk-size=7000
minikube dashboard & 
eval $(minikube docker-env)
docker pull metallb/speaker:v0.8.2
docker pull metallb/controller:v0.8.2

minikube addons enable metallb
kubectl apply -f ./srcs/metallb.yaml


#building docker images
docker build -t nginx_img ./srcs/nginx
docker build -t mysql_img ./srcs/mysql
docker build -t phpmyadmin_img ./srcs/phpmyadmin
docker build -t wordpress_img ./srcs/wordpress
docker build -t ftps_img ./srcs/ftps
docker build -t influxdb_img ./srcs/influxdb

#applying minikube yaml configurations
kubectl apply -f ./srcs/nginx/nginx.yaml
kubectl apply -f ./srcs/mysql/mysql.yaml
kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.yaml
kubectl apply -f ./srcs/wordpress/wordpress.yaml
kubectl apply -f ./srcs/ftps/ftps.yaml
kubectl apply -f ./srcs/influxdb/influxdb.yaml
# kubectl apply -f ./srcs/telegraf/telegraf.yaml
# kubectl apply -f ./srcs/grafana/grafana.yaml

#applying minikube json configurations
# kubectl apply -f ./srcs/nginx/nginx.json
# kubectl apply -f ./srcs/mysql/mysql.json
# kubectl apply -f ./srcs/phpmyadmin/phpmyadmin.json
# kubectl apply -f ./srcs/wordpress/wordpress.json
# kubectl apply -f ./srcs/ftps/ftps.json
# kubectl apply -f ./srcs/nginx/nginx.json
