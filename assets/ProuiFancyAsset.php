<?php

/**
 * Theme/color of proui template
 * register this class in layout partial like _header.php
 * or override main.php
 * since 1.0.0
 */

namespace sheillendra\proui\assets;

class ProuiFancyAsset extends ProuiAsset {

    public function init() {
        $this->css[] = 'css/themes/fancy.css';
        parent::init();
    }

}
