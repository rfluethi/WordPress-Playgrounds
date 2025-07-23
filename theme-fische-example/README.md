# FISH - WordPress Playground Example

Eine vollständige WordPress Playground Demo mit angepasstem Theme und komplettem Inhalt.

## Usage

**Vollständige Demo mit Custom Theme (empfohlen):**

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint-complete.json
```

**Einfache Demo mit Standard-Theme:**

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint.json
```

## Contents

- **blueprint-complete.json**: Vollständige Konfiguration mit Custom Theme und WXR-Import
- **blueprint.json**: Einfache Konfiguration mit Standard Twenty Twenty-Five Theme
- **complete-content.xml**: WXR-Export mit allen Inhalten aus LocalWP
- **fish.zip**: Angepasstes Child-Theme von Twenty Twenty-Five
- **images/**: Verzeichnis mit WebP-Bildern der Fische
- **README.md**: Diese Datei

## Features

### Vollständige Demo (blueprint-complete.json)

- Angepasstes Child-Theme basierend auf Twenty Twenty-Five
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
