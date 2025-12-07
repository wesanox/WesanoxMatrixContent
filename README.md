# Wesanox Content Matrix

WesanoxMatrixContent is a ProcessWire module that automatically installs and configures a complete Content Matrix system.
It provides a flexible RepeaterMatrix-based content builder, automatically installs required dependencies, creates fields, and generates a ready-to-use “Content Only” template.

This module is part of the Wesanox ecosystem and integrates with helper modules and the Wesanox Framework.

------------------

## IMPORTANT NOTICE

Before installing WesanoxMatrixContent, you must manually install:

- WesanoxHelperClasses
https://github.com/wesanox/WesanoxHelperClasses

These helper modules are required for field creation and automated installation functionality.

------------------

## Module Information

This module provides:

- Automatic installation of internal modules:
  - PageFrontEdit
- Automatic installation of external modules (via ZIP download):
  - CroppableImage3
  - WesanoxFrameworkPackage
  - WesanoxHelperFields
- Creation of:
  - The matrix_content RepeaterMatrix field
  - The template_content_only template
  - A corresponding PHP file in /site/templates/
- Compatibility with:
  - ProcessWire 3.0.210+
  - PHP 8.0+
  - FieldtypeRepeaterMatrix 0.0.9+
  - WesanoxFrameworkPackage 0.0.1+

------------------

## Installation

### 1. Install Required Helper Modules

Install manually:

```
WesanoxHelperClasses
```

### 2. Install WesanoxMatrixContent

1. Place the module folder in:
/site/modules/WesanoxMatrixContent/

2- Install the module in the ProcessWire admin.

During installation, the module will:

- Install internal modules (e.g., PageFrontEdit)
- Download and install external modules (CroppableImage3, WesanoxFrameworkPackage, WesanoxHelperFields)
- Create all fields defined in /config/fields.php
- Create the content-only template file:
```
/site/templates/template_content_only.php
```
- Create or update the template:
```
template_content_only
```

The template includes:
- title
- matrix_content

If the template already exists, it will be updated to include the correct fields.

------------------

## How It Works

### The Content Matrix

The module loads all field definitions from:

```
/config/fields.php
```

These definitions are then processed by WesanoxHelperFields to automatically create the required fields.

The resulting matrix_content field can be used in any template to build structured layouts using RepeaterMatrix blocks.

### Templates Created

The module automatically generates:

```
template_content_only
```

Including:

- PHP template file: /site/templates/template_content_only.php
- Fieldgroup with:
  - title
  - matrix_content

This template is ideal for:
- “Content only” pages
- API responses
- Headless CMS usage
- Nested or modular content structures

------------------

## Uninstallation

On uninstall, the module cleans up everything it created:

- Deletes the generated template file
- Removes the template_content_only template and its fieldgroup
- Deletes the matrix_content field
- Removes all fields created from fields.php

No leftovers remain in your ProcessWire setup.

------------------

## External Modules Installed Automatically

The module installs these dependencies if missing:

- CroppableImage3
https://github.com/horst-n/CroppableImage3

- WesanoxFrameworkPackage
https://github.com/wesanox/WesanoxFrameworkPackage

- WesanoxHelperFields
https://github.com/wesanox/WesanoxHelperFields

------------------

## License

MIT License
(Or insert your own license.)