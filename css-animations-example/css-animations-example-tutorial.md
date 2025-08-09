# CSS Animations in the WordPress Block Editor

This guide shows you how to create **visual effects in WordPress** with **simple CSS techniques** – completely without plugins or external tools.

---

## Basics: Adding CSS to Block Themes

### Step 1: Add Global CSS

**For Block Themes (Twenty Twenty-Four, etc.):**
1. Open WordPress backend
2. **Appearance → Editor → Styles**
3. Click the **pen icon** in the top right
4. Expand **"Advanced"** at the bottom
5. Select **"Additional CSS"**
6. Add CSS code and click **"Save"**

**Alternative for classic themes:**
- **Appearance → Customizer → Additional CSS**

### Step 2: Use CSS Classes in Blocks

1. Select a block in the block editor
2. Right sidebar → expand **"Advanced"**
3. Enter the class name in **"Additional CSS class(es)"** field
4. Update or publish the page

---

## Practical Examples with Detailed Explanations

### Button Press Effect

Button lifts slightly on hover and presses down when clicked, creating a realistic button interaction.

**Use case:** Interactive buttons that provide visual feedback when clicked.

**Application:** Enter CSS class `button-press` for button blocks.

**CSS Code:**
```css
.button-press {
  transition: all 0.1s ease;
  transform: translateY(0px);
}

.button-press:hover {
  transform: translateY(-2px);
}

.button-press:active {
  transform: translateY(2px);
  transition: all 0.05s ease;
}
```

### Color Change on Hover

Text turns red when hovering over it.

**Use case:** Interactive highlighting of text content.

**Application:** Enter CSS class `hover-color` for text blocks.

**CSS Code:**
```css
.hover-color {
  transition: all 0.3s ease;
}

.hover-color:hover {
  color: crimson;
}
```

### Background Effect on Hover

Background turns light gray when hovering over it.

**Use case:** Subtle highlighting of content blocks.

**Application:** Enter CSS class `hover-bg` for any block.

**CSS Code:**
```css
.hover-bg {
  transition: all 0.3s ease;
}

.hover-bg:hover {
  background-color: #f0f0f0;
}
```

### Shadow and Zoom Combined

Element gets bigger and receives a shadow when hovering over it.

**Use case:** Modern card designs and product cards.

**Application:** Enter CSS class `hover-shadow-scale` for any block.

**CSS Code:**
```css
.hover-shadow-scale {
  transition: all 0.3s ease;
}

.hover-shadow-scale:hover {
  transform: scale(1.05);
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
}
```

### Call-to-Action Button with Pulse Effect

The button continuously grows and shrinks while creating an expanding color ring. When hovering with the mouse, the animation stops.

**Use case:** Highlight important buttons to attract visitor attention.

**Application:**
1. Create button block
2. Right sidebar → "Advanced" → CSS class: `cta-pulse`
3. Button text: "Register now" or "Learn more"

**CSS Code (in "Additional CSS"):**
```css
/* Definition of the pulsing animation */
@keyframes pulse-cta {
  0%, 100% { 
    transform: scale(1);
    box-shadow: 0 0 0 0 rgba(74, 144, 226, 0.4);
  }
  50% { 
    transform: scale(1.02);
    box-shadow: 0 0 0 10px rgba(74, 144, 226, 0);
  }
}

/* Styling for the button with pulsing */
.cta-pulse {
  animation: pulse-cta 2s infinite;
  border-radius: 5px;
  transition: all 0.3s ease;
}

/* Behavior when hovering with the mouse */
.cta-pulse:hover {
  animation-play-state: paused;
}
```

**Detailed CSS Explanation:**

- **`@keyframes pulse-cta`**: Defines an animation named "pulse-cta"
  - **`0%, 100%`**: Start and end point of the animation (normal size)
  - **`50%`**: Midpoint of the animation (slightly enlarged)
  - **`transform: scale(1.02)`**: Enlarges the element by 2%
  - **`box-shadow`**: Creates a colored shadow that spreads out

- **`.cta-pulse`**: The main class for the button
  - **`animation: pulse-cta 2s infinite`**: Plays the animation for 2 seconds infinitely
  - **`border-radius: 5px`**: Rounds the corners
  - **`transition: all 0.3s ease`**: Ensures smooth transitions for changes

- **`.cta-pulse:hover`**: Behavior on hover (mouse over)
  - **`animation-play-state: paused`**: Pauses the animation

### Typewriter Effect for Headlines

The text appears letter by letter from left to right, as if someone were typing it on a typewriter. A blinking cursor at the end disappears after 6 seconds.

**Use case:** Present headlines dramatically and attention-grabbing.

**Application:**
1. Create heading block
2. CSS class: `typewriter`
3. Works with H1, H2, H3, etc.

**CSS Code:**
```css
/* Animation for "typing" the text */
@keyframes typing {
  from { width: 0; }
  to { width: 100%; }
}

/* Animation for the blinking cursor */
@keyframes blink {
  50% { border-color: transparent; }
}

/* Animation to hide the cursor */
@keyframes cursor-disappear {
  to { border-color: transparent; }
}

/* Main class for the typewriter effect */
.typewriter {
  overflow: hidden;
  border-right: 2px solid #333;
  white-space: nowrap;
  animation: 
    typing 3s steps(40, end),
    blink 0.75s step-end infinite 3s,
    cursor-disappear 0.1s ease-in-out 6s forwards;
  width: fit-content;
  animation-fill-mode: forwards;
}
```

**Detailed CSS Explanation:**

- **`@keyframes typing`**: Animation for the gradual appearance of text
  - **`from { width: 0; }`**: Starts with width 0 (invisible)
  - **`to { width: 100%; }`**: Ends with full width (completely visible)

- **`@keyframes blink`**: Animation for the blinking cursor
  - **`50% { border-color: transparent; }`**: At 50% of the animation, the border becomes invisible

- **`.typewriter`**: The main class
  - **`overflow: hidden`**: Hides text that extends beyond the width
  - **`border-right: 2px solid #333`**: Creates a black "cursor" on the right
  - **`white-space: nowrap`**: Prevents line breaks
  - **`steps(40, end)`**: Divides the animation into 40 discrete steps
  - **`animation-fill-mode: forwards`**: Maintains the final state after the animation

- **Animation sequence:**
  1. **0-3s**: Text is "typed" (`typing`)
  2. **3-6s**: Cursor blinks (`blink` with 3s delay)
  3. **After 6s**: Cursor disappears (`cursor-disappear`)

### Modern Hover Effects for Images

When hovering with the mouse, the image gently enlarges by 10% and a shadow appears under the image container.

**Use case:** Make image galleries more interactive and professional.

**Application:**
1. Select image block in the block editor
2. Right sidebar → "Advanced" → CSS class: `image-zoom`
3. Automatically works with all image sizes

**CSS Code:**
```css
/* Container for the zoom effect */
.image-zoom {
  overflow: hidden;
  border-radius: 8px;
  transition: all 0.3s ease;
  display: block;
  width: 100%;
}

/* Styling for the image itself */
.image-zoom img {
  transition: transform 0.3s ease;
  width: 100%;
  height: auto;
  display: block;
}

/* Enlargement on hover */
.image-zoom:hover img {
  transform: scale(1.1);
}

/* Additional shadow on hover */
.image-zoom:hover {
  box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
```

**Detailed CSS Explanation:**

- **`.image-zoom`**: Container around the image
  - **`overflow: hidden`**: Prevents the enlarged image from extending beyond borders
  - **`border-radius: 8px`**: Rounds the corners
  - **`transition: all 0.3s ease`**: Ensures smooth transitions (0.3 seconds)
  - **`display: block; width: 100%`**: Ensures correct display for all image sizes

- **`.image-zoom img`**: The image itself
  - **`transition: transform 0.3s ease`**: Smooth transformation on hover
  - **`width: 100%; height: auto`**: Responsive behavior

- **`:hover`**: Effects when hovering
  - **`transform: scale(1.1)`**: Enlarges the image by 10%
  - **`box-shadow: 0 10px 25px rgba(0,0,0,0.2)`**: Adds a shadow
    - **`0 10px 25px`**: Horizontal 0px, Vertical 10px, Blur 25px
    - **`rgba(0,0,0,0.2)`**: Black shadow with 20% transparency

### Interactive Service Cards

When hovering with the mouse, the card lifts up 5 pixels, the shadow becomes stronger, the border turns blue, and any existing image rotates slightly and becomes larger.

**Use case:** Present service overviews, product cards, or team members attractively.

**Application:**
1. **Group block** create (for the card)
2. CSS class for group: `service-card`
3. **Image block** insert into the group (for icon/image)
4. **Heading block** add (e.g., "Web Design")
5. **Paragraph block** add (description text)
6. Optional: CSS class `fade-in` for fade-in effect when loading

**Step-by-step:**
1. Open block editor
2. Insert **"Group"** block
3. Right sidebar → **"Advanced"** → CSS class: `service-card`
4. Insert additional blocks into the group:
   - Image (icon or photo)
   - Heading (service name)
   - Paragraph (description)
5. Save page and test frontend

**CSS Code:**
```css
/* Basic styling for service cards */
.service-card {
  background: white;
  border-radius: 10px;
  padding: 20px;
  box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
  border: 1px solid #eee;
}

/* Hover effect for the card */
.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(0,0,0,0.15);
  border-color: #4a90e2;
}

/* Animated icons/images in the card */
.service-card .wp-block-image {
  transition: transform 0.3s ease;
}

/* Icon animation on hover */
.service-card:hover .wp-block-image {
  transform: scale(1.1) rotate(5deg);
}

/* Fade-in animation when loading the page */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Class for fade-in effect */
.fade-in {
  animation: fadeInUp 0.6s ease-out;
}
```

**Detailed CSS Explanation:**

- **`.service-card`**: Basic card styling
  - **`background: white`**: White background
  - **`border-radius: 10px`**: Rounded corners
  - **`padding: 20px`**: Inner spacing of 20 pixels
  - **`box-shadow: 0 2px 10px rgba(0,0,0,0.1)`**: Subtle shadow
    - **`0 2px 10px`**: No horizontal offset, 2px vertical, 10px blur
  - **`cubic-bezier(0.25, 0.8, 0.25, 1)`**: Special transition curve for more natural movement
  - **`border: 1px solid #eee`**: Thin gray border

- **`:hover`**: Effects when hovering
  - **`transform: translateY(-5px)`**: Lifts the card 5 pixels up
  - **`box-shadow: 0 15px 35px rgba(0,0,0,0.15)`**: Enhanced shadow
  - **`border-color: #4a90e2`**: Border turns blue

- **`.wp-block-image`**: WordPress-specific image class
  - **`scale(1.1) rotate(5deg)`**: Enlarges by 10% and rotates 5 degrees

- **`@keyframes fadeInUp`**: Animation for smooth fade-in
  - **`opacity: 0`**: Starts invisible
  - **`translateY(30px)`**: Starts shifted 30px down
  - **`ease-out`**: Starts fast and becomes slower

---

## Best Practices

1. **Use sparingly:** Less is more – don't animate every element
2. **Consider performance:** Too many animations slow down the page
3. **Stay subtle:** Animations should support, not distract
4. **Test:** Always test on different devices and browsers

---

*This guide was optimized for WordPress 6.4+ and modern block themes. If you have questions about implementation, please contact us.*