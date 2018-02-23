# hello-slb
Simple web server to show server and client info, helpful to check service backend.

[![DockerHub Badge](http://dockeri.co/image/zhangsean/hello-slb)](https://hub.docker.com/r/zhangsean/hello-slb/)

### Usage
To start a single web server:
```
docker run -d -p 8088:80 zhangsean/hello-web
```
Visit http://docker-server-ip:8088/ you will see a page like following:  
![screen1.png](https://raw.githubusercontent.com/zhangsean/hello-web/master/screen1.png)

To use this web server as a K8S service.
```
kubectl run hello-web --image=zhangsean/hello-slb --port=80
kubectl expose deploy hello-web --type=NodePort
kubectl get svc
```
For example, your k8s service list:
```
```
Visit http://docker-server-ip:34232/ you will see the web page showing web server info.  
Keep refreshing the web page, server info on the page will not change, as your service have only one backend server.

Scale your service with multi replicas:
```
kubectl scale deploy hello-web --replicas=3
kubectl get deploy hello-web
```
When replicas of the service are all running, keep refreshing http://docker-server-ip:34232/ you will see server info on the page is changing, as your service have multi backend web servers.
