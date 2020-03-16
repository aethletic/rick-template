# Rick Template ☘
Ready-for-use шаблон Telegram бота для PHP библиотеки [aethletic/rick](https://github.com/aethletic/rick).

## Установка
**1.** Скопировать репозиторий:

```
$ git clone https://github.com/aethletic/rick-template.git
```

**2.** Установить зависимости ([aethletic/rick](https://github.com/aethletic/rick") и [библиотеку для работы с БД](https://github.com/mrjgreen/database "библиотеку для работы с БД")):

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
