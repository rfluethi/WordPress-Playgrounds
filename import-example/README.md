# Import Example

[![Try it now](https://img.shields.io/badge/Try%20it%20now-WordPress%20Playground-blue.svg)](https://playground.wordpress.net/?mode=seamless&blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/import-example/blueprint.json)

This example demonstrates how to import WordPress content using WXR (WordPress eXtended RSS) files in the WordPress Playground. Perfect for learning content migration, testing import processes, and understanding how WordPress handles bulk content imports.

![Screenshot](import-example.png)

## What You'll Learn

- How to configure WXR imports in blueprints
- WordPress content import process
- Automatic post redirection after import
- Blueprint configuration best practices

## Example Details

- **Difficulty**: Beginner
- **Setup Time**: < 1 minute  
- **WordPress Features**: WXR Import, Post Management
- **Use Cases**: Content migration, site setup, bulk imports

## Files

- **`blueprint.json`**: Playground configuration that sets up WordPress and imports content
- **`import.xml`**: Sample WXR file containing post data, pages, and media
- **`import-example.png`**: Screenshot showing the expected result

## Quick Start

**Option 1: Direct Launch**
Click the badge above or use this URL:

```url
https://playground.wordpress.net/?mode=seamless&blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/import-example/blueprint.json
```

**Option 2: Manual Setup**
1. Copy the blueprint URL
2. Go to [WordPress Playground](https://playground.wordpress.net/)
3. Paste the blueprint URL in the configuration

## How It Works

### Blueprint Configuration

The `blueprint.json` configures WordPress Playground to:

```json
{
  "steps": [
    {
      "step": "importWxr",
      "file": {
        "resource": "url",
        "url": "https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/import-example/import.xml"
      }
    }
  ],
  "login": true,
  "landingPage": "/wp-admin/post.php?action=edit&post=4"
}
```

### What Happens

1. **WordPress starts** with latest PHP and WordPress versions
2. **Content imports** automatically from the WXR file
3. **You're logged in** as admin automatically
4. **Post editor opens** showing the imported content

## Directory Structure

```
/import-example/
├── blueprint.json
├── import-example.png
└── import.xml
```
