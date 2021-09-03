# App with CD

* Automatic build
* Automatic container reload via Portainer API


```
docker build -t cd-apache ./apps/app-1
docker run -p 8080:80 --rm --name ct-worker-1 cd-apache
```