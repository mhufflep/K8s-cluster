# K8s-cluster

Kubernetes cluster implemented with minikube
Contains the following services:
* NGiNX
* MySQL
* PhpMyAdmin
* Wordpress
* FTPS
* Grafana
* InfluxDB + Telegraf

# Dependencies
## Linux preparation: <br>
    Go and get [Homebrew for Linux](https://docs.brew.sh/Homebrew-on-Linux)
## MacOS | Linux install
### Kubernetes CLI
    1. Install kubectl by this command: `brew install kubernetes-cli`
    2. Check if the version you installed is up-to-date: `kubectl version --client`
   
### Minikube
    1. Installing minikube: `brew install minikube`
    2. `sudo mv minikube /usr/local/bin` will make minikube available from anywhere 
    3. `minikube start --vm-driver=<driver_name>` with hypervisor name specified in lowercase
    4. If `minikube status` will show something like below that minikube is working fine
        ```
        host: Running
        kubelet: Running
        apiserver: Running
        kubeconfig: Configured
        ```
    5. `minikube stop` to stop cluster

# Usage
Run `./setup.sh` or `bash setup.sh` to build a cluster
