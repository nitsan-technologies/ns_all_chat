
<?php
defined('TYPO3') || die('Access denied.');

$_EXTKEY = 'ns_all_chat'; 

use Nitsan\NsAllChat\Controller\NsAllChatsController;
use TYPO3\CMS\Core\Utility\VersionNumberUtility;
use TYPO3\CMS\Extbase\Utility\ExtensionUtility;

$versionNumber =  VersionNumberUtility::convertVersionStringToArray(VersionNumberUtility::getCurrentTypo3Version());
if ($versionNumber['version_main'] == '12') {
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
} else {
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
    ,ExtensionUtility::PLUGIN_TYPE_CONTENT_ELEMENT

);
}







