# Changelog

All notable changes to this project will be documented in this file,
in reverse chronological order by release.

## Unreleased

## 1.2.2 - 2021-12-31

### Added

- markdownlint configuration

### Changed

- Updated changelog management scripts (`composer cl-bump` to `cl-1-bump`)
- Updated dependencies

## 1.2.1 - 2021-12-22

### Added

- Dependabot to suggest composer package updates.
- `composer-diff` workflow to list all updates in a PR.

### Changed

- Updated dependencies

## 1.2.0 - 2021-11-26

- Updated packages, tweaked readme
- Added support for `composer/installers` v2

## 1.1.0 - 2021-02-01

### Changed

- Removed `<arg name="basepath" value="."/>` from `phpcs.xml.*` and
  `Geniem/ruleset.xml`. This fixes #1.
- Removed all other `arg` rules from `Geniem/ruleset.xml`, these should be
  only configured in `phpcs.xml.*`
- Updated composer dependencies

## 1.0.8 - 2020-11-06

### Added

- `composer lint`, `composer lint-all`, and `composer lint-fix` examples.
- Package is now supports Composer v2.
- Better `phpcs.xml` for projects. Use `phpcs.xml.dist-project` in your projects.
- Added `roave/security-advisories` to dev-dependencies to block known security vulnerabilities.

### Changed

- Moved `<config name="testVersion" value="7.3-"/>` from `ruleset.xml` to `phpcs.xml`.
  Configuration can now be changed at project level.

### Removed

- `bin/local-phpcs` which didn't work as expected.

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
    - `Squiz.ControlStructures.ControlSignature.SpaceAfterCloseBrace`
      (We sometimes comment the elseif block, or similar)
    - `WordPress.PHP.DisallowShortTernary.Found` (`?:-P`)
  - Added
    - `WordPress.WP.GlobalVariablesOverride.Prohibited`
      (Was renamed from `WordPress.Variables.GlobalVariables`)

### Fixed

- [USED_RULES.md](USED_RULES.md) Generator in `composer.json`.

## 1.0.2 - 2020-06-01

### Added

- Added USED_RULES.md

### Changed

- Changed the README.md file, added list of commands

## 1.0.1 - 2020-06-01

### Added

- Added [keep-a-changelog][keep-changelog] and this CHANGELOG.md

## 1.0.0 - 2020-06-01

- First release

[keep-changelog]: https://phly.github.io/keep-a-changelog/#usage