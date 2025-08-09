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
- **Image Zoom Effects** - Images that scale and get shadows on hover
- **Service Card Animations** - Interactive cards with multiple hover effects

### Available CSS Classes

The blueprint includes these ready-to-use CSS classes:

- `button-press` - Button interaction effects
- `hover-color` - Color change on hover
- `hover-bg` - Background highlight on hover  
- `image-zoom` - Image scaling and shadow effects
- `service-card` - Multi-effect card animations
- `shadow-zoom` - Scale and shadow combination
- `fade-in` - Fade in animation
- `slide-in` - Slide in from left
- `pulse` - Pulsing animation
- `rotate` - Rotation on hover
- `bounce` - Bouncing animation

## How It Works

1. **CSS Classes**: The animations are applied using CSS classes like `button-press`, `hover-color`, `image-zoom`
2. **Block Editor Integration**: Each class can be applied to any WordPress block via the "Additional CSS class(es)" field
3. **Pure CSS**: No JavaScript or plugins required - just CSS transitions and keyframe animations
4. **Block Theme Integration**: CSS is automatically injected via the Additional CSS feature

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

1. **Installs and activates** a custom Block Theme for optimal CSS support
2. **Imports the WXR content** with pre-configured blocks and CSS classes
3. **Injects CSS animation styles** directly into WordPress via `wp_update_custom_css_post()`
4. **Provides immediate visual feedback** for all animation effects
5. **Automatically redirects** to the CSS animations demo page

All animations use modern CSS features like `transition`, `transform`, and `@keyframes` for smooth, performant effects that work across all modern browsers.
