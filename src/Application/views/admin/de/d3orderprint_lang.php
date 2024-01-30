<?php

$sLangName = "Deutsch";

$aLang = array(
    'charset'                                         => 'UTF-8',
    // menü
    'd3mxprintorders'                                 => '<i class=\'fa fa-print\'></i> Bestellbestätigungen drucken',
    'd3mxprintorders_settings'                        => 'Einstellungen',
    'd3tbclprintorders_main'                          => 'Stamm',
    // Moduleinstellungen -- Admin
    'D3_ORDERPRINT_MODULNAME'                         => 'Bestellbest&auml;tigung drucken',
    'D3_ORDERPRINT_GENERAL_SAVE'                      => 'Speichern',
    'D3_ORDERPRINT_RECACHING_BTN'                     => 'alte Bestellbest&auml;tigung abrufen',
    'D3_ORDERPRINT_RECACHING_HELP'                    => 'Die Bestellbestätigungen zum ausdrucken, werden erst mit ' //
        . 'aktivem Modul automatisch für jede Bestellung generiert. Mit dieser Funktion können Sie alle Bestellungen, ' //
        . 'welche vor der Modulinstallation eingegangen sind, im nachhinein erstellen lassen.<br><br>' //
        . 'Bitte beachten Sie das dieser Vorgang einige Zeit in anspruch nehmen kann. ' //
        . 'Die Gesamtdauer ist abh&auml;ngig von der Anzahl der zu bearbeitenden Bestellungen.',
    'D3_ORDERPRINT_PATHTOFILES'                       => 'Pfad',
    'D3_ORDERPRINT_PATHTOFILES_HELP'                  => 'Geben Sie hier einen alternativen Pfad an '
        . 'wo die Dateien zu jeder Bestellbestätigung abgelegt werden sollen. Beachten Sie bitte, dass dieser Pfad '
        . 'nicht automatisch vom Modul angelegt wird, sondern auf dem FTP zuvor selbst angelegt werden muss. <br><br>'
        . 'Im Standard werden diese gespeichert unter: ihrShopStammverzeichnis/<b>export/d3printorder/</b>.',
    'D3_ORDERPRINT_CLEAR_OLD_DATA'                    => 'alte Datenstruktur korrigieren',
    'D3_ORDERPRINT_CLEAR_OLD_DATA_HELP'               => 'Mit dieser Funktion können Sie die Daten an die neue '
        . 'Struktur anpassen. Dabei werden alle Bestellungen welche in dem alten Verzeichnis, innerhalb '
        . 'des Moduls abgelegt worden, in das neue Verzeichnis verschoben. Anschließend wird das alte '
        . 'Verzeichnis innerhalb des Moduls entfernt.<br><br>'
        . 'Bitte beachten Sie das dieser Vorgang einige Zeit in anspruch nehmen kann. ' //
        . 'Die Gesamtdauer ist abh&auml;ngig von der Anzahl der zu bearbeitenden Bestellungen.',
    // Modul-Update-Messages
    'D3_ORDERPRINT_UPDATE_FOLDER_FOR_ORDERPRINTS'     => 'In dieser Modulversion, werden die Bestellbestätigungen ' //
        . 'in einem Verzeichnis, außerhalb des Moduls abgelegt. ' //
        . 'Innerhalb des automatischen Updates, können die bisher generierten Bestellbestätigungen, leider ' //
        . 'nicht automatisch verschoben werden. Bitte nehmen Sie dies jetzt manuell vor. ' . '<br><br>' //
        . 'Verschieben Sie den Inhalt des Verzeichnisses: %s' //
        . '<br>in das neue Verzeichnis: %s' //
        . '<br><br>Entfernen Sie anschließend das Verzeichnis %s',
    'D3_ORDERPRINT_AUTOUPDATE_FOLDER_FOR_ORDERPRINTS' => 'In dieser Modulversion, werden die Bestellbestätigungen ' //
        . 'in einem Verzeichnis, außerhalb des Moduls abgelegt. Dieses lautet: %s' //
        . '<br><br>Innerhalb dieses Update-Schrittes, ' //
        . 'werden die bisher generierten Bestellbestätigungen, automatisch in das neue Verzeichnis verschoben.',
    'D3_ORDERPRINT_PRINT'        => 'Bestellbestätigung drucken',
    'D3_ORDERPRINT_CLOSE'        => 'Fenster schließen',
    'D3_ORDERPRINT_LINK'         => 'Klicken Sie hier, um Ihre Bestellbestätigung auszudrucken',
);
