<?php

namespace wfcreations\ckfinder\widgets;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\widgets\InputWidget;
use wfcreations\ckfinder\bundles\CKFinderAsset;
use wfcreations\ckfinder\events\CKFinderEvents;
use yii\web\JsExpression;
use yii\bootstrap\Button;

class CKFinderInput extends InputWidget {

    const TYPE_POPUP = 'popup';
    const TYPE_MODAL = 'modal';

    public $type = self::TYPE_POPUP;
    public $clientEvents = [];
    public $buttonLabel = "Select...";
    public $buttonOptions = ['class' => 'btn btn-default'];
    public $clientOptions = [
        'chooseFiles' => true,
        'width' => 800,
        'height' => 600,
    ];

    protected function registerCKFInderEvents() {
        if (!empty($this->clientEvents)) {
            $js = [];
            foreach ($this->clientEvents as $event => $handler) {
                $js[] = "finder.on('$event', $handler);";
            }
            return implode("\n", $js);
        }
    }

    public function init() {
        parent::init();
        if (!isset($this->clientEvents[CKFinderEvents::EVENT_FILES_CHOOSE])) {
            $this->clientEvents[CKFinderEvents::EVENT_FILES_CHOOSE] = new JsExpression("function(evt) {
                var file = evt.data.files.first();
                var output = document.getElementById('{$this->options['id']}');
                output.value = file.getUrl();
            }");
        }
        if (!isset($this->clientEvents[CKFinderEvents::EVENT_FILE_CHOOSE_RESIZEDIMAGE])) {
            $this->clientEvents[CKFinderEvents::EVENT_FILE_CHOOSE_RESIZEDIMAGE] = new JsExpression("function(evt) {
                var output = document.getElementById('{$this->options['id']}');
		output.value = evt.data.scaledUrl;
            }");
        }
    }

    public function run() {
        if (!empty($this->clientEvents)) {
            $events = $this->registerCKFInderEvents();
            $this->clientOptions['onInit'] = new JsExpression("function(finder){ {$events}}");
        }
        $options = empty($this->clientOptions) ? '' : Json::encode($this->clientOptions);
        $this->getView()->registerJs("$('#{$this->options['id']}-popup').on('click', function(){ CKFinder.$this->type($options); });");
        CKFinderAsset::register($this->getView());
        Html::addCssClass($this->options, 'form-control');
        $input = $this->hasModel() ? Html::activeTextInput($this->model, $this->attribute, $this->options) : Html::textInput($this->name, $this->value, $this->options);
        return implode("\n", [
            Html::beginTag('div', ['class' => 'input-group']),
            $input,
            Html::beginTag('span', ['class' => 'input-group-btn']),
            Button::widget([
                'id' => $this->options['id'] . '-popup',
                'label' => $this->buttonLabel,
                'options' => $this->buttonOptions,
            ]),
            Html::endTag('span'),
            Html::endTag('div'),
        ]);
    }

}
