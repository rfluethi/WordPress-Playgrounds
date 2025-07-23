# FISH - WordPress Playground Example **FIXED VERSION**

A simple WordPress Playground demo with fish images. **Absolute paths fixed for WordPress Playground compatibility.**

## Usage

**Basic Version (External Images - NOT in Media Library):**

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint.json
```

**Media Library Version (Advanced - PHP file operations):**

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint-media-library.json
```

**Simple Media Version (writeFile approach):**

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint-simple-media.json
```

## Contents

- **blueprint.json**: Main configuration file (external images) - **NOT in media library**
- **blueprint-media-library.json**: Enhanced version with media library integration using PHP - **FIXED absolute paths**
- **blueprint-simple-media.json**: Alternative media library approach using writeFile - **NEW**
- **images/**: Directory with WebP images of fish
- **README.md**: This file

## Versions Explained

1. **Basic Version**: Shows images but they're loaded from GitHub Raw URLs, not stored in WordPress media library
2. **Media Library Version**: Attempts to download and properly register images in WordPress media library using `file_get_contents()` and `wp_insert_attachment()`
3. **Simple Media Version**: Uses Blueprint's `writeFile` to place images in upload directory, then registers them in media library

## Fix Applied

Both blueprints now use absolute path `/wordpress/wp-load.php` instead of relative path `wordpress/wp-load.php` to ensure compatibility with WordPress Playground's current working directory requirements.

## Features

- GitHub-hosted WebP images
- Three fish posts (Clownfish, Discus fish, Siamese fighting fish)
- Emoji-free, clean presentation
- Responsive images with maximum width
- Media library integration option

## Images

The following fish images are available:

- Clownfisch.webp
- Diskusfische.webp  
- Siamesischer-Kampffisch.webp

All images are loaded directly from GitHub Raw.
