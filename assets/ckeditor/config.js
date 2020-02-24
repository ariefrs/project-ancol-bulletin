/**
 * @license Copyright (c) 2003-2016, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
	config.toolbarGroups = [
		{ name: 'clipboard',   groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing',     groups: [ 'find', 'selection', 'spellchecker' ] },
		{ name: 'links' },
		{ name: 'insert' },
		{ name: 'forms' },
		{ name: 'tools' },
		{ name: 'document',	   groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'others' },
		'/',
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph',   groups: [ 'list', 'indent', 'blocks', 'align', 'bidi' ] },
		{ name: 'styles' },
		{ name: 'colors' },
		{ name: 'about' }
	];

	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	config.removeButtons = 'Underline,Subscript,Superscript';

	// Set the most common block elements.
	config.format_tags = 'p;h1;h2;h3;pre';

	// Simplify the dialog windows.
	config.removeDialogTabs = 'image:advanced;link:advanced';
	config.language = 'id';
	config.uiColor = '0ea9e2';
	config.height = 300;
	config.toolbarCanCollapse = true;
	config.tabSpaces = 4;
	config.extraPlugins = 'indent';
	config.extraPlugins = 'textindent';
	config.extraPlugins = 'indentblock';
	config.extraPlugins = 'indentlist';

	/* Integration With CKFinder 
	config.filebrowserBrowseUrl = '/dev/aplikasi/assets/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/dev/aplikasi/assets/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = '/dev/aplikasi/assets/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = 'dev/aplikasi/assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';
	config.filebrowserImageUploadUrl = 'dev/aplikasi/assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = 'dev/aplikasi/assets/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
	*/
	//Integrated with Responsive File Manager
	config.filebrowserBrowseUrl = '/ancol/assets/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
	config.filebrowserUploadUrl = '/ancol/assets/filemanager/dialog.php?type=2&editor=ckeditor&fldr=',
	config.filebrowserImageBrowseUrl = '/ancol/assets/filemanager/dialog.php?type=1&editor=ckeditor&fldr='
};
