<!DOCTYPE html>
<html>

<head>
  <title>studeersite - oefeningen nazeggen</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <!-- <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" /> -->
  <link rel="stylesheet" href="css/ui-lightness/jquery-ui-1.9.0.custom.css" />
  <link rel="stylesheet" href="css/default-jquery-layout.css" />
  <link rel="stylesheet" href="css/jplayer.css" />
  <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
  <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
  <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
  <script src="js/jquery.layout-latest.js"></script>
  <!--  ui.draggable.js en ui.effects.js meenemen voor evt sliding animatie of resize animatie-->
  <style type="text/css">
  body{
    font-family: Trebuchet MS,Tahoma,Verdana,Arial,sans-serif;
    }
    </style>
    <script>
    $(document).ready(function () {
    var myLayout = $('body').layout({                           
              closable:          false  
            ,  resizable:        false  
            ,  slidable:         false  
            ,  north__size:      150
            ,  west__size:       250            ,  south__size:      40
            ,  east__size:       200    
            ,  west__showOverflowOnHover:  true
            ,  west__closable:             true          
            ,  west__resizable:            true          
            ,  west__togglerLength_open:    20
            ,  west__togglerTip_closed:          "Menu"
            ,  west__togglerAlign_open:           "bottom" 
            ,  west__togglerAlign_closed:         "bottom" 
             });
    var select = $( "#oefeningen" );
    var slider = $( "<div id='slider' width='400px'></div>" ).insertAfter( select ).slider({
        min: 1,
        max: 24,
        range: "min",
        value: select[ 0 ].selectedIndex + 1,
        slide: function( event, ui ) {
          select[ 0 ].selectedIndex = ui.value - 1;
          updateTekstSound();
        }
      });
    function toggleTekst() {
       $( "#tekst" ).toggle( "highlight" );
       }

     function updateTekstSound() {
      $("#tekst").load("tekst/a"+select[0].selectedIndex+".html");
       }      
      $( "#button" ).click(function() {
            toggleTekst();
            return false;
       });
       
    $( "#leftmenu" ).menu({
            select: function( event, ui ) {
                var link = ui.item.children( "a:first" );
                if ( link.attr( "target" ) || event.metaKey || event.shiftKey || event.ctrlKey ) {
                    return;
                }
        location.href = link.attr( "href" );
            }
        });
    
    $( "#tekst").load("tekst/a"+ select[ 0 ].selectedIndex+".html");
    $( '[title]' ).tooltip({
            show: {
                effect: "slideDown",
                delay: 250,
        my: "right bottom",
        at: "right bottom"
        //collision:  "none",
            }
      }); 
    $( "#oefeningen" ).change(function() {
      slider.slider( "value", this.selectedIndex + 1 );
      updateTekstSound();
      });


   });
  </script>
</head>

<body>
  <div id="center" class="ui-layout-center">

   <h3> Zinnen oplezen en aanvullen 
   <img src="css/ui-lightness/images/question_mark_ui_lightness.gif" id="Titel" alt="?" title="'Zinnen oplezen en aanvullen' is een onderdeel van het nieuwe inburgeringsexamen<br/> buitenland dat per 1 april 2011 is ingegaan.<br/><br/>Je vindt hier oefeningen die een aantal rijen met zinnen laten zien. <br/>In iedere zin ontbreekt er een woord. <br/>Tussen haakjes staan drie woorden waaruit je kunt kiezen om de zin compleet te maken. <br/>Kies het juiste woord en lees dan de zin hardop voor.<br/><br/>De antwoorden kun je zien, door met de muis over de vraag te bewegen:<br/>Het is goed als iemand je begeleidt met deze oefeningen, <br/>omdat je hier geen geluidsfragmenten hebt, om te horen of je iets goed hebt uitgesproken."/>
   </h3>

     <div style="width:668px">
      <form id="keuzeOefeningen" >
        <label for="oefeningen">Oefening</label>
        <select name="oefeningen" id="oefeningen">
          <option>1</option>
          <option>2</option>          <option>3</option>
          <option>4</option>
          <option>5</option>
          <option>6 </option>
          <option>7 </option>
          <option>8 </option>
          <option>9 </option>
          <option>10</option>
          <option>11</option>
          <option>12</option>
          <option>13</option>
          <option>14</option>
          <option>15</option>
          <option>16</option>
          <option>17</option>
          <option>18</option>
          <option>19</option>
          <option>20</option>
          <option>21</option>
          <option>22</option>
          <option>23</option>
          <option>24</option>
        </select>
      </form>
      </div>
   
    <div id="toggleTekst" style="width:668px" >
	<!-- style="display:none" ?-->
    <button  id="button" title="Toon en verberg tekst." class="ui-state-default ui-corner-all">
	^
	</button>
    <!-- <a href="#" id="button" class="ui-state-default ui-corner-all">...</a>-->
    </div>
    <div id="tekst" style="width:668px" class="ui-widget-content ui-corner-all">
          <h3 class="ui-widget-header ui-corner-all">Oefening</h3>
          <div  style="color: grey; font-family: arial; font-size: 10pt;">
            Etiam libero neque, luctus a, eleifend nec, semper at, lorem. Sed pede. Nulla lorem metus, adipiscing ut, luctus sed, hendrerit vitae, mi.
          </div>
        </div>
  </div>
  <div id="north"  class="ui-layout-north" ><a href="http://www.studeersite.nl"> <img  src="css/images/professor.png" class="image-header" alt="professorhat" />  </a><h1>Studeersite.nl</h1><h4>Oefeningen in de Nederlandse taal</h4></div>
  <div id="east"   class="ui-layout-east">  <script type="text/javascript"><!--
google_ad_client = "ca-pub-0997941121705728";
/* Rechts */
google_ad_slot = "9252001755";
google_ad_width = 120;
google_ad_height = 600;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script> </div>
  <div id="south"  class="ui-layout-south">
  <p style="text-align:center;font-size:8pt;">Deel deze website: <a title="Add to Facebook" href="http://www.facebook.com/sharer.php?u=http://www.studeersite.nl" rel="nofollow" target="_blank">Facebook</a> | <a title="Add to Digg" href="http://digg.com/submit?phase=2&amp;url=http%3A%2F%2Fwww.studeersite.nl&amp;title=Deel%20deze%20website" rel="nofollow" target="_blank">Digg</a> | <a title="Add to Del.icio.us" href="http://del.icio.us/post?url=http%3A%2F%2Fwww.studeersite.nl&amp;title=Deel%20deze%20website" rel="nofollow" target="_blank">Del.icio.us</a> | <a title="Add to Stumbleupon" href="http://www.stumbleupon.com/submit?url=http%3A%2F%2Fwww.studeersite.nl&amp;title=Deel%20deze%20website" rel="nofollow" target="_blank">Stumbleupon</a> | <a title="Add to Reddit" href="http://reddit.com/submit?url=http%3A%2F%2Fwww.studeersite.nl&amp;title=Deel%20deze%20website" rel="nofollow" target="_blank">Reddit</a> | <a title="Add to Blinklist" href="http://www.blinklist.com/index.php?Action=Blink/addblink.php&amp;Description=&amp;Url=http%3A%2F%2Fwww.studeersite.nl&amp;Title=Deel%20deze%20website" rel="nofollow" target="_blank">Blinklist</a> | <a title="Add to Twitter" href="http://twitter.com/home/?status=Deel%20deze%20website+%40+http%3A%2F%2Fwww.studeersite.nl" rel="nofollow" target="_blank">Twitter</a> | <a title="Add to Technorati" href="http://www.technorati.com/faves?add=http://www.studeersite.nl" rel="nofollow" target="_blank">Technorati</a> | <a title="Add to Yahoo Buzz" href="http://buzz.yahoo.com/buzz?targetUrl=http%3A%2F%2Fwww.studeersite.nl&amp;headline=Deel%20deze%20website" rel="nofollow" target="_blank">Yahoo Buzz</a> | <a title="Add to Newsvine" href="http://www.newsvine.com/_wine/save?u=http%3A%2F%2Fwww.studeersite.nl&amp;h=Deel%20deze%20website" rel="nofollow" target="_blank">Newsvine</a></p></div>
  <div  id="west"  class="ui-layout-west">
  <?php include 'menu.html'; ?>
  </div>
</body>
</html>