# App with CD

* Automatic build
* Automatic container reload via Portainer API


```
docker build -t cd-apache .
docker run -p 444:80 --rm --name ct-worker-1 cd-apache
```