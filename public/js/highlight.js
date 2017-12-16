$( document ).ready(function() {
  targetText = $(".target-text").html();
var counter = 0;
var oldText;


tinymce.init({
selector: '#content',
theme: 'modern',
plugins: 'print preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists textcolor wordcount imagetools  contextmenu colorpicker textpattern help',
toolbar1: 'formatselect | bold italic strikethrough forecolor backcolor | link | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  | removeformat'
//todo add quote format
});

  function LoopForever() {

  }
  var interval = self.setInterval(function(){LoopForever()},10);
});

function quote(){
  var text = "";
  if (window.getSelection) {
      if (text != window.getSelection().toString()){
      text = window.getSelection().toString();
      }
  } else if (document.selection && document.selection.type != "Control") {
      text = document.selection.createRange().text;
  }
  tinymce.activeEditor.execCommand('mceInsertContent', false, text);
}

function wrapSelectedText() {
    var selection= window.getSelection().getRangeAt(0);
    var selectedText = selection.extractContents();
    var span= document.createElement("span");
    span.className = "highlight";
    span.style.backgroundColor = "yellow";
    span.appendChild(selectedText);
    selection.insertNode(span);
}
