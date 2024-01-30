---
title: Installationsprüfung
---

Um die erfolgreiche Installation zu prüfen, können Sie die folgende(n) Checkliste(n) verwenden:

## Einstellungsunabhängige Prüfungen

### Backend

* Modul ist unter [ Erweiterungen ] -> [ Module ] aktiv geschaltet
* Modul ist unter [ (D3) Module ] -> [ Modul-Connector ] -> [ Modulverwaltung ] aktiv geschaltet
* Modul zeigt unter [ (D3) Module ] -> [ {$menutitle} ] einen eigenen Bereich für Einstellungen

### Frontend

+ Thankyou-Seite: nach der Bestellung wird jetzt auf der Thankyou-Seite ein neuer Bereich mit dem Link zur Bestellbestätigung eingefügt:
![Link zur Bestellbestätigung auf der Thankyou-Seite](../media/FlowThankyou.png)

* Bestellungen im Kundenkonto: an jeder Bestellung wird zusätzlich ein Link eingebunden: 
![Link zur Bestellbestätigung im Kundenkonto](../media/FlowKundenkonto.png)


    
## Einstellungsabhängige Prüfungen

### Backend

Insofern das Modul aktiv geschalten ist, wird unter [ (D3) Module ] -> [ Modul-Connector ] -> [ Modulverwaltung ] -> [ {$menutitle} ]
ein eigener Bereich für Einstellungen und Optionen gezeigt: 

* Button [ alte Bestellbestätigung abrufen ]
* Button [ alte Datenstruktur korrigieren ] sofern dies Notwendig ist (d.h. Verzeichnis: „modules/d3/d3printorder/orders“ existiert auf dem Server)

