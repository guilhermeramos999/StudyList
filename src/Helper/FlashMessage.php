<?php

namespace Uni9\StudyList\Helper;

trait FlashMessage
{
    public function defineMessage($message, $type)
    {
        $_SESSION['message'] = $message;
        $_SESSION['message_type'] = $type;
    }
}