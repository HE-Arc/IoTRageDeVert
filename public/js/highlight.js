

$( document ).ready(function() {
  targetText = $(".target-text").html();

var counter = 0;
var oldText;
var text = "";
  function LoopForever() {

    //check si le texte a changé
    //var popup = $("<div class=\"side-popup\"></div>");
    if (window.getSelection) {
        if (text != window.getSelection().toString()){
        text = window.getSelection().toString();
            if (text != ""){
              //do stuff

              //$(".target-text").html(targetText);
              //console.log(targetText.replace('/<span.*>/', '//'));
              //console.log("BRUT");
              //console.log($(".target-text").html());
              //console.log("AFTER EDIT");
              //newText = $(".target-text").html().replace(/<span.*>/, ' ');
              //console.log(newText);
              $(".target-text").find("span").children().unwrap();
              console.log($(".target-text").html());
              //newText = $(".target-text").html().replace(/<\\span>/, ' ');
              //console.log(newText);
              //var spans = $('.highlight');
              //  $(".target-text").find('.highlight').unwrap();
              //$(".annotation-section").append(text);
              wrapSelectedText();
                            //console.log($(".target-text").html());
            }
        }
    } else if (document.selection && document.selection.type != "Control") {
        text = document.selection.createRange().text;
    }
  }

  var interval = self.setInterval(function(){LoopForever()},10);
});

function wrapSelectedText() {
    var selection= window.getSelection().getRangeAt(0);
    var selectedText = selection.extractContents();
    var span= document.createElement("span");
    span.className = "highlight";
    span.style.backgroundColor = "yellow";
    span.appendChild(selectedText);
    selection.insertNode(span);
}

/*
$( document ).ready(function() {
  targetText = $(".target-text").text();

  function LoopForever() {
    if (window.getSelection) {
        text = window.getSelection().toString();
    } else if (document.selection && document.selection.type != "Control") {
        text = document.selection.createRange().text;
    }
    if (text != ""){
      $(".selected-text").append(text);
      var res = targetText.match(text);
    }
  }


  var interval = self.setInterval(function(){LoopForever()},10);
});
*/
