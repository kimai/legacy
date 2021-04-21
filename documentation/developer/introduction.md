# Introduction

This document gives an overview of how Kimai works. It is intended for developers (core and extensions).

## Glossary

First lets talk about the wording used in Kimai to describe things:

### Floater (or Dialog)

Those are the dragable “windows” which open as an overlay in the page. For example the preferences dialog or the dialog to add new timerecords.

### Sublists

The lists in the lower part which show users, customers, projects and events.

### Processor

PHP files which handle AJAX calls.

### Extension

Every tab you see in Kimai (like timesheet, export, admin panel) is an extension.

## Folder structure

  * **core** these are the dispatcher files for kimai (entry points for web/mobile/api/floater)
  * **css** stylesheets which are independant of any skin
  * **extensions** every subfolders is one extension, for details see the chapter below
  * **grfx** graphics which are independant of any skin (like the logo)
  * **includes** Files which are needed in almost every other file.
    * **autoconf.php** Contains the configuration given by the user during setup. (Database connection information)
    * **basics.php** Simple wrapper to include all usually necessary files like functions and database layer.
    * **db_layer_mysql.php** as an example this is the database layer when the mysql extension is used to connect to the database
    * **func.php** Database independant functions are placed here.
    * **kspi.php** “Kimai Standard Processor Initialization” is included by every processor. Some setup is done here.
  * **installer** Installer for Kimai.
  * **js** Contains javascript files for the core.
  * **languages** Every file is shown as a possible langauge (without the .php file extension) in the preferences dialog.
  * **libraries** External libraries which are used (and possibly modified) by Kimai.
    * **jQuery** Some JQuery files, like datepicker.
    * **tcpdf** Library to create PDF files using pure PHP.
  * **skins** Currently contains only one skin. Other folders will be shown as available skins. Only the styles.css is mandatory. But for the sake of readability you should split your stylesheets up into several files.
  * **templates** Templates used by the core, e.g. login forms and sublists.
  * **temporary** Used for temporary file creation.

## Login Process

Login happens at the /index.php file. This is where you land when you open the kimai folder in your browser. Both, customers and users can login through the same login mask. For conflicting names (user and customer have the same name) the customer account takes precendence.

After a successfull login the user is redirected to /core/kimai.php. Here all extensions are loaded and the main user interface is being build.

## Extensions

When you develop an extension you have to think of a name and a so called key. This key should be prepended to every javascript method, class, id, … just anything that is used within your extension to prevent conflicting names.

Every extensions needs a compile folder. This is where the smarty template engine stores the files which are passed to the client based on the template files from the templates folder. Floaters get their seperate folder under the templates folders. The folder css is obviously for CSS files which are needed by the extension. The js folder usually contains two javascript files. An _init.js and a _func.js file. The first should contain code to setup the extension. The second should only contains javascript functions which are used within this extension.

Only after an extension/tab is selected its content is being loaded. This is handled by the init.php file in the extensions folder. The processor.php file handles AJAX calls and floater.php creates those dragable windows.
