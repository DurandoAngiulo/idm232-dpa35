console.log("Script Loaded");

function initTinyMce() {
  tinymce.init({
    selector: ".js-tinymce",
    height: 500,
    menubar: false,
    plugins:
      "anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tableofcontents footnotes mergetags autocorrect",
    toolbar:
      "undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat",
    content_style:
      "body { font-family:Helvetica,Arial,sans-serif; font-size:14px }",
  });
}

initTinyMce();
