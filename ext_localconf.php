
<?php
defined('TYPO3_MODE') || die('Access denied.');

$_EXTKEY = 'ns_all_chat';

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Nitsan.NsAllChat',
    'Frnsallchat',
    [
        'NsAllChats' => 'script'
    ],
    // non-cacheable actions
    [
        'NsAllChats' => ''
    ]
);
