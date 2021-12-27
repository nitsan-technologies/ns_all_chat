
<?php
defined('TYPO3_MODE') || die('Access denied.');

$_EXTKEY = 'ns_all_chat';

if (version_compare(TYPO3_branch, '10.0', '>')) {
    $moduleClass = \Nitsan\NsAllChat\Controller\NsAllChatsController::class;
} else {
    $moduleClass = 'NsAllChats';
}
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'Nitsan.NsAllChat',
    'Frnsallchat',
    [
        $moduleClass => 'script'
    ],
    // non-cacheable actions
    [
        $moduleClass => ''
    ]
);
