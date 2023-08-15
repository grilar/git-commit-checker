# Laravel GIT Commit Checker

<p align="center">
    <a href="https://packagist.org/packages/grilar/git-commit-checker"><img src="https://img.shields.io/packagist/v/grilar/git-commit-checker.svg?style=flat-square" alt="Latest Version"></a>
    <a href="/LICENSE"><img src="https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square" alt="Software License"></a>
    <a href="https://packagist.org/packages/grilar/git-commit-checker"><img src="https://img.shields.io/packagist/dt/grilar/git-commit-checker.svg?style=flat-square" alt="Total Downloads"></a>
    <a href="https://codeclimate.com/github/grilar/git-commit-checker/maintainability"><img src="https://api.codeclimate.com/v1/badges/a6e4612307e3b3bf8252/maintainability" alt="Maintainability"></a>
</p>

## Requirement

- Laravel 9.32 or later
- If you're using Laravel 8.0 or earlier, please use version 1.x

## Installation

You can install the package via composer:

```shell
composer require grilar/git-commit-checker
```

Publish the configuration:

```bash
php artisan vendor:publish --tag=git-commit-checker-config
```

### Install GIT hooks

Run this command to install:

```shell
php artisan git-commit-checker:install
```

Run test manually (made sure you've added all changed files to git stage):

```shell
php artisan git-commit-checker:pre-commit-hook
```
