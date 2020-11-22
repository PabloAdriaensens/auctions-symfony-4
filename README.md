# Auctions Project


### Technologies

Dillinger uses a number of open source projects to work properly:

* Symfony 4.4;
* Docker Compose
* MySQL
* Nginx
* Bootstrap
* JavaScript

### Installation

Clone the project

1. Create a folder
2. Clone the repository: https://github.com/PabloAdriaensens/auctions-symfony-4

Start containers

```sh
$ docker-compose build
$ docker-compose up -d
```

Access into php container and execute:

```sh
$ ./bin/console doctrine:database:create
$ ./bin/console doctrine:migrations:migrate
$ ./bin/console doctrine:fixtures:load
```

Run webpack

```sh
$ yarn run encore dev --watch
```

### Users

Dillinger is currently extended with the following plugins. Instructions on how to use them in your own application are linked below.

| User | Password |
| ------ | ------ |
| user1@eactivos.com | eactivos |
| user2@eactivos.com | eactivos |
| (10)... | ... |

| Admin | Password |
| ------ | ------ |
| admin1@eactivos.com | eactivos |
| admin2@eactivos.com | eactivos |
| (3)... | ... |


<p align="center">
  <sub>An open source project by <a href="https://github.com/PabloAdriaensens">Pablo Adriaensens</a>.</sub>
</p>