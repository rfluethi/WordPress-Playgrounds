# WordPress CSS Animations Example

This directory demonstrates how to implement **CSS animations and effects** in WordPress using the **Block Editor** without any plugins.

![CSS Animations Example](css-animations-example.png)

## Live Demo

```url
https://playground.wordpress.net/?blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/css-animations-example/blueprint.json
```

## Documentation

For a complete step-by-step tutorial on implementing these CSS animations, see the [CSS Animations Tutorial](css-animations-example-tutorial.md).

## What This Example Shows

This WordPress Playground demonstrates various **CSS animation techniques** that can be applied to blocks in the WordPress Block Editor:

### Interactive Effects

- **Button Press Animation** - Buttons that lift on hover and press down when clicked
- **Color Change on Hover** - Text that changes color when you hover over it
- **Background Effects** - Elements that get highlighted backgrounds on hover
- **Shadow and Zoom** - Content that scales up and gets shadows on interaction

### Keyframe Animations

- **Fade In Effects** - Elements that gradually appear
- **Slide In Animations** - Content that slides into view
- **Pulse Effects** - Elements that gently pulse to draw attention
- **Rotation Effects** - Elements that rotate on hover
- **Bounce Animations** - Playful bouncing effects

## How It Works

1. **CSS Classes**: The animations are applied using CSS classes like `button-press`, `hover-color`, `shadow-zoom`
2. **Block Editor Integration**: Each class can be applied to any WordPress block via the "Additional CSS class(es)" field
3. **Pure CSS**: No JavaScript or plugins required - just CSS transitions and keyframe animations

## Files

- **`blueprint.json`** - WordPress Playground blueprint that loads the demo
- **`css-animations-example.xml`** - WXR export containing the demo content with applied CSS classes
- **`css-animations-example-tutorial.md`** - Detailed tutorial on implementing these effects
- **`README.md`** - This documentation file

## Educational Value

This example is perfect for:

- **WordPress developers** learning CSS animations in the Block Editor
- **Content creators** who want to add visual effects to their pages
- **Educators** teaching modern CSS techniques in WordPress
- **Designers** exploring interaction possibilities in WordPress

## Technical Implementation

The blueprint:

1. Imports the WXR content with pre-configured blocks and CSS classes
2. Injects the CSS animation styles directly into the WordPress site
3. Provides immediate visual feedback for all animation effects

All animations use modern CSS features like `transition`, `transform`, and `@keyframes` for smooth, performant effects.
