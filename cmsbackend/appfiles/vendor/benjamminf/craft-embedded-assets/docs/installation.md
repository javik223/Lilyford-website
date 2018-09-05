# Installation

The plugin can be installed either through the [Plugin Store](https://plugins.craftcms.com/) or through [Composer](https://packagist.org/).

### Plugin Store
Open the control panel for your website. Navigate to **Settings &rarr; Plugins** and search for **Embedded Assets**. Click **Install**.

### Composer
Run the following command in the root directory of your Craft project:
```
composer require benjamminf/craft-embedded-assets
```

## Allow JSON filetype

JSON files are disabled by default when uploading files to the asset manager. To fix this,
open your `config/general.php` file add the following setting:
```php
'extraAllowedFileExtensions' => 'json'
```
