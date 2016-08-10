<?php
namespace Craft;

class MessagePlugin extends BasePlugin {
  public function getName() {
    return Craft::t('Message');
  }

  public function getVersion() {
    return '0.1';
  }

  public function getSchemaVersion() {
    return '0.1';
  }
  
  public function getDescription() {
    return 'Add HTML or Markup notes directly into the CMS alongside a field.';
  }

  public function getDeveloper() {
    return 'Yello Studio';
  }

  public function getDeveloperUrl() {
    return 'http://yellostudio.co.uk';
  }

  public function getDocumentationUrl() {
    return 'https://github.com/marknotton/craft-plugin-message';
  }

  public function getReleaseFeedUrl() {
    return 'https://raw.githubusercontent.com/marknotton/craft-plugin-message/master/message/releases.json';
  }
}
