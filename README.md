# newsApi local installation
#### newsApi is deployed locally using sail and composer

#### If docker is not currently installed on your computer, you need to install it before starting to deploy the project

#### After you have cloned the project from the remote repository, you need to start command "composer install" in the directory of project
```
composer install
```

#### After finishing the construction of vendor directory, you need to make start docker by integrated to laravel programm "sail", for this you need to use command
```
./vendor/bin/sail up -d 
```

#### Make sure your project start sucessfully and no errors in upping container logs

#### If necessary, the logs of running and non-running containers can be viewed using command
```
sudo docker logs
```

#### In order to run the console command, you must first enter the container, for this you need to run the command
```
sudo docker-compose exec {container_name} bash
```

#### To complete the installation, you need enter to the project's container, for this you need to run the command
```
sudo docker-compose exec -it --user=sail {container_name} bash
```
#### and execute these commands for migrate databases:

```
php artisan migrate
```

#### After completing all these steps, the newsApi will be installed and ready to work

#### All configuration of the docker local environment and the list of the services used can be viewed or changed in the file `docker-compose.yml` at the root of the project

#### You can stop and delete all running containers and networks with the command
```
sudo docker-compose down
```
#### from the root of the project. If you need to stop one specific container, you need to run the command
```
sudo docker stop {container_name}
```
#### You can test Api by postman link below
https://www.getpostman.com/collections/2c13bf72d4494335c0fb

#### url which you can use
https://newsapi12345.herokuapp.com/
