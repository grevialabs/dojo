-----------------------------------
DOCKER BUILD & RUN
-----------------------------------
In this tutorial, we will be building and run a docker inside mac.

First, create folder "docker" in your desktop. Then open terminal and move to that directory.

Create file called "Dockerfile" with these content
---------------
FROM php:7.1-apache 
COPY src /var/www/html
EXPOSE 8081
---------------
FROM means we get packages from hub.docker.com with names php:7.1-apache
COPY means we copy that packages to the html folder 
EXPOSE means we open port 8081

build your docker with project name called "hello-world" with . means current directory
$ docker build -t hello-world .

then run with
$ docker run -p 8081:80 -v /Users/rush/Desktop/docker/docker_hello/src:/var/www/html/ hello-world

if using windows, you can use linux containers rather than windows containers - surely, theres
some config you needed to change:
1. Right click on Docker Apps -> open settings
2. Open tab Shared Drives -> and check all drives you needed, you will be prompted for credentials.
3. then after restart, run this command 

$ docker run -p 8081:80 -v C:/Users/rusdi_karsandi/Desktop/docker/docker_hello/src/:/var/www/html/ hello-world

Then open you browser "http://localhost:8081", you should see the output

-----------------------------------
DOCKER COMPOSE
-----------------------------------

When we have many websites/Services, deploying below concept takes many manual jobs, instead we will use "Docker compose".

$ docker compose up

then open localhost:5000