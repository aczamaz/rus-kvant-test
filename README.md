Как запустить
предварительное условие должен быть установлен докер
1. внутри кореной папки выполнить ```composer install```
2. потом выполнить команду ```sail up -d```
3. потом выполнить команду ```sail artisan migrate```
4. потом зайти в папку front выполнить команду ```npm i``` и потом когда все пакеты подтянутся запустить приложение vue командой ```npm run serve```
