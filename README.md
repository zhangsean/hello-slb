# hello-web
Simple web server to show server and client info, helpful to check service backend.

[![DockerHub Badge](http://dockeri.co/image/zhangsean/hello-web)](https://hub.docker.com/r/zhangsean/hello-web/)

### Usage
To start a single web server:
```
docker run -d -p 8088:80 zhangsean/hello-web
```
Visit http://docker-server-ip:8088/ you will see a page like following:  
![screen1.png](https://raw.githubusercontent.com/zhangsean/hello-web/master/screen1.png)

To use this web server as a K8S service.
```
kubectl run hello-web --image=zhangsean/hello-web --port=80
kubectl expose deploy hello-web --type=NodePort
kubectl get svc
```
For example, your k8s service list like this:
```
NAME             TYPE        CLUSTER-IP      EXTERNAL-IP   PORT(S)        AGE
svc/hello-web    NodePort    10.100.78.246   <none>        80:31999/TCP   23s
```
Visit http://docker-server-ip:31999/ you will see the web page showing server info.  
Keep refreshing the web page, server info on the page will not change, as your service have only one backend server.

Scale your service with multi replicas, for example:
```
kubectl scale deploy hello-web --replicas=3
kubectl get deploy hello-web
```
When AVAILABLE is equal to DESIRED, that means the replicas are all running.  
Keep refreshing http://docker-server-ip:31999/ you will see server info changes in a loop, as your service have multi backend web servers now.
