<?php
namespace Craft;

class MessageFieldType extends BaseFieldType {
  private $options = array(
    'output' => array(
      'markdown' => 'Markdown',
      'html' => 'HTML'
    )
  );

  public function getName() {
      return Craft::t('Message');
  }

  public function defineContentAttribute() {
    return array(AttributeType::String, 'column' => ColumnType::Text);
  }

  protected function defineSettings() {
    return array(
      'messages' => array(AttributeType::String),
      'output' => array(AttributeType::Mixed, 'default' => 'markdown')
    );
  }

  public function getSettingsHtml() {
    return craft()->templates->render('message/settings', array(
      'options' => $this->options,
      'settings' => $this->getSettings()
    ));
  }

  public function getInputHtml($name, $value) {
    return craft()->templates->render('message/input', array(
      'name'  => $name,
      'value' => $value,
      'settings' => $this->getSettings()
    ));
  }
}