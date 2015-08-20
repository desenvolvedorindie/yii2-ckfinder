<?php

namespace wfcreations\ckfinder\events;

class CKFinderEvents {

    const EVENT_APP_ERROR = 'app:error';
    const EVENT_APP_READY = 'app:ready';
    const EVENT_APP_START = 'app:start';
    const EVENT_COMMAND_AFTER = 'command:after';
    const EVENT_COMMAND_AFTER_NAME = 'command:after:NAME';
    const EVENT_COMMAND_BEFORE = 'command:before';
    const EVENT_COMMAND_BEFORE_NAME = 'command:before:NAME';
    const EVENT_COMMAND_ERROR = 'command:error';
    const EVENT_COMMAND_ERROR_NAME = 'command:error:NAME';
    const EVENT_COMMAND_OK_NAME = 'command:ok:NAME';
    const EVENT_CONTEXTMENU = 'contextMenu';
    const EVENT_CONTEXTMENU_NAME = 'contextMenu:NAME';
    const EVENT_CONTEXTMENU_FILE = 'contextMenu:file';
    const EVENT_CONTEXTMENU_FOLDER = 'contextMenu:folder';
    const EVENT_CREATERESOURCE_AFTER = 'createResources:after';
    const EVENT_CREATERESOURCE_BEFORE = 'createResources:before';
    const EVENT_DIALOG_NAME_BUTTON = 'dialog:NAME:BUTTON';
    const EVENT_EDITIMAGE_RENDERPREVIEW = 'editImage:renderPreview';
    const EVENT_FILE_CHOOSE_RESIZEDIMAGE = 'file:choose:resizedImage';
    const EVENT_FILE_DBLCLICK = 'file:dblclick';
    const EVENT_FILE_DBLTAP = 'file:dbltap';
    const EVENT_FILE_KEYDOWN = 'file:keydown';
    const EVENT_FILE_PREVIEW = 'file:preview';
    const EVENT_FILES_CHOOSE = 'files:choose';
    const EVENT_FILES_DELETED = 'files:deleted';
    const EVENT_FILES_SELECTED = 'files:selected';
    const EVENT_FOLDER_DELETED = 'folder:deleted';
    const EVENT_FOLDER_DROP = 'folder:drop';
    const EVENT_FOLDER_EXPAND = 'folder:expand';
    const EVENT_FOLDER_GETFILES_AFTER = 'folder:getFiles:after';
    const EVENT_FOLDER_GETFILES_BEFORE = 'folder:getFiles:before';
    const EVENT_FOLDER_KEYDOWN = 'folder:keydown';
    const EVENT_FOLDER_SELECTED = 'folder:selected';
    const EVENT_KEYDOWN_NUMBER = 'keydown:NUMBER';
    const EVENT_KEYUP_NUMBER = 'keyup:NUMBER';
    const EVENT_MAXIMIZED = 'maximized';
    const EVENT_MINIZED = 'minimized';
    const EVENT_PAGE_CREATE_NAME = 'page:create:NAME';
    const EVENT_PAGE_DESTROY = 'page:destroy';
    const EVENT_PAGE_DESTROY_NAME = 'page:destroy:NAME';
    const EVENT_PAGE_HIDE_NAME = 'page:hide:NAME';
    const EVENT_PAGE_SHOW = 'page:show';
    const EVENT_PAGE_SHOW_NAME = 'page:show:NAME';
    const EVENT_PANEL_CLOSE_NAME = 'panel:close:NAME';
    const EVENT_PANEL_DESTROY_NAME = 'panel:destroy:NAME';
    const EVENT_PANEL_OPEN_NAME = 'panel:open:NAME';
    const EVENT_PLUGIN_ALLREADY = 'plugin:allReady';
    const EVENT_PLUGIN_ERROR = 'plugin:error';
    const EVENT_PLUGIN_READY = 'plugin:ready';
    const EVENT_RESOURCE_SHOW = 'resources:show';
    const EVENT_SETTINGS_CHANGE_GROUP = 'settings:change:GROUP';
    const EVENT_SETTINGS_CHANGE_GROUP_NAME = 'settings:change:GROUP:NAME';
    const EVENT_STATUSBAR_CREATE = 'statusBar:create';
    const EVENT_TEMPLATE = 'template';
    const EVENT_TEMPLATE_NAME = 'template:NAME';
    const EVENT_TOOLBAR_CREATE = 'toolbar:create';
    const EVENT_TOOLBAR_DESTROY = 'toolbar:destroy';
    const EVENT_TOOLBAR_RESET_MAIN_FILE = 'toolbar:reset:Main:file';
    const EVENT_TOOLBAR_RESET_MAIN_FILES = 'toolbar:reset:Main:files';
    const EVENT_TOOLBAR_RESET_MAIN_FOLDER = 'toolbar:reset:Main:folder';
    const EVENT_TOOLBAR_RESET_MAIN_RESOURCES = 'toolbar:reset:Main:resources';
    const EVENT_TOOLBAR_RESET_NAME = 'toolbar:reset:NAME';
    const EVENT_TOOLBAR_RESET_NAME_EVENT = 'toolbar:reset:NAME:EVENT';
    const EVENT_UI_BLUR = 'ui:blur';
    const EVENT_UI_FOCUS = 'ui:focus';
    const EVENT_UI_RESIZE = 'ui:resize';
    const EVENT_UI_SWIPELEFT = 'ui:swipeleft';
    const EVENT_UI_SWIPERIGHT = 'ui:swiperight';
    const EVENT_VIEWS_NAME = 'view:NAME';

}
