/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

function fullconsole()
{

  var screenHeight = window.innerHeight;

  var urlarr = window.location.href.split('/');
  console.log(urlarr);
  if (urlarr[3] == 'console')
  {
    document.body.innerHTML = ' <iframe id="pyconsole" src="https://trinket.io/embed/python3/eba82e49c7" width="100%" height="' + screenHeight + '" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>';
  }
}

fullconsole();



tinymce.init({
    selector: 'textarea',
      plugins: 'a11ychecker advcode casechange formatpainter linkchecker lists checklist media mediaembed pageembed'
      + 'permanentpen powerpaste table advtable tinycomments tinymcespellchecker',

      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table customInsertButton',
      toolbar_drawer: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Phillip',
      height: 500,
      width: 800,

      setup: function (editor) {

        editor.ui.registry.addButton('customInsertButton', {
          text: 'Code Block',
          onAction: function (_) {
            editor.insertContent('&nbsp;<pre><code class="language-python">### <br/>Add code here <br/>###</code></pre>&nbsp;');
          }
        });
    
      }//EOO


    });



    // for highlight js to init it.
    hljs.initHighlightingOnLoad();