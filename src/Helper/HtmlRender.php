<?php

namespace Uni9\StudyList\Helper;

trait HtmlRender
{
    public function render($path, $info = null)
    {
        if (!is_null($info)) {
            extract($info);
        }
        
        ob_start();
        require __DIR__ . '/../../view/' . $path;
        return ob_get_clean();
    }
}
