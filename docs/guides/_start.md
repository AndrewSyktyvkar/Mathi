# Начало работы

### Шаг 1. "Установка" Git
В первую очередь Вам необходимо скопировать себе Git клиент, который располагается на сетевом диске `S:\K1\517\PortableGit`. Скопируйте папку PortableGit целиком к себе.

После того как Вы скопировали себе папку PortableGit зайдите в неё и запустите файл `git-bash`. Теперь в появившемся окне выполните следующую команду
```
cd /c/xampp/htdocs
```

### Шаг 2. Копирование удалённого репозитория

Выполните команду
```
git clone https://github.com/AndrewSyktyvkar/Mathi.git
```

**Совет.** Вы можете скопировать команду и вставить её в окно с помощью сочетания клавиш Shift + Ins

Тепрь выполните следующую команду, чтобы попасть в папку с проектом
```
cd mathi
```

### Шаг 3. Первоначальная настройка

Выполните следующие команды, чтобы git узнал ваше имя и электронную почту. В кавычках должны быть **Ваши** логин и email соответственно.
```
git config --local user.name "Your Name"
git config --local user.email "your_email@whatever.com"
```

### Шаг 4. Ознакомление с правилами

Не пугайтесь, здесь не будет многотомников, только небольшие заметки.

Рекомендуемый порядок прочтения:

1. [Для чего нужно соблюдать правила?](https://github.com/AndrewSyktyvkar/Mathi/blob/master/docs/guides/importance_of_rules.md)
2. [Правила именования объектов](https://github.com/AndrewSyktyvkar/Mathi/blob/master/docs/guides/naming_rules.md)
3. [Как правильно оформлять SQL запросы](https://github.com/AndrewSyktyvkar/Mathi/blob/master/docs/guides/sql_queries.md)
4. [Как делать изменения](https://github.com/AndrewSyktyvkar/Mathi/blob/master/docs/guides/changes.md)