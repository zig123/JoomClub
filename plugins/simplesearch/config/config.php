<?php
/*
  Simplesearch plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

$config = array ();

// Минимальная длина поискового запроса (всего)
$config ['Min_Length_Of_Search_Query'] = 3; // символов

// Максимальная длина поискового запроса (всего)
$config ['Max_Length_Of_Search_Query'] = 1000; // символов

// Минимальная длина слова в запросе
$config ['Min_Length_Of_Search_Word'] = 3; // символов

// Максимальная длина слова в запросе
$config ['Max_Length_Of_Search_Word'] = 20; // символов

// Вырезать все теги из поискового запроса, иначе - обработать стандартным парсером
$config ['Strip_All_Tags'] = true;

//
// Валидация запроса
//

// Символы, которые считаются валидными. Все остальные вырежет парсер
// Для добавления других языков сюда нужно будет внести набор символов
//
// i == case insensitive
// s == includes newlines
// S == deep analysing
// u == UTF-8
// EXPL: if NOT space, any word symbol (en), not cyrilic symbols (both upper and lower cases) and "minus" - replace that symbol with space
$config ['Validate_Search_Query_With'] = '/[^\s\wа-яА-Яіїє-]/iusS';

//
// Выделение результатов поиска в тексте
//

// Граница слова, используется при подсветке результатов поиска
$config ['Highlight_Words_Border'] = '';  // '[^\wа-яА-Яіїє-]?' ? if at begining or end of text

// Выделение искомого слова слева
$config ['Highlight_Wrapper_Before'] = '<span class="searched-item">';

// Выделение искомого слова справа
$config ['Highlight_Wrapper_After'] = '</span>';

//
// Поиск по релевантности информации
//

// Точный поиск по умолчанию, если не задано другого (можно задавать параметр "strict" в форме поиска чтобы изменять это значение)
// "Сон" - будет искать точное совпадение (регистронезвисимое), иначе найдет "Сонату" и т.п.
$config ['Strict_Search_By_Defalut'] = true;

// Разрешить НЕ точный поиск ДОПОЛНИТЕЛЬНО и ТОЛЬКО если включен точный поиск (Strict_Search_By_Defalut)
// Результаты будут выдаваться на основе релевантности найденной информации - сначала тексты, где найдено точное совпадение с искомым запросом,
// потом - тексты, где встречаются и похожие слова
$config ['Allow_Not_Strict_Search_Additionally'] = true;

// Количество результатов поиска на страницу
$config ['Results_Per_Page'] = 20;

// Включать автозаполнение (автокомплитер) по тегам и пользователям для формы поиска
$config ['Enable_Auto_Completer'] = true;

// Включить поиск по топикам
$config ['Enable_Topics_Search'] = true;

// Включить поиск по комментариям
$config ['Enable_Comments_Search'] = true;

// Включить поиск по людям
$config ['Enable_People_Search'] = true;

//
// --- Сортировка результатов ---
// (параметр "ORDER BY" sql запроса)
// DESC - самые новые - сверху (спадающая сортировка), ASC - самые старые сверху (возрастающий список).
// Изменять внимательно т.к. данные подставляются прямо в запрос!
// Вес по релевантности (если включен этот режим) подставляется автоматически и является главным условием сортировки.
// Здесь указываются только вторичные условия и нужно указать минимум один параметр
//

// Как выводить топики
// по рейтингу топика, потом по его ИД, который также означает его "дальность" публикации.
$config ['Topics_Order'] = array (
                                  'topic_rating DESC',
                                  'topic_id DESC'
                                 );

// Как выводить комментарии
// по рейтингу комментария, потом по его ИД, который также означает его "дальность" публикации
$config ['Comments_Order'] = array (
                                    'comment_rating DESC',
                                    'comment_id DESC'
                                   );
                                   
// Как выводить людей :)
// по рейтингу пользователя, потом по его силе
$config ['People_Order'] = array (
                                    'user_rating DESC',
                                    'user_skill DESC'
                                   );

//
// ---
//
                                   
if ($config ['Enable_People_Search']) {
  Config::Set ('block.rule_peoplesearch_info', array (
    'action' => array (
      'people',
      'search' => array ('people')
    ),
    'blocks' => array ('right' => array (
      'block.people.tpl' => array (
        'params' => array ('plugin' => 'simplesearch'),
        'priority' => 120
      ),
    )),
  ));
}

return $config;

?>