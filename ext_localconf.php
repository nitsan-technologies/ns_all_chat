
<?php
defined('TYPO3') || die('Access denied.');

$_EXTKEY = 'ns_all_chat'; 

use TYPO3\CMS\Extbase\Utility\ExtensionUtility;
use Nitsan\NsAllChat\Controller\NsAllChatsController;

ExtensionUtility::configurePlugin(
    'NsAllChat',
    'Frnsallchat',
    [
        NsAllChatsController::class => 'script'
    ],
    // non-cacheable actions
    [
        NsAllChatsController::class => ''
    ]
);
