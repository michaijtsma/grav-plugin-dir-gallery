# Directory Galleries Plugin

The **Directory Gallery** Plugin is an extension for [Grav CMS](http://github.com/getgrav/grav). It adds shortcodes for displaying image galleries loaded from images in a directory

## Installation

Installing the Directory Galleries plugin can be done in one of three ways: The GPM (Grav Package Manager) installation method lets you quickly install the plugin with a simple terminal command, the manual method lets you do so via a zip file, and the admin method lets you do so via the Admin Plugin.

### GPM Installation (Preferred)

To install the plugin via the [GPM](http://learn.getgrav.org/advanced/grav-gpm), through your system's terminal (also called the command line), navigate to the root of your Grav-installation, and enter:

    bin/gpm install dir-gallery

This will install the Auto Galleries plugin into your `/user/plugins`-directory within Grav. Its files can be found under `/your/site/grav/user/plugins/dir-gallery`.

### Manual Installation

To install the plugin manually, download the zip-version of this repository and unzip it under `/your/site/grav/user/plugins`. Then rename the folder to `dir-gallery`. You can find these files on [GitHub](https://github.com/michaijtsma/grav-plugin-dir-gallery) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/dir-gallery
	
> NOTE: This plugin is a modular component for Grav which may require other plugins to operate, please see its [blueprints.yaml-file on GitHub](https://github.com/michaijtsma/grav-plugin-dir-gallery/blob/master/blueprints.yaml).

### Admin Plugin

If you use the Admin Plugin, you can install the plugin directly by browsing the `Plugins`-menu and clicking on the `Add` button.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/dir-gallery/dir-gallery.yaml` to `user/config/plugins/dir-gallery.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

Note that if you use the Admin Plugin, a file with your configuration named dir-gallery.yaml will be saved in the `user/config/plugins/`-folder once the configuration is saved in the Admin.

## Usage

After installing the plugin use the `dir-gallery` shortcode to place an image gallery on your page:

```html
[dir-gallery directory="your-folder-name" image-size="35" style="grid"]
```

```html
[dir-gallery directory="your-folder-name" image-size="20" style="masonry"]
```
