build your docker with project name called "hello-world" with . means current directory
$ docker build -t hello-world .

then run with
$ docker run -t 8081:80 hello-world 

if using windows, you can use linux containers rather than windows containers - surely, theres
some config you needed to change:
1. Right click on Docker Apps -> open settings
2. Open tab Shared Drives -> and check all drives you needed, you will be prompted for credentials.
3. then after restart, run this command 

$ docker run -p 8081:80 -v C:/Users/rusdi_karsandi/Desktop/docker/docker_hello/src/:/var/www/html/ hello-world

Then open you browser "http://localhost:8081"