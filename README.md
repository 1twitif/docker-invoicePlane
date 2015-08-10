# docker-invoicePlane
ready to use invoicePlane container.

The automated build is available on Docker Hub : [1twitif/invoiceplane](https://hub.docker.com/r/1twitif/invoiceplane/)

## HOW TO :

- install [docker-compose](https://docs.docker.com/compose/install/) in your system
- copy the `docker-compose.yml` file from this project to your server.
- go where you put the file and run : `sudo docker-compose up`
- with a browser go to : [http://your-server:10180/setup](http://your-server:10180/setup) for InvoicePlane or to : [http://your-server:10181/](http://your-server:10181/) for phpmyadmin

PS : defaults password should be changed in `docker-compose.yml`

Feel free to customize it as you need !
