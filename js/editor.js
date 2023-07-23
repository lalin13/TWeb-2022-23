tinymce.init({
    selector: '#myTextarea',
    height: 500,
  
    toolbar: 'undo redo | formatselect | ' +
      'bold italic backcolor | alignleft aligncenter ' +
      'alignright alignjustify | bullist numlist outdent indent | ' +
      'removeformat',
  
    menubar: 'favs file edit view insert format tools table help',
    content_css: '../css/style.css'
  });
   
