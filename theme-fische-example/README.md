# FISH - WordPress Playground Example **FIXED VERSION**

A simple WordPress Playground demo with fish images. **Absolute paths fixed for WordPress Playground compatibility.**

## Usage

**Basic Version (External Images):**

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint.json
```

**Media Library Version:**

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/theme-fische-example/blueprint-media-library.json
```

## Contents

- **blueprint.json**: Main configuration file (external images) - **FIXED absolute paths**
- **blueprint-media-library.json**: Enhanced version with media library integration - **FIXED absolute paths**
- **images/**: Directory with WebP images of fish
- **README.md**: This file

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
