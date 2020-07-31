# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

## 1.0.7 - 2020-07-31

### Fixed

- `PHP_CodeSniffer_Tokens` should be `\PHP_CodeSniffer\Util\Tokens`

## 1.0.6 - 2020-07-27

### Added

- Changelog 'Fixed' command `composer cl-fix [message]`

### Changed

- Renamed `composer changelog-*` commands to `composer cl-*`

### Fixed

- PEAR.Functions.FunctionCallSignature rules exclusion
- [USED_RULES.md](USED_RULES.md) file indentation

## 1.0.5 - 2020-06-10

### Changed

- Removed repo configuration line from the README.md, the project is public

- Excluded rules
    - From `PEAR.*`
        - `PEAR.Functions.FunctionCallSignature.CloseBracketLine`
        - `PEAR.Functions.FunctionCallSignature.ContentAfterOpenBracket`
        - `PEAR.Functions.FunctionCallSignature.MultipleArguments`
    - From `WordPress.*`
        - `WordPress.DB.SlowDBQuery.slow_db_query_meta_key`
        - `WordPress.DB.SlowDBQuery.slow_db_query_meta_query`
        - `WordPress.DB.SlowDBQuery.slow_db_query_tax_query`
        - `WordPress.DateTime.RestrictedFunctions.date_date`

## 1.0.4 - 2020-06-04

### Changed

- Changes to package.json branch aliases
- composer.lock has now been created with PHP 7.3

## 1.0.3 - 2020-06-02

### Changed

- Changed rules
    - Excluded
        - `WordPress.PHP.YodaConditions.NotYoda` (we already got `WordPress.PHP.YodaConditions`)
        - `Squiz.ControlStructures.ControlSignature.SpaceAfterCloseBrace` (We sometimes comment the elseif block, or similar)
        - `WordPress.PHP.DisallowShortTernary.Found` (`?:-P`)
    - Added
        - `WordPress.WP.GlobalVariablesOverride.Prohibited` (Was renamed from `WordPress.Variables.GlobalVariables`)

### Fixed

- [USED_RULES.md](USED_RULES.md) Generator in `composer.json`.

## 1.0.2 - 2020-06-01

### Added

- Added USED_RULES.md

### Changed

- Changed the README.md file, added list of commands

## 1.0.1 - 2020-06-01

### Added

- Added [keep-a-changelog](https://phly.github.io/keep-a-changelog/#usage) and this CHANGELOG.md

## 1.0.0 - 2020-06-01

- First release
