# Yii2 ckeditor widget

## Disclaimer
This is forked from Edofre/yii2-ckeditor to release as stable
## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

To install, either run

```
$ php composer.phar require unimodern/yii2-ckeditor "@dev"
```

or add

```
"unimodern/yii2-ckeditor": "@dev"
```

to the ```require``` section of your `composer.json` file.

## Usage

### ActiveForm usage with a model

```php
<?= $form->field($model, 'body')->widget(\unimodern\ckeditor\CKEditor::className(), [
    'editorOptions' => [
        'language' => 'nl',
    ],
]) ?>
```

### Usage without model

```php
<?= \unimodern\ckeditor\CKEditor::widget([
    'name'          => 'content',
    'editorOptions' => [
        'height'      => '400px',
    ],
]) ?>
```
