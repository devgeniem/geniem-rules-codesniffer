# Changelog

All notable changes to this project will be documented in this file, in reverse chronological order by release.

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
