## About this mini project

The purpose of this mini project is to demonstrate all collections method's available and the power in them. It will be associated to this article : [Les collections Laravel](https://itanea.fr/apprendre-le-developpement-web/les-collections-laravel)


![Les méthodes des Collections Laravel](https://itanea.fr/apprendre-le-developpement-web/wp-content/uploads/2020/03/image-3-1200x1238.png)


## How to install this project

1. git clone https://github.com/itanea/laravel-collections.git 
2. composer install
3. cd laravel-collections
4. mv .env.example .env
5. set your database's credentials
6. php artisan key:generate
7. php artisan migrate

8. Enjoy !! :D


## Release notes

### 20200524 - v2.0.8

- Add newsletter registration 
- Add notfication when user registers to newsletter
- Send mail to the user
- Note : run php artisan migrate & update .env file with COLLECTIONS_COUNT value

### 20200404 - v2.0.7

- Use before tag '<' on methods listing too

### 20200404 - v2.0.6

- Add componenents for random sentences when since if not fullfilled
- Add availabity to declare a method since like this '<5.2'

### 20200318 - v2.0.5

- Add edit link for every method on frontend for admin user only
- Add on frontend the birthdate (in laravel version term) of the method.
- Improve design a little on show page.


### 20200317 - v2.0.4

- improve update method by adding 'codeprepend' column and renaming 'comment' column to 'code'

### 20200317 - v2.0.3

- Add update functionnality


### 20200316 - v2.0.2

- Add 'since'fields to know from wich laravel's version the method exists
- Add some randomly sentences to said something when the since field is empty
- update composer requirements


### 20200312 - v2.0.1

- Test Telescope:prune scheduler

### 20200310 - v2.0

- Add methods and sources managment by database
- Improve frontend

## License

This project is licensed under the [MIT license](https://opensource.org/licenses/MIT).


