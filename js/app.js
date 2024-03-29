// Funktionen

// SmartMenus init
$(function() {
    $('#main-menu').smartmenus({
      mainMenuSubOffsetX: -1,
      subMenusSubOffsetX: 10,
      subMenusSubOffsetY: 0,    
      subIndicators: true,
    });
  });
  
  // SmartMenus mobile menu toggle button
  $(function () {
      var $mainMenuState = $('#main-menu-state');
      if ($mainMenuState.length) {
          // animate mobile menu
          $mainMenuState.change(function (e) {
              var $menu = $('#main-menu');
              if (this.checked) {
                  $menu.hide().slideDown(250, function () {
                      $menu.css('display', '');
                  });
              } else {
                  $menu.show().slideUp(250, function () {
                      $menu.css('display', '');
                  });
              }
          });
          // hide mobile menu beforeunload
          $(window).bind('beforeunload unload', function () {
              if ($mainMenuState[0].checked) {
                  $mainMenuState[0].click();
              }
          });
      }
  });
  
//
// Liefert das aktuelle Jahr für die Copyrightanzeige
//
function showCopyrightDate()
{
    var date = new Date().getFullYear();
    document.getElementById("copyrightYear").innerHTML = date;
}

// Aufruf der Funktionen
showCopyrightDate();