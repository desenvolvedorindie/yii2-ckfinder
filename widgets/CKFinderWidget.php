<?php

namespace wfcreations\ckfinder\widgets;

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\bootstrap\Widget;

class CKFinderWidget extends Widget {

    public $clientOptions = [
        'width' => '100%',
        'height' => '700',
    ];

    public function run() {
        $tag = ArrayHelper::remove($this->options, 'tag', 'div');
        $options = empty($this->clientOptions) ? '' : Json::htmlEncode($this->clientOptions);
        $this->getView()->registerCss('#' . $this->id . ' iframe { z-index: 9996; }');
        $this->getView()->registerJs("CKFinder.widget( '$this->id', $options);");
        return implode("\n", [
            Html::beginTag($tag, $this->options),
            Html::endTag($tag),
        ]);
    }

}
