<?php
if($modx->context->get('key') != "mgr") {
/* Определяем текущий язык в cultureKey */
switch ($_REQUEST['cultureKey']) {
/* Переключаем контекст */
case 'en':
$modx->switchContext('eng');
break;
/* Добавляем дополнительные языки в плагин, если нужно
case 'de':
$modx->switchContext('dtsch');
break;
*/
/* Устанавливаем контекст по умолчанию */
default:
$modx->switchContext('web');
break;
}
/* Очищаем GET-параметр чтобы не допустить появлении ссылки вида cultureKey=xy при генерации URL других компонентов */
unset($_GET['cultureKey']);
}
return;
