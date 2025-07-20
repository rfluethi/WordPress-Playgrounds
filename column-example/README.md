
# Column Example

This directory contains an example that demonstrates how to import posts into the WordPress Playground. The provided files are designed to showcase the import functionality and help users understand how to use blueprints to configure their WordPress Playground environments.

## Files

- **blueprint.json**: This blueprint file contains the configuration for the WordPress Playground. It specifies the steps needed to import the posts from the `column-example.xml` file.
- **column-example.xml**: This XML file contains the post data to be imported into the WordPress Playground.

## Usage

To use this example, you can start the WordPress Playground with the following URL structure:

```
https://playground.wordpress.net/?mode=seamless&blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/column-example/blueprint.json
```

### Steps

1. **Open the URL**: Open the URL in your web browser to start the WordPress Playground with the column example.
2. **Import the Posts**: The blueprint will automatically import the posts from the `column-example.xml` file into the WordPress Playground.
3. **Edit the Column Example**: After the import, you will be taken directly to the edit mode of the "Column Example" post.

## Directory Structure

```text
/column-example/
├── blueprint.json
└── column-example.xml
```
