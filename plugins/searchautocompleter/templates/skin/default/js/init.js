/*
  SearchAutoCompleter plugin
  (P) PSNet, 2008 - 2012
  http://psnet.lookformp3.net/
  http://livestreet.ru/profile/PSNet/
  http://livestreetcms.com/profile/PSNet/
*/

jQuery (document).ready (function ($) {
  ls.autocomplete.add ($ ('#search-header-form input.input-text'), aRouter ['ajax'] + 'autocompleter/tag/', false);
});
