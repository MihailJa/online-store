# Интернет-магазин
## Учебный проект

Использует фреймворк [https://symfony.com] версии 5.4

## Развернуть проект 

Склонироварть репозторий 
``` 
git clone git@github.com:MihailJa/online-store.git
```
Перейти в папку с проектом и выполнить 
```
/bin/bash bin/build-project.sh
```
Настроить Webpack установить npm
```
npm install
```
И запустить
```
npm run build
```
выполнить команду
```
composer install
```
добавить файл в корень проекта .env.local со строчкой DATABASE_URL="mysql://root:@127.0.0.1:3306/store?serverVersion=5.7&charset=utf8mb4"
```


Проект будет доступен по адресу [http://store]

## Инициализация базы данных

Настроить подключение к БД

Для того чтобы на основании существующих сущностей получить структуру базы данных, необходимо выполнить команду описанную ниже:

``` 
symfony console doctrine:schema:update
```
или
``` 
php ./bin/console doctrine:schema:update
```
Флаги команды:
- `--dump_sql` узнать запросы которые будут выполнены;
- `--force` выполнить запросы

## Маршруты (routes)

Команда выводящая все маршруты (routes) в проекте:

``` 
symfony console debug:route
```

