# Rick Template ☘
Ready-for-use шаблон бота для PHP Telegram Bot Api библиотеки [aethletic/rick](https://github.com/aethletic/rick).

### Установка
**1.** Скопировать репозиторий:

```
$ git clone https://github.com/aethletic/rick-template.git
```

**2.** Установить зависимости ([aethletic/rick](https://github.com/aethletic/rick) и [библиотеку для работы с БД](https://github.com/mrjgreen/database "библиотеку для работы с БД")):

```
$ composer require aethletic/rick
$ composer require mrjgreen/database
```

**3.** В файле `/config/config.php` добавить токен бота.

**4.** Установить webhook, в параметре `url` передать путь до файла `index.php`:

```
curl https://api.telegram.org/botЗДЕСЬ_ТОКЕН_БОТА/setWebhook?url=https://example.com/index.php
```

**Готово!**

Если написать боту, то в ответ он отправит:
> Привет %username%!

И покажет клавиатуру.

### Структура бота

1. **bot** - папка в которой хранится вся логика проекта.
	- callbacks - классы для обработки колбэк запросов
	- core - полезные расширения/компоненты/классы/библиотеки
	- events - классы для обработки сообщений
	- bootstrap.php - файл инициализации бота
	- keyboards - файл в котором объявляются все статические (многоразовые) клавиатуры

2. **config** - папка с конфигурационными файлами
	- config.php - главный конфиг бота

3. **database** - папка с базой данных (SQLite)
	- bot.sqlite - главная база данных
	- bot.sql - схема базы данных

4. **var** - папка для временных файлов/логов

5. **index.php** - входная точка бота. В этом файле описывается весь "роутинг" сообщений, колбэков. Либо в нем можно описать всю логику бота, без использования Events и Callbacks, но тогда файл может стать слишком большим и трудно поддерживаемым.

