/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

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

/*
tinymce.init({
  selector: '#custom-toolbar-button',
  toolbar: 'customInsertButton customDateButton',
  toolbar_drawer: 'floating',
  setup: function (editor) {

    editor.ui.registry.addButton('customInsertButton', {
      text: 'My Button',
      onAction: function (_) {
        editor.insertContent('&nbsp;<strong>It\'s my button!</strong>&nbsp;');
      }
    });

    var toTimeHtml = function (date) {
      return '<time datetime="' + date.toString() + '">' + date.toDateString() + '</time>';
    };

    editor.ui.registry.addButton('customDateButton', {
      icon: 'insert-time',
      tooltip: 'Insert Current Date',
      disabled: true,
      onAction: function (_) {
        editor.insertContent(toTimeHtml(new Date()));
      },
      onSetup: function (buttonApi) {
        var editorEventCallback = function (eventApi) {
          buttonApi.setDisabled(eventApi.element.nodeName.toLowerCase() === 'time');
        };
        editor.on('NodeChange', editorEventCallback);

      
        return function (buttonApi) {
          editor.off('NodeChange', editorEventCallback);
        };
      }
    });
  }
});
*/
    // for highlight js to init it.
    hljs.initHighlightingOnLoad();