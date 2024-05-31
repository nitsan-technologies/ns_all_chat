<?php
namespace Nitsan\NsAllChat\Controller;

use TYPO3\CMS\Core\Page\PageRenderer;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/***
 *
 * This file is part of the "NsAllChats" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * NsAllChatsController
 */
class NsAllChatsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * action script
     *
     * @return bool
     */
    public function scriptAction()
    {
        $settings = $this->settings;
        $chat = $settings['chat'];
        $scriptposition = $settings['scriptposition'];
        $scriptcode = $settings['scriptcode'];
        $pageRenderer = GeneralUtility::makeInstance(PageRenderer::class);

        if ($scriptposition==1) {
            $pageRenderer->addHeaderData(
                '<!--Start of ' . $chat . ' Chat Script-->'
                    . $scriptcode .
                '<!--End of ' . $chat . ' Chat Script-->'
            );
        } else {
            $pageRenderer->addFooterData(
                '<!--Start of ' . $chat . ' Chat Script-->'
                    . $scriptcode .
                '<!--End of ' . $chat . ' Chat Script-->'
            );
        }
        return false;
    }
}
