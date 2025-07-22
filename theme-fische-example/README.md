# WordPress Playground Blueprint - Seminar Demo Fische

Dieses Blueprint ermöglicht es, Ihr WordPress-Theme direkt im Browser mit WordPress Playground zu testen.

## 🚀 Blueprint verwenden

### Option 1: Direkter Link
Klicken Sie auf diesen Link, um das WordPress Playground mit Ihrem Theme zu öffnen:

```
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/[IHR-GITHUB-USERNAME]/[IHR-REPOSITORY-NAME]/main/blueprint.json
```

**Wichtig:** Ersetzen Sie `[IHR-GITHUB-USERNAME]` und `[IHR-REPOSITORY-NAME]` mit Ihren tatsächlichen GitHub-Daten.

### Option 2: Blueprint hochladen
1. Besuchen Sie [WordPress Playground](https://playground.wordpress.net/)
2. Klicken Sie auf "Upload Blueprint"
3. Laden Sie die `blueprint.json` Datei hoch

## 📋 Was macht das Blueprint?

Das Blueprint führt folgende Schritte aus:

1. **Login**: Automatischer Login als Administrator
2. **Theme Installation**: Installiert das Twenty Twenty-Five Theme aus dem WordPress Repository
3. **Theme Aktivierung**: Aktiviert das Theme und importiert Starter-Content
4. **Site-Konfiguration**: Setzt deutsche Einstellungen und Zeitzone
5. **Demo-Content**: Erstellt einen Willkommens-Beitrag

## ⚙️ Blueprint-Struktur

```json
{
  "$schema": "https://playground.wordpress.net/blueprint-schema.json",
  "landingPage": "/",
  "preferredVersions": {
    "php": "8.3",
    "wp": "latest"
  },
  "features": {
    "networking": true
  },
  "steps": [...]
}
```

## 🛠 Anpassungen

### Eigenes Theme verwenden

Wenn Sie Ihr eigenes Theme verwenden möchten, ersetzen Sie den `installTheme`-Step durch einen `writeFiles`-Step:

```json
{
  "step": "writeFiles",
  "writeToPath": "/wordpress/wp-content/themes/ihr-theme-name",
  "filesTree": {
    "resource": "literal:directory",
    "name": "ihr-theme-name",
    "files": {
      "style.css": "/* Ihr Theme CSS */",
      "functions.php": "<?php /* Ihr Theme PHP */ ?>",
      "index.php": "<?php /* Ihr Theme Template */ ?>"
    }
  }
}
```

### Plugins hinzufügen

Fügen Sie diesen Step hinzu, um Plugins zu installieren:

```json
{
  "step": "installPlugin",
  "pluginData": {
    "resource": "wordpress.org/plugins",
    "slug": "plugin-slug"
  },
  "options": {
    "activate": true
  }
}
```

### Demo-Content hinzufügen

Verwenden Sie `importWxr` für WordPress-Export-Dateien:

```json
{
  "step": "importWxr",
  "file": {
    "resource": "url",
    "url": "https://ihre-domain.com/demo-content.xml"
  }
}
```

## 📚 Weitere Ressourcen

- [WordPress Playground Dokumentation](https://wordpress.github.io/wordpress-playground/)
- [Blueprint Beispiele](https://wordpress.github.io/wordpress-playground/blueprints/examples)
- [Alle verfügbaren Steps](https://wordpress.github.io/wordpress-playground/blueprints/steps)

## 🔧 Troubleshooting

### Blueprint funktioniert nicht?
- Überprüfen Sie die JSON-Syntax mit einem JSON-Validator
- Stellen Sie sicher, dass alle URLs erreichbar sind
- Prüfen Sie die Browser-Konsole für Fehlermeldungen

### Theme wird nicht korrekt geladen?
- Überprüfen Sie die `style.css` Header-Informationen
- Stellen Sie sicher, dass alle erforderlichen Theme-Dateien vorhanden sind
- Testen Sie das Blueprint lokal mit einem JSON-Schema-Validator

## 📄 Lizenz

Dieses Blueprint steht unter der gleichen Lizenz wie WordPress (GPL v2 oder höher).
