<?php

namespace wfcreations\ckfinder\widgets;

use yii\helpers\Html;
use yii\widgets\InputWidget;
use wfcreations\ckfinder\bundles\CKFinderAsset;

class CKFinderPopup extends InputWidget {

    public $clientOptions = [
        'width' => '100%',
        'height' => '700',
    ];

    public function run() {
        CKFinderAsset::register($this->getView());

        Html::addCssClass($this->options, 'form-control');
        if ($this->hasModel()) {
            echo Html::beginTag('div', ['class' => 'input-group']);
            echo Html::activeTextInput($this->model, $this->attribute, $this->options);
        } else {
            echo Html::textInput($this->name, $this->value, $this->options);
        }

        echo Html::endTag('button');
        echo Html::endTag('span');
        echo Html::endTag('div');

        return implode("\n", [
            Html::beginTag('span', ['class' => 'input-group-btn']),
            Html::beginTag('button'),
        ]);
    }

}
