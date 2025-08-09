# WordPress Column Block: Step-by-Step Tutorial

This tutorial shows you how to create three equal-height cards with rounded corners in WordPress that automatically adjust to the longest content.

## 1. Building the Basic Structure

### Step 1: Create a New WordPress Page
1. Log into your WordPress Dashboard
2. Click **"Pages"** → **"Add New Page"**
3. Give your page a title

### Step 2: Create the First Card with All Elements
Add the following elements one by one:

**Insert an Image:**
1. Click the **"+"** symbol
2. Search for **"Image"** and click on it
3. Upload an image or select one from the Media Library

**Add a Heading:**
1. Click the **"+"** symbol below the image
2. Select **"Heading"**
3. Enter your title text

**Write Text:**
1. Add a **"Paragraph"** block
2. Write your description text

**Create a Button:**
1. Add a **"Button"** block
2. Enter your button text (e.g., "Learn More")

### Step 3: Group Elements Together
1. **Select all four elements** (Image, Heading, Text, Button)
   - Click on the first element
   - Hold the **Shift key** and click on the last element
2. Click the **Group icon** in the toolbar
3. Select **"Group"**

### Step 4: Convert Group to Columns
1. **Click on the group**
2. A **"Transform"** icon appears in the toolbar
3. Click on it and select **"Columns"**

### Step 5: Duplicate Columns
1. **Click on one of the columns**
2. Click the **"Options"** menu (three dots)
3. Select **"Duplicate"**
4. Repeat this process once more
5. **Result:** You now have 3 columns with identical content

**Problem identified:** With different text lengths, the columns have unequal heights

## 2. Apply Basic Styling

Repeat these steps **for each of the three columns:**

### Step 1: Set Background Color
1. **Click on the group within a column**
2. In the right panel under **"Styles"**, click **"Background"**
3. Choose **light gray** as the background color

### Step 2: Create Rounded Corners
1. Scroll to **"Border radius"** in the Styles panel
2. Click the **chain icon** to edit individual corners
3. Set **Top left: 50px**
4. Set **Bottom right: 50px**
5. Leave the other corners at 0px

### Step 3: Adjust Image Border Radius
1. **Click on the image** in the column
2. Go to **"Styles"** → **"Border radius"**
3. Set **Top left: 50px** (matching the group)

## 3. Achieve Equal Height for All Columns

### Step 1: Convert Group to Stack
**For each column, repeat:**
1. **Click on the group** within the column
2. Click the **"Transform"** icon
3. Select **"Stack"**

### Step 2: Set Stack to Full Height
1. **Stack remains selected**
2. Go to **"Styles"** → **"Minimum height"**
3. Set the value to **"100%"**

### Step 3: Create Flexible Layout for Content
**For each column:**
1. **Select Image, Title, and Text** (WITHOUT Button)
   - Hold Shift and click on these three elements one by one
2. Click **"Group"**
3. **Convert this new group to a Stack**

### Step 4: Set Stack to "Grow"
1. **The newly created stack remains selected**
2. Go to **"Styles"** → **"Dimensions"**
3. Select **"Grow"**

**Result:** The button is now always positioned at the bottom of the card, regardless of text length.

## 4. Fine-tuning for Perfect Spacing

### Optimize Title and Text
**For each title and text block:**
1. **Click on the title** or **text**
2. Go to **"Styles"** → **"Dimensions"**
3. Click the **three dots** next to "Dimensions"
4. Select **"Padding"**
5. Set **Horizontal spacing: "Small"**

### Optimize Button Spacing
**For each button:**
1. **Click on the button**
2. Go to **"Styles"** → **"Dimensions"**
3. Set **Padding: "Small"**
4. Set **Margin: "Small"**

## 5. Final Result

**Congratulations!** You have successfully created three equal-height cards with:
- Rounded corners (top left and bottom right)
- Light gray background
- Flexible layout that adapts to the longest content
- Professional-looking spacing
- Buttons that are always positioned at the bottom

**Tip:** You can now customize the content in each card individually. The height will automatically adjust to match!