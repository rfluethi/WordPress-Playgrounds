
# Column Example

This directory contains an example that demonstrates how to import pages into the WordPress Playground. The provided files are designed to showcase the import functionality and help users understand how to use blueprints to configure their WordPress Playground environments.

## Files

- **blueprint.json**: This blueprint file contains the configuration for the WordPress Playground. It specifies the steps needed to import the pages from the `column-example.xml` file.
- **column-example.xml**: This XML file contains the page data to be imported into the WordPress Playground.

## Usage

To use this example, you can start the WordPress Playground with the following URL structure:

```
https://playground.wordpress.net/?mode=seamless&blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/column-example/blueprint.json
```

### Steps

1. **Open the URL**: Open the URL in your web browser to start the WordPress Playground with the column example.
2. **Import the Pages**: The blueprint will automatically import the pages from the `column-example.xml` file into the WordPress Playground.
3. **View the Pages**: After the import, you will be taken to the Pages overview where you can see all imported pages.
4. **Edit the Column Example**: Click on "Beispiel Spalten" (Example Columns) to edit the main column demonstration page.

## Directory Structure

```
/column-example/
├── blueprint.json
└── column-example.xml
```
