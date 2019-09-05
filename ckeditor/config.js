/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	
config.filebrowserBrowseUrl = base_url+'ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
   config.filebrowserImageBrowseUrl = base_url+'ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
   config.filebrowserFlashBrowseUrl = base_url+'ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
   config.filebrowserUploadUrl = base_url+'ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
   config.filebrowserImageUploadUrl = base_url+'ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
   config.filebrowserFlashUploadUrl = base_url+'ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';

};
