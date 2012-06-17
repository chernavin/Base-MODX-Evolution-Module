Base MODX Evolution Module
==========================

Заготовка модуля для MODX Evolution.

Установка модуля
----------------

1. Создать новую директорию `assets/modules/base`
2. Скопировать в неё файлы модуля
3. Создать новый модуль через `Управление модулями` с именем `Base` и кодом
`require $modx->config['base_path'] . 'assets/modules/base/base.module.php';`
4. Обновить страницу через F5
5. Перейти к модулю `Base` и завершить установку используя `Установить модуль`

Установка сниппета
------------------

1. Установить модуль
2. Создать сниппет с именем `Base` и кодом
`require $modx->config['base_path'] . 'assets/modules/base/base.snippet.php';`
