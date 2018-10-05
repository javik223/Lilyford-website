<?php

$vendorDir = dirname(__DIR__);

return array (
  'craftcms/redactor' => 
  array (
    'class' => 'craft\\redactor\\Plugin',
    'basePath' => $vendorDir . '/craftcms/redactor/src',
    'handle' => 'redactor',
    'aliases' => 
    array (
      '@craft/redactor' => $vendorDir . '/craftcms/redactor/src',
    ),
    'name' => 'Redactor',
    'version' => '2.1.6',
    'description' => 'Edit rich text content in Craft CMS using Redactor by Imperavi.',
    'developer' => 'Pixel & Tonic',
    'developerUrl' => 'https://pixelandtonic.com/',
    'developerEmail' => 'support@craftcms.com',
    'documentationUrl' => 'https://github.com/craftcms/redactor',
  ),
  'benjamminf/craft-embedded-assets' => 
  array (
    'class' => 'benf\\embeddedassets\\Plugin',
    'basePath' => $vendorDir . '/benjamminf/craft-embedded-assets/src',
    'handle' => 'embeddedassets',
    'aliases' => 
    array (
      '@benf/embeddedassets' => $vendorDir . '/benjamminf/craft-embedded-assets/src',
    ),
    'name' => 'Embedded Assets',
    'version' => '1.0.2',
    'schemaVersion' => '1.0.0',
    'description' => 'Manage YouTube videos, Instagram photos, Twitter posts and more as first class assets',
    'developer' => 'Benjamin Fleming',
    'developerUrl' => 'https://github.com/benjamminf',
    'documentationUrl' => 'https://github.com/benjamminf/craft-embedded-assets/wiki',
    'changelogUrl' => 'https://github.com/benjamminf/craft-embedded-assets/blob/master/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/benjamminf/craft-embedded-assets/archive/master.zip',
  ),
  'aelvan/imager' => 
  array (
    'class' => 'aelvan\\imager\\Imager',
    'basePath' => $vendorDir . '/aelvan/imager/src',
    'handle' => 'imager',
    'aliases' => 
    array (
      '@aelvan/imager' => $vendorDir . '/aelvan/imager/src',
    ),
    'name' => 'Imager',
    'version' => 'v2.1.0',
    'schemaVersion' => '2.0.0',
    'description' => 'Image transforms gone wild',
    'developer' => 'André Elvan',
    'developerUrl' => 'https://www.vaersaagod.no',
    'documentationUrl' => 'https://github.com/aelvan/Imager-Craft/blob/craft3/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/aelvan/Imager-Craft/craft3/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
    'components' => 
    array (
    ),
  ),
  'topshelfcraft/wordsmith' => 
  array (
    'class' => 'topshelfcraft\\wordsmith\\Wordsmith',
    'basePath' => $vendorDir . '/topshelfcraft/wordsmith/src',
    'handle' => 'wordsmith',
    'aliases' => 
    array (
      '@topshelfcraft/wordsmith' => $vendorDir . '/topshelfcraft/wordsmith/src',
    ),
    'name' => 'Wordsmith',
    'version' => '3.0.2',
    'schemaVersion' => '0.0.0.0',
    'description' => '...because you have the best words.',
    'developer' => 'Michael Rog',
    'developerUrl' => 'https://topshelfcraft.com',
    'documentationUrl' => 'https://wordsmith.docs.topshelfcraft.com/',
    'changelogUrl' => 'https://raw.githubusercontent.com/topshelfcraft/wordsmith/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
    'components' => 
    array (
      'emoji' => 'topshelfcraft\\wordsmith\\services\\EmojiService',
      'smith' => 'topshelfcraft\\wordsmith\\services\\WordsmithService',
      'typography' => 'topshelfcraft\\wordsmith\\services\\TypographyService',
    ),
  ),
  'studioespresso/craft-navigate' => 
  array (
    'class' => 'studioespresso\\navigate\\Navigate',
    'basePath' => $vendorDir . '/studioespresso/craft-navigate/src',
    'handle' => 'navigate',
    'aliases' => 
    array (
      '@studioespresso/navigate' => $vendorDir . '/studioespresso/craft-navigate/src',
    ),
    'name' => 'Navigate',
    'version' => '1.1.3',
    'description' => 'Navigation plugin for Craft 3',
    'developer' => 'Studio Espresso',
    'developerUrl' => 'https://studioespresso.co',
    'documentationUrl' => 'https://github.com/studioespresso/craft3-navigate/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/studioespresso/craft3-navigate/master/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
    'components' => 
    array (
      'navigate' => 'studioespresso\\navigate\\services\\NavigateService',
      'nodes' => 'studioespresso\\navigate\\services\\NodesService',
    ),
  ),
  'olivestudio/craft-olivemenus' => 
  array (
    'class' => 'olivestudio\\olivemenus\\Olivemenus',
    'basePath' => $vendorDir . '/olivestudio/craft-olivemenus/src',
    'handle' => 'olivemenus',
    'aliases' => 
    array (
      '@olivestudio/olivemenus' => $vendorDir . '/olivestudio/craft-olivemenus/src',
    ),
    'name' => 'Olivemenus',
    'version' => '1.0.0',
    'description' => 'A powerful menus plugin for Craft 3 built for the need of simplicity and flexibility',
    'developer' => 'Olive Studio',
    'developerUrl' => 'https://www.olivestudio.net/',
    'documentationUrl' => 'https://github.com/OliveStudio/olivemenus/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/OliveStudio/olivemenus/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => true,
    'components' => 
    array (
      'olivemenusService' => 'olivestudio\\olivemenus\\services\\OlivemenusService',
    ),
  ),
  'xpertbot/craft-wheelform' => 
  array (
    'class' => 'wheelform\\Plugin',
    'basePath' => $vendorDir . '/xpertbot/craft-wheelform/src',
    'handle' => 'wheelform',
    'aliases' => 
    array (
      '@wheelform' => $vendorDir . '/xpertbot/craft-wheelform/src',
    ),
    'name' => 'Wheel Form',
    'version' => '1.12.0',
    'description' => 'Craft CMS 3 Form administrator with Database integration',
    'developer' => 'Wheel Interactive',
    'developerUrl' => 'https://wheelinteractive.com',
    'documentationUrl' => 'https://github.com/xpertbot/craft-wheelform/blob/master/README.md',
    'changelogUrl' => 'https://github.com/xpertbot/craft-wheelform/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
    'components' => 
    array (
      'mailer' => 'Wheelform\\Mailer',
    ),
  ),
  'carlcs/craft-redactorcustomstyles' => 
  array (
    'class' => 'carlcs\\redactorcustomstyles\\Plugin',
    'basePath' => $vendorDir . '/carlcs/craft-redactorcustomstyles/src',
    'handle' => 'redactor-custom-styles',
    'aliases' => 
    array (
      '@carlcs/redactorcustomstyles' => $vendorDir . '/carlcs/craft-redactorcustomstyles/src',
    ),
    'name' => 'Redactor Custom Styles',
    'version' => '3.0.2',
    'description' => 'Redactor Custom Styles plugin for Craft CMS',
    'developer' => 'carlcs',
    'developerUrl' => 'https://github.com/carlcs',
    'documentationUrl' => 'https://github.com/carlcs/craft-redactorcustomstyles',
    'changelogUrl' => 'https://github.com/carlcs/craft-redactorcustomstyles/raw/v3/CHANGELOG.md',
    'downloadUrl' => 'https://github.com/carlcs/craft-redactorcustomstyles/archive/v3.zip',
  ),
  'verbb/redactor-tweaks' => 
  array (
    'class' => 'verbb\\redactortweaks\\RedactorTweaks',
    'basePath' => $vendorDir . '/verbb/redactor-tweaks/src',
    'handle' => 'redactor-tweaks',
    'aliases' => 
    array (
      '@verbb/redactortweaks' => $vendorDir . '/verbb/redactor-tweaks/src',
    ),
    'name' => 'Redactor Tweaks',
    'version' => '2.0.2',
    'schemaVersion' => '1.0.0',
    'description' => 'A small Craft CMS that provides some tweaks to the default Redactor II Rich Text fieldtype.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/redactor-tweaks',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/redactor-tweaks/craft-3/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'verbb/field-manager' => 
  array (
    'class' => 'verbb\\fieldmanager\\FieldManager',
    'basePath' => $vendorDir . '/verbb/field-manager/src',
    'handle' => 'field-manager',
    'aliases' => 
    array (
      '@verbb/fieldmanager' => $vendorDir . '/verbb/field-manager/src',
    ),
    'name' => 'Field Manager',
    'version' => '2.0.2',
    'schemaVersion' => '1.0.0',
    'description' => 'Manage your fields and field groups with ease with simple field or group cloning and quicker overall management.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/field-manager',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/field-manager/craft-3/CHANGELOG.md',
    'hasCpSettings' => true,
    'hasCpSection' => true,
  ),
  'rias/craft-colour-swatches' => 
  array (
    'class' => 'rias\\colourswatches\\ColourSwatches',
    'basePath' => $vendorDir . '/rias/craft-colour-swatches/src',
    'handle' => 'colour-swatches',
    'aliases' => 
    array (
      '@rias/colourswatches' => $vendorDir . '/rias/craft-colour-swatches/src',
    ),
    'name' => 'Colour Swatches',
    'version' => '1.1.4',
    'schemaVersion' => '1.0.0',
    'description' => 'Let clients choose from a predefined set of colours.',
    'developer' => 'Rias',
    'developerUrl' => 'https://rias.be',
    'documentationUrl' => 'https://github.com/Rias500/craft-colour-swatches/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/Rias500/craft-colour-swatches/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'ether/seo' => 
  array (
    'class' => 'ether\\seo\\Seo',
    'basePath' => $vendorDir . '/ether/seo/src',
    'handle' => 'seo',
    'aliases' => 
    array (
      '@ether/seo' => $vendorDir . '/ether/seo/src',
    ),
    'name' => 'SEO',
    'version' => '3.4.4',
    'description' => 'SEO utilities including a unique field type, sitemap, & redirect manager',
    'developer' => 'Ether Creative',
    'developerUrl' => 'https://ethercreative.co.uk',
    'documentationUrl' => 'https://github.com/ethercreative/seo/blob/v3/README.md',
  ),
  'mikestecker/craft-videoembedder' => 
  array (
    'class' => 'mikestecker\\videoembedder\\VideoEmbedder',
    'basePath' => $vendorDir . '/mikestecker/craft-videoembedder/src',
    'handle' => 'video-embedder',
    'aliases' => 
    array (
      '@mikestecker/videoembedder' => $vendorDir . '/mikestecker/craft-videoembedder/src',
    ),
    'name' => 'Video Embedder',
    'version' => '1.0.9',
    'schemaVersion' => '1.0.0',
    'description' => 'Craft plugin to generate an embed URL from a YouTube or Vimeo URL.',
    'developer' => 'Mike Stecker',
    'developerUrl' => 'http://github.com/mikestecker',
    'documentationUrl' => 'https://github.com/mikestecker/craft-videoembedder/blob/v1/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/mikestecker/craft-videoembedder/v1/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
  'superbig/craft3-http2serverpush' => 
  array (
    'class' => 'superbig\\http2serverpush\\Http2ServerPush',
    'basePath' => $vendorDir . '/superbig/craft3-http2serverpush/src',
    'handle' => 'http2-server-push',
    'aliases' => 
    array (
      '@superbig/http2serverpush' => $vendorDir . '/superbig/craft3-http2serverpush/src',
    ),
    'name' => 'HTTP2 Server Push',
    'version' => '1.0.0',
    'schemaVersion' => '1.0.0',
    'description' => 'Automatically add HTTP2 Link headers for CSS, JS and image assets.',
    'developer' => 'Superbig',
    'developerUrl' => 'https://superbig.co',
    'documentationUrl' => 'https://github.com/sjelfull/craft3-http2serverpush/blob/master/README.md',
    'changelogUrl' => 'https://raw.githubusercontent.com/sjelfull/craft3-http2serverpush/master/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
    'components' => 
    array (
      'http2ServerPushService' => 'superbig\\http2serverpush\\services\\Http2ServerPushService',
    ),
  ),
  'verbb/super-table' => 
  array (
    'class' => 'verbb\\supertable\\SuperTable',
    'basePath' => $vendorDir . '/verbb/super-table/src',
    'handle' => 'super-table',
    'aliases' => 
    array (
      '@verbb/supertable' => $vendorDir . '/verbb/super-table/src',
    ),
    'name' => 'Super Table',
    'version' => '2.0.9',
    'schemaVersion' => '2.0.4',
    'description' => 'Super-charge your Craft workflow with Super Table. Use it to group fields together or build complex Matrix-in-Matrix solutions.',
    'developer' => 'Verbb',
    'developerUrl' => 'https://verbb.io',
    'developerEmail' => 'support@verbb.io',
    'documentationUrl' => 'https://github.com/verbb/super-table',
    'changelogUrl' => 'https://raw.githubusercontent.com/verbb/super-table/craft-3/CHANGELOG.md',
    'hasCpSettings' => false,
    'hasCpSection' => false,
  ),
);
