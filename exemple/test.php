<?php

spl_autoload_register();

use exemple\modules\forum\Message;
use exemple\modules\chat\Message as MessageChat;            // permet un de mettre un alias // NAMESPACE // 

$messageForum = new MessageChat();

?>