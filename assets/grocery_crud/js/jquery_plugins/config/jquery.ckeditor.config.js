$(function(){
	$( 'textarea.texteditor' ).ckeditor({toolbar:'Full',



			 //this code below for kcfinder           
                filebrowserBrowseUrl: '/assets/grocery_crud/texteditor/ckeditor/kcfinder/browse.php?opener=ckeditor&type=files',
                filebrowserImageBrowseUrl: '/assets/grocery_crud/texteditor/ckeditor/kcfinder/browse.php?opener=ckeditor&type=images',
                filebrowserFlashBrowseUrl: '/assets/grocery_crud/texteditor/ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash',
                filebrowserUploadUrl: '/assets/grocery_crud/texteditor/ckeditor/kcfinder/upload.php?opener=ckeditor&type=files',
                filebrowserImageUploadUrl: '/assets/grocery_crud/texteditor/ckeditor/kcfinder/upload.php?opener=ckeditor&type=images',
                filebrowserFlashUploadUrl: '/assets/grocery_crud/texteditor/ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash'
});
	$( 'textarea.mini-texteditor' ).ckeditor({toolbar:'Basic',width:700});
});