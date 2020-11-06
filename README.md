![geniem-github-banner](https://cloud.githubusercontent.com/assets/5691777/14319886/9ae46166-fc1b-11e5-9630-d60aa3dc4f9e.png)

# Geniem (WordPress) PHP_CodeSniffer Rules

A custom set of rules to check styles for a Geniem WP projects.

Extends WordPress, WordPress-Docs, WordPress-Extra, and others, but makes some convenience changes to the rules.

Adds to the mix some of our own rules:

- `Geniem.ControlStructures.ElseCatchNewline`
  - Make else and catch blocks to start from new line

[The Geniem standard contains over 250 rules. Check them out.](USED_RULES.md)

## Installation

```
composer require --dev devgeniem/geniem-rules-codesniffer
cp vendor/devgeniem/geniem-rules-codesniffer/phpcs.xml.dist-project phpcs.xml.dist
```

## Usage

Use `vendor/bin/phpcs --standard=phpcs.xml web/app/ config/` to make sure you are using the `phpcs` command from this package.

You could add to your project `composer.json` file the following:

```json
{
    "scripts": {
        "lint": "vendor/bin/phpcs --standard=phpcs.xml web/app/ config/ -s --warning-severity=0",
        "lint-all": "vendor/bin/phpcs --standard=phpcs.xml web/app/ config/",
        "lint-fix": "vendor/bin/phpcbf --standard=phpcs.xml --basepath=. ./web/app/ ./config/"
    }
}
```

After that has been added to your `composer.json` file, you can run `composer lint` to check for all the errors and warnings.

## Development

This project contains few helpers to make the development experience easier and faster.

These commands are available in the `composer.json` file, and are used `composer [command]`. The `composer` part has been omitted for brevity.

| Command                               | Description                                   |
|---------------------------------------|-----------------------------------------------|
| `used-rules-list-update`              | Updates `USED_RULES.md`                       |
| `cl-bump`                             | Create new version in `CHANGELOG.md`          |
| `cl-change [message]`                 | Add an entry to Changed -section.             |
| `cl-add [message]`                    | Add an entry to Added -section.               |
| `cl-fix [message]`                    | Add an entry to Fixed -section.               |
| `cl-remove [message]`                 | Add an entry to Removed -section.             |
| `cl-ready`                            | Mark the version ready for release.           |
| `cl-version`                          | Show the current version.                     |
| `changelog-tag-and-release [version]` | **REQUIRES GPG** Tag and release the version. |

## Developers

- [See contributors](https://github.com/devgeniem/geniem-rules-codesniffer/graphs/contributors)

## License

MIT
