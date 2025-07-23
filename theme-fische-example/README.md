# WordPress Playground Blueprint - FISCHE Theme

Dieses Verzeichnis enthält WordPress Playground Blueprints für die "FISCHE - Naturwunder unter Wasser" Website mit einem angepassten Twenty Twenty-Five Child Theme.

## 📁 Dateien

### Blueprints

- **`blueprint.json`** - Basis Blueprint mit Theme und Inline-CSS Content
- **`blueprint-complete.json`** - Vollständiges Blueprint mit WXR-Import und PHP URL-Ersetzung

### Theme und Content

- **`fish-fixed.zip`** - Angepasstes Twenty Twenty-Five Child Theme mit korrigierten Google Fonts
- **`complete-content.xml`** - WXR Export mit allen Posts, Seiten und Inhalten aus LocalWP
- **`images/`** - Alle Bilder für die Website

## 🚀 Live Tests

### Blueprint.json (Basis Version)

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint.json
```

- ✅ Installiert und aktiviert das angepasste Theme
- ✅ Erstellt Basis-Content mit Inline-CSS styling
- ✅ Funktioniert zuverlässig ohne PHP-Ausführung

### Blueprint-complete.json (Vollversion mit WXR)

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint-complete.json
```

- ✅ Installiert und aktiviert das angepasste Theme  
- ✅ Importiert vollständige WXR-Inhalte aus LocalWP
- ⚠️ Verwendet PHP-Script zur Bild-URL Ersetzung (kann instabil sein)

## 🎨 Theme-Anpassungen

Das `fish-fixed.zip` Theme basiert auf Twenty Twenty-Five und enthält:

- **Custom Fonts:** Lobster Two und Nunito über Google Fonts
- **Angepasste Farben:** Blau-Töne für Aquaristik-Theme
- **Responsive Design:** Optimiert für verschiedene Bildschirmgrößen

## 📊 Technische Details

- **WordPress Version:** Latest
- **PHP Version:** 8.3
- **Theme Parent:** Twenty Twenty-Five
- **Font-URLs:** Korrigiert von LocalWP auf Google Fonts
- **Bild-Hosting:** GitHub Raw URLs
- Vollständiger WXR-Import mit allen Seiten, Beiträgen und Kategorien
- **Automatische Bild-URL-Ersetzung** von LocalWP zu GitHub URLs
- Hero-Bereich mit Parallax-Hintergrund
- Responsive Grid-Layout für Beiträge
- Mehrere Fischkategorien (Buntbarsche, Labyrinthfische, Karpfenartige, Meeresfische)
- Datenschutzerklärung und Beispielseite
- Vollständig angepasstes Design mit funktionierenden Bildern

### Einfache Demo (blueprint.json)

- GitHub-hosted WebP images
- Drei Fisch-Beiträge (Clownfisch, Diskusfische, Siamesischer Kampffisch)
- Saubere, emoji-freie Darstellung
- Responsive Bilder mit maximaler Breite
- Absolute paths for WordPress Playground compatibility

## Technical Notes

- Images are loaded directly from GitHub Raw URLs
- Images are **not stored in WordPress media library** due to WordPress Playground security limitations
- This is the most reliable approach for WordPress Playground demos

## Available Images

The following fish images are included:

- Clownfisch.webp
- Diskusfische.webp  
- Siamesischer-Kampffisch.webp

All images are loaded directly from GitHub Raw URLs.
