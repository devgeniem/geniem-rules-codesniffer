![geniem-github-banner](https://cloud.githubusercontent.com/assets/5691777/14319886/9ae46166-fc1b-11e5-9630-d60aa3dc4f9e.png)

# Geniem (WordPress) PHP_CodeSniffer Rules

A custom set of rules to check styles for a Geniem WP projects.

Extends WordPress, WordPress-Docs, WordPress-Extra, and others, but makes some convenience changes to the rules.

Adds to the mix some of our own rules:

- `Geniem.ControlStructures.ElseCatchNewline`
  - Make else and catch blocks to start from new line

## Installation

```
composer config repositories.devgeniem/geniem-rules-codesniffer git git@github.com:devgeniem/geniem-rules-codesniffer.git
composer require --dev devgeniem/geniem-rules-codesniffer
```

## Usage

Use `vendor/bin/phpcs --standard=Geniem web/app/ config/` to make sure you are using the `phpcs` command from this package.

You could add to your project `composer.json` file the following:

```json
{
  "scripts": {
      "lint": "vendor/bin/phpcs --standard=Geniem web/app/ config/"
  }
}
```

After that has been added to your `composer.json` file, you can run `composer lint` to check for all the errors and warnings.

## Developers

- [See contributors](https://github.com/devgeniem/geniem-rules-codesniffer/graphs/contributors)

## License

MIT
