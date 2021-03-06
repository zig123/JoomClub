
  Simplesearch plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/

Хороший поиск с простой релевантностью (на основе регулярных выражений в запросах к БД) по топикам (заголовок, текст), комментам и пользователям (логин, имя, страна, город и поле "о себе"), автозаполнение (автокомплитер) по тегам, логинам для формы поиска. Не требует установки других плагинов для своей работы. Альтернатива сфинксу.

Преимущества перед поиском aceMySearch:
- поддержка украинских символов і, ї, є в поиске прямо из коробки
- плагин является standalone - т.е. для его работы не нужны другие плагины (как например для работы плагина aceMySearch нужна админка)
- улучшенный алгоритм релевантности при поиске (см. ниже)
- улучшенное восстановление кодировки если та по пути до сервера была "повреждена" (ввели в строке старого браузера или "выпал" последний символ юникода кириллического символа)
- по непроверенным данным (общепринятому мнению) используемые запросы (INNER JOIN) являются быстрее тех, на которых построен плагин aceMySearch (LEFT JOIN), итого: прирост в скорости поиска.

Релевантность выдачи:
Поиск использует выдачу на основе точного совпадения с искомым словом, а потом уже похожих слов и строит на основе этого выдачу.
т.е. в выдачу сначала попадают объекты в которых найдено точное совпадение с запросом, потом - похожие.

Наибольший приоритет имеет текст топика - если в нем найдено точное совпадение - делаем вес релевантности самым большим, потом точное совпадение плагин ищет в заголовке, потом производится поиск на не точное совпадение снова в тексте топика и в заголовке. Потом идет сортировка по рейтингу, а потом уже по времени публикации (на самом деле по ИД, но ИД отображает "дальность" публикации т.к. автоматически инкрементируется), самые старые объекты будут в конце поисковой выдачи.

Рассмотрим запрос на украинском языке "їжа kiss": плагин выведет первым топик в котором есть слово kiss с рейтингом +2, потом топик о еде ("їжа") с нулевым рейтингом и потом топик о ежиках ("їжак", "їжаки" и т.п.) тоже с нулевым рейтингом, причем результаты поиска будут определены по группам точное/не точное совпадение в заголовке/тексте.

В плагин включен автокомплитер по тегам для поиска который раньше был выполнена в виде отдельного плагина.

В плагин добавлена возможность поиска по людям
Поиск выполняется по логину, имени, стране, городу и поле "о себе". Релевантность при поиске пользователей не используется, на форме есть опция "точный/не точный поиск", который задает алгоритм поиска.

При выводе результаты поиска выводятся в порядке релевантности: сначала точные результаты, потом похожие. Каждая группа результатов подписана и визуально отделена.

Поисковый запрос выделяется в тексте цветом.
Запросы оптимизированы, все результаты поиска кешируются.


В конфиге доступны параметры:

- Минимальная длина поискового запроса (всего)
- Максимальная длина поискового запроса (всего)
- Минимальная длина слова в запросе
- Максимальная длина слова в запросе
- Вырезать все теги из поискового запроса, иначе - обработать стандартным парсером

Валидация запроса:
- Символы, которые считаются валидными. Все остальные вырежет парсер. Для добавления других языков сюда нужно будет внести набор символов (регеспа)

Выделение результатов поиска в тексте:
- Граница слова, используется при подсветке результатов поиска (регекспа)
- Выделение искомого слова слева
- Выделение искомого слова справа

Поиск по релевантности информации:
- Точный поиск по умолчанию, если не задано другого (можно задавать параметр "strict" в форме поиска чтобы изменять это значение)
  "Сон" - будет искать точное совпадение (регистр-независимое), иначе найдет "Сонату" и т.п.
- Разрешить НЕ точный поиск ДОПОЛНИТЕЛЬНО и ТОЛЬКО если включен точный поиск
  Результаты будут выдаваться на основе релевантности найденной информации - сначала тексты, где найдено точное совпадение с искомым запросом, потом - тексты, где встречаются и похожие слова

- Количество результатов поиска на страницу
- Включать автозаполнение (автокомплитер) по тегам для формы поиска
- Включить поиск по топикам
- Включить поиск по комментариям
- Включить поиск по людям

Сортировка результатов:

- Как выводить топики
- Как выводить комментарии
- Как выводить людей
