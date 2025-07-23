# WordPress Playground Fische-Demo

Dieses Verzeichnis enthält einen WordPress Playground Blueprint mit einem kompletten Fische & Aquarien-Theme basierend auf dem aktualisierten LocalWP-Design.

## Neue Features (Juli 2025)

✨ **LocalWP-Integration**: Jetzt mit dem echten Design aus der LocalWP-Installation  
🎨 **Verbessertes Design**: Schönes blaues Unterwasser-Theme  
📄 **Aktueller Content**: Frische Inhalte aus `fische.xml`  
🐠 **Authentisches Aussehen**: Exakte Replikation der ursprünglichen Website  

## Dateien

- **`blueprint.json`** - Haupt-Blueprint mit LocalWP-Theme und aktuellem Content
- **`blueprint-localwp-theme.json`** - Spezielle LocalWP-Version
- **`fische.xml`** - Aktueller WXR-Export aus LocalWP (Juli 2025)
- **`twentytwentyfive-fische-updated.zip`** - Aktualisiertes Theme-Paket aus LocalWP
- **`demo-content-complete.xml`** - Älterer Demo-Content (Backup)

## Verwendung

### 🌊 AKTUELLE Test-Links - Mit LocalWP-Design

**� Hauptversion (empfohlen):**

```url
https://playground.wordpress.net/
```

**🔧 Test 2a - URL-codierter Blueprint (sollte "BLUEPRINT FUNKTIONIERT!" zeigen):**

```url
https://playground.wordpress.net/?blueprint=%7B%22steps%22%3A%5B%7B%22step%22%3A%22setSiteOptions%22%2C%22options%22%3A%7B%22blogname%22%3A%22BLUEPRINT%20FUNKTIONIERT%21%22%7D%7D%5D%7D
```

**🔧 Test 2b - Base64-codierter Blueprint (alternative Methode):**

```url
https://playground.wordpress.net/?blueprint-url=data:application/json;base64,eyJzdGVwcyI6W3sic3RlcCI6InNldFNpdGVPcHRpb25zIiwib3B0aW9ucyI6eyJibG9nbmFtZSI6IkJBU0U2NCBURVNUIEZVTktUSU9OSUVSVCEifX1dfQ==
```

**🔧 Test 3 - GitHub Blueprint (nach 5 Min Wartezeit):**

```url
https://playground.wordpress.net/?blueprint=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint-test.json
```

**🔧 Test 4 - GitHub mit Login:**

```url
https://playground.wordpress.net/?blueprint=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint-plugin-test.json
```

### ✅ ERFOLG! Blueprints funktionieren jetzt

Da Test 2a/2b funktionieren, können wir jetzt die Fische-Demo testen:

**🐟 Test 5 - Einfache Fische-Demo (inline):**

```url
https://playground.wordpress.net/?blueprint=%7B%22steps%22%3A%5B%7B%22step%22%3A%22setSiteOptions%22%2C%22options%22%3A%7B%22blogname%22%3A%22Fische%20Demo%20FUNKTIONIERT%22%7D%7D%5D%7D
```

**🐟 Test 6 - Vollständige Fische-Demo (GitHub, nach 5 Min):**

```url
https://playground.wordpress.net/?blueprint=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint.json
```

**🐟 Test 7 - Cache-Busting (falls Test 6 nicht geht):**

```url
https://playground.wordpress.net/?blueprint=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint.json&v=20250722
```

### 🔍 DIAGNOSE - Was Sie sehen sollten

- **Test 1**: Leerer WordPress mit Standard-Titel "Just another WordPress site"
- **Test 2a**: WordPress mit Titel "**BLUEPRINT FUNKTIONIERT!**" 
- **Test 2b**: WordPress mit Titel "**BASE64 TEST FUNKTIONIERT!**"
- **Test 3+4**: WordPress mit Fische-spezifischen Inhalten

**Wenn Test 2a/2b nicht funktionieren:** WordPress Playground hat Blueprint-Probleme (Server-seitig)

**Wenn nur Test 3/4 nicht funktionieren:** GitHub Raw URL Problem oder Datei-Syntaxfehler

### NOTFALL-TEST - Direkte URL ohne Blueprint

Falls alle oben nicht funktionieren, versuchen Sie:

```url
https://playground.wordpress.net/
```

Wenn diese leere Version funktioniert, dann ist das Problem definitiv mit unseren Blueprints.

### Problembehandlung

Falls der Playground nicht lädt:

1. Versuchen Sie zuerst die **minimale Version**
2. Wenn diese funktioniert, testen Sie die **vereinfachte Version**
3. Zuletzt versuchen Sie die **vollständige Version**

**Cache-Busting Links (falls Browser-Cache Probleme verursacht):**

- Fügen Sie `&v=` + aktuelle Zeit an die URL an, z.B.:

```url
https://playground.wordpress.net/?blueprint=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint.json&v=20250122
```

### Lokale Verwendung

1. Beide Dateien in ein Verzeichnis kopieren
2. Das Verzeichnis auf einen Webserver hochladen
3. WordPress Playground mit dem Blueprint-Link öffnen

## Inhalt der Demo

### Kategorien
- **Süßwasserfische** - Alles über Süßwasserfische und ihre Haltung
- **Salzwasserfische** - Meerwasserfische und ihre besonderen Bedürfnisse  
- **Aquarien-Tipps** - Praktische Tipps für die Aquarienhaltung

### Artikel
1. **Der faszinierende Clownfisch** - Ein Juwel der Meere (Salzwasserfische)
2. **Diskusfische** - Die Könige des Süßwasseraquariums (Süßwasserfische)
3. **Labyrinthfische** - Meister der Luftatmung (Süßwasserfische)
4. **Das perfekte Aquarium einrichten** - Ein Leitfaden (Aquarien-Tipps)

### Features
- **Twenty Twenty-Five Theme** aktiviert und konfiguriert
- **Custom Navigation** mit Fisch-spezifischen Menüpunkten
- **Responsive Design** für alle Geräte
- **SEO-freundliche URLs** und Struktur
- **Deutsche Lokalisierung** mit Schweizer Datums-/Zeitformat

## Theme-Anpassungen

Das Blueprint:
- Installiert und aktiviert das Twenty Twenty-Five Theme
- Importiert alle Inhalte über WXR
- Konfiguriert die Website-Einstellungen (Titel, Beschreibung, etc.)
- Erstellt ein benutzerdefiniertes Navigationsmenü
- Setzt WordPress auf Entwicklungsmodus für Debugging

## Technische Details

- **WordPress Version**: Neueste verfügbare Version
- **PHP Version**: 8.3
- **Theme**: Twenty Twenty-Five (Standard WordPress Theme)
- **Sprache**: Deutsch (Deutschland)
- **Timezone**: Europe/Zurich

## Lizenz

Dieser Blueprint und die Inhalte stehen unter einer freien Lizenz und können beliebig verwendet und angepasst werden.
