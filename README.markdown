Base MODX Evolution Module
==========================

Заготовка модуля для MODX Evolution.

Установка модуля
----------------

1. Скопировать `base` в директорию `assets/modules`
2. Создать новый модуль через `Управление модулями` с именем `Base` и кодом
`require $modx->config['base_path'] . 'assets/modules/base/base.module.php';`
3. Обновить страницу используя F5
4. Перейти к модулю `Base` и завершить установку нажав `Установить модуль`

Установка сниппета
------------------

1. Установить модуль
2. Создать сниппет с именем `Base` и кодом
`require $modx->config['base_path'] . 'assets/modules/base/base.snippet.php';`
