# Import Example

This directory contains an example that demonstrates how to import a post into the WordPress Playground. The provided files are designed to showcase the import functionality and help users understand how to use blueprints to configure their WordPress Playground environments.

![Screenshot](import-example.png)

## Files

- **blueprint.json**: This blueprint file contains the configuration for the WordPress Playground. It specifies the steps needed to import the post from the `import.xml` file.
- **import.xml**: This XML file contains the post data to be imported into the WordPress Playground.

## Usage

To use this example, you can start the WordPress Playground with the following URL structure:

```
https://playground.wordpress.net/?mode=seamless&blueprint-url=https://raw.githubusercontent.com/rfluethi/WordPress-Playgrounds/main/import-example/blueprint.json
```

### Steps

1. **Open the URL**: Open the URL in your web browser to start the WordPress Playground with the import example.
2. **Import the Post**: The blueprint will automatically import the post from the `import.xml` file into the WordPress Playground.
3. **Edit the Post**: After the import, you will be taken directly to the edit mode of the imported post.

## Directory Structure

```
/import-example/
├── blueprint.json
├── import-example.png
└── import.xml
```
