<?php
defined('TYPO3_MODE') || die('Access denied.');
$_EXTKEY = 'ns_all_chat';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'NsAllChats');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_nsallchat_domain_model_nsallchats', 'EXT:ns_all_chat/Resources/Private/Language/locallang_csh_tx_nsallchat_domain_model_nsallchats.xlf');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_nsallchat_domain_model_nsallchats');
