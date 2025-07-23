# WordPress Playground Blueprint - FISCHE Theme

This directory contains WordPress Playground blueprints for the "FISCHE - Naturwunder unter Wasser" (FISH - Natural Wonders Under Water) website with a customized Twenty Twenty-Five child theme.

## Files

### Blueprints

- **`blueprint.json`** - Basic blueprint with theme and inline CSS content
- **`blueprint-complete.json`** - Complete blueprint with WXR import and PHP URL replacement

### Theme and Content

- **`fish-fixed.zip`** - Customized Twenty Twenty-Five child theme with corrected Google Fonts
- **`complete-content.xml`** - WXR export with all posts, pages and content from LocalWP
- **`images/`** - All images for the website

## Live Tests

### Blueprint.json (Basic Version)

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint.json
```

- Installs and activates the customized theme
- Creates basic content with inline CSS styling
- Works reliably without PHP execution

### Blueprint-complete.json (Full Version with WXR)

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint-complete.json
```

- Installs and activates the customized theme
- Imports complete WXR content from LocalWP
- Uses PHP script for image URL replacement (may be unstable)

## Theme Customizations

The `fish-fixed.zip` theme is based on Twenty Twenty-Five and contains:

- **Custom Fonts:** Lobster Two and Nunito via Google Fonts
- **Custom Colors:** Blue tones for aquarium theme
- **Responsive Design:** Optimized for different screen sizes

## Technical Details

- **WordPress Version:** Latest
- **PHP Version:** 8.3
- **Theme Parent:** Twenty Twenty-Five
- **Font URLs:** Corrected from LocalWP to Google Fonts
- **Image Hosting:** GitHub Raw URLs
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
