var images = ['a','alligator','letraA','airplane','i','iguana','a','alligator','letraA','airplane','i','iguana'];

// get images, place them in an array & randomize the order
for (var i = 0; i < 12; i++) { 
  var rand = Math.floor(Math.random() * (1200 - 900 + 1) + 900); 
  var img = 'img/' + rand + '.png';

}
randomizeImages();

// output images then hide them
var output = "<ol>"; 
for (var i = 0; i < 12; i++) { 
  output += "<li>";
  output += "<img id='imagen1' src = 'img/" + images[i] + ".png'/>";
  output += "</li>";
}
output += "</ol>";
document.getElementById("container_game").innerHTML = output;
$("img").hide();
$("li").append("<img id='imagen' src='img/espaldar.jpg'/>");

var guess1 = "";
var guess2 = "";
var count = 0;

$("li").click(function() {
  if ((count < 2) &&  ($(this).children("img").hasClass("face-up")) === false) {
    
    // increment guess count, show image, mark it as face up
    count++;
    $(this).children("img").show();
    $(this).children("#imagen").hide();
    $(this).children("img").addClass("face-up");
    
    //guess #1
    if (count === 1 ) { 
      guess1 = $(this).children("img").attr("src"); 
   $("li").children("img").removeAttr("onclick");
    }   
    
    //guess #2
    else { 
      guess2 = $(this).children("img").attr("src"); 
         // since it's the 2nd guess check for match
      if (guess1 === guess2) { 
        console.log("match");
        $("li").children("img[src='" + guess2 + "']").addClass("match");

      } 
      
      // else it's a miss
      else { 
        console.log("miss");
        setTimeout(function() {
          $("li").children("#imagen1").not(".match").hide();
          $("#imagen").not(".match").show();
          $("img").not(".match").removeClass("face-up");
          $("li").children("#imagen").show();
        }, 1000);
      }
      
      // reset
      count = 0; 
      setTimeout(function() { console.clear(); }, 60000);      
    }
  }
});

// randomize array of images
function randomizeImages(){
  Array.prototype.randomize = function()
  {
    var i = this.length, j, temp;
    while ( --i )
    {
      j = Math.floor( Math.random() * (i - 1) );
      temp = this[i];
      this[i] = this[j];
      this[j] = temp;
    }
  };
  
  images.randomize();
}