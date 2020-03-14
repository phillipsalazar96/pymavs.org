/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('jquery');




tinymce.init({
    selector: 'textarea',
      plugins: 'code',

      toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table codeButton',
      toolbar_drawer: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: '',
      height: 500,
      width: 800,

      setup: function (editor) {

        editor.ui.registry.addButton('codeButton', {
          text: 'Code Block',
          onAction: function (_) {
            editor.insertContent('&nbsp;<pre><code class="language-python">### <br/>Add code here <br/>###</code></pre>&nbsp;');
          }
        });
    
      }//EOO


    });

/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
window.myFunction = function() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

    // for highlight js to init it.
    hljs.initHighlightingOnLoad();


    document.addEventListener('DOMContentLoaded', () => {

      // Get all "navbar-burger" elements
      const $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);
    
      // Check if there are any navbar burgers
      if ($navbarBurgers.length > 0) {
    
        // Add a click event on each of them
        $navbarBurgers.forEach( el => {
          el.addEventListener('click', () => {
    
            // Get the target from the "data-target" attribute
            const target = el.dataset.target;
            const $target = document.getElementById(target);
    
            // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
            document.getElementById('navbarBasicExample').classList.toggle('is-active');
            $target.classList.toggle('is-active');
    
          });
        });
      }
    
    });