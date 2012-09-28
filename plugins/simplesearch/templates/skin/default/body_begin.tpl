
  <!-- Simplesearch plugin -->
  <script>
    jQuery (document).ready (function ($) {
      ls.autocomplete.add ($ ('#search-header-form input.input-text'), aRouter ['ajax'] + 'autocompleter/tag/', false);
      ls.autocomplete.add ($ ('#SS_SearchField'), aRouter ['ajax'] + 'autocompleter/tag/', false);
      ls.autocomplete.add ($ ('div.block.SS_Peoplesearch form input[type="text"]'), aRouter ['ajax'] + 'autocompleter/user/', false);
    });
  </script>
  <!-- /Simplesearch plugin -->
