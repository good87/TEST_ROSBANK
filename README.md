#### task1: в задании предполагается, что машина уже есть, и необходимо ее удаленно настроить. Файл task1.yml это ansible playbook, который запусскается на всех машинах,ставит обновления, создает локальную группу "application" для ПО, удаляет группу из админов и создает пользователя AP_user и помещает его в application.

#### task2: в корне репозитория хранится docker-compose файл для запуска контейнеров. Запуск производится командой docker-compose up. Директории apache-html и apache-html2 хранят конфигурационные файлы для каждой ноды apache и страницы сайта. Файл nginx.conf - конфигурация балансировщика nginx. 

