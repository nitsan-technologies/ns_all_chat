
<?php
defined('TYPO3') || die('Access denied.');

$_EXTKEY = 'ns_all_chat';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'NsAllChat',
    'Frnsallchat',
    [
        \Nitsan\NsAllChat\Controller\NsAllChatsController::class => 'script'
    ],
    // non-cacheable actions
    [
        \Nitsan\NsAllChat\Controller\NsAllChatsController::class => ''
    ]
);
