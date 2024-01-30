<?php

$sLangName = "English";

$aLang = array(
    'charset'                                         => 'UTF-8',
    // menue
    'd3mxprintorders'                                 => '<i class=\'fa fa-print\'></i> Print Orders',
    'd3mxprintorders_settings'                        => 'Settings',
    'd3tbclprintorders_main'                          => 'Stamm',
    // Modulsettings -- Admin
    'D3_ORDERPRINT_MODULNAME'                         => 'print Orderconfirmation',
    'D3_ORDERPRINT_GENERAL_SAVE'                      => 'Save',
    'D3_ORDERPRINT_RECACHING_BTN'                     => 'generate old Orderconfirmation',
    'D3_ORDERPRINT_RECACHING_HELP'                    => 'Only active Modul, generate orderconfirmations to print for new order. ' //
        . 'With this option you can generate all confirmations for older orders.<br><br>' //
        . 'For many orders this can take a lot of time.',
    'D3_ORDERPRINT_PATHTOFILES'                       => 'Path',
    'D3_ORDERPRINT_PATHTOFILES_HELP'                  => 'Enter your individual path for the orderprint files. '
        . 'Attention: you have to create this path manually.<br><br>'
        . 'Standard is: yourShopRoot/<b>export/d3printorder/</b>.',
    'D3_ORDERPRINT_CLEAR_OLD_DATA'                    => 'correct struktur',
    'D3_ORDERPRINT_CLEAR_OLD_DATA_HELP'               => 'Move existing orderprints to new folder. '
        . 'The old folder is no longer used anymore and will be deleted after this.'
        . 'For many orders this can take a lot of time.',
    // Modul-Update-Messages
    'D3_ORDERPRINT_UPDATE_FOLDER_FOR_ORDERPRINTS'     => 'This Modul save new orderprints in another folder. ' //
        . 'There are to much files, to automatically move the existing orderprints to this new folder.  ' //
        . '<br><br>' //
        . 'Please move all files from: %s <br>' //
        . 'to the new folder: %s' //
        . 'After this, remove the folder: %s',
    'D3_ORDERPRINT_AUTOUPDATE_FOLDER_FOR_ORDERPRINTS' => 'This Modul save new orderprints in another folder. ' //
        . 'The new Folder is: %s' //
        . '<br><br> Existing orderprint-files are moved automatically, to the new folder, in this updatestep',
    'D3_ORDERPRINT_PRINT'        => 'print order confirmation',
    'D3_ORDERPRINT_CLOSE'        => 'close window',
    'D3_ORDERPRINT_LINK'         => 'Click here to print the order confirmation',
);
