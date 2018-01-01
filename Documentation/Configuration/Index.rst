
.. include:: ../Includes.txt

.. _configuration:

=============
Configuration
=============

Quick & Easy configuration of "AllChats" into TYPO3
=======================================================


Choose & Setup account at one of your favourie chat tool:
----------------------------------------------------------

.. rst-class:: ol-bignums

#. You should setup an account at one of your favourite chat tool eg., `zopim.com <https://en.zopim.com/register>`_, `livechatinc.com <https://accounts.livechatinc.com/signup/credentials>`_, `purechat.com <https://www.purechat.com/>`_, `livezilla.net <https://www.livezilla.net/installation/en/>`_, `clickdesk.com <https://www.clickdesk.com>`_ , `tidiochat.com <https://www.tidiochat.com/en/register>`_, `visitlead.com <https://visitlead.com/register>`_, `onwebchat.com <https://www.onwebchat.com/signup.php>`_, `userlike.com <https://www.userlike.com/en/>`_

#. You will able to find section where you can add your site's URL.

#. Use "Default Installation Instructions" to get all to get Project Id and Security Key.


   .. figure:: Images/TYPO3_Allchats_Chatcode.png
      :alt: Configuration 1


Setup all the configuration of Live chat:
-----------------------------------------

.. rst-class:: ol-bignums

#. Switch to the root page of your site.

#. Switch to the **Template module** and select *Constant Editor*.

#. Select Category = PLUGIN.TX_NSALLCHAT_FRNSALLCHAT (3)

#. Paste your script code over here including **<script></script>** to integrate it in typo3.


   .. figure:: Images/TYPO3_Allchats_Extension_NITSAN_Backend_Settings_Configuration.png
      :alt: Configuration 2
      :width: 1100px

.. _Clearing-the-cache:

Clearing the cache
==================

Please use the buttons 'Flush frontend caches' and 'Flush general caches'
from the top panel. The 'Clear cache' function of the install tool will also
work perfectly.
