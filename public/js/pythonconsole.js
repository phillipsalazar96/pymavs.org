function fullconsole()
{
  // make trinket full screen!
  var screenHeight = window.innerHeight;
  document.body.innerHTML = ' <iframe id="pyconsole" src="https://trinket.io/embed/python3/eba82e49c7" width="100%" height="' + screenHeight + '" frameborder="0" marginwidth="0" marginheight="0" allowfullscreen></iframe>';
}

fullconsole();