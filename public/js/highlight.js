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
