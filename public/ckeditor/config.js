/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'zh-cn';
	config.uiColor = '#FFFFFF';
    config.height = 450;
    config.toolbarCanCollapse = true;  //可是收缩
    config.toolbarStartupExpanded = false; //默认收缩状态
    config.disableNativeSpellChecker = false ;//提速，禁用拼写检查
    config.scayt_autoStartup = false;//提速，禁用拼写检查
    config.baseFloatZIndex = 10000;
    config.removePlugins='elementspath';
};
