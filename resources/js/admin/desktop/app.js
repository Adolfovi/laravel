const ClassicEditor = require( '@ckeditor/ckeditor5-build-classic' );
ClassicEditor
	.create( document.querySelector( '.editor' ) )
	.then( editor => {
		window.editor = editor;
	} )
	.catch( error => {
		console.error( 'There was a problem initializing the editor.', error );
	} );


document.getElementById("nav-icon3").addEventListener("click", function () {
    document.getElementById("nav-icon3").classList.toggle("open");
});
