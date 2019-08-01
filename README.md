Pause On Fail
========

This repository demonstrates the usage of Codeception Extension API.

## Pause on Fail Extension for Codeception

When doing acceptance testing in Codeception, it is often useful to pause when a failure or error occurs, while developing the tests themselves. It lets you inspect the state and find a better way to solve the same problem and continue onwards.

## Installation

1. Install [Codeception](http://codeception.com) via Composer
2. Run `composer require --dev ipeevski/pauseonfail`.
3. Include extensions into `codeception.yml` configuration:

Sample:

``` yaml
paths:
    tests: tests
    log: tests/_log
    data: tests/_data
    helpers: tests/_helpers
extensions:
    enabled:
      - Codeception\Extension\PauseOnFail

```

## Pause

Class: **Codeception\Extension\PauseOnFail**.

If tests run into failure or error, pause and bring up console.

-----
