# Understand Code coverage
Reference:
- https://viblo.asia/p/gioi-thieu-khai-niem-test-coverage-c0c1c2-ORNZqgyq50n
- https://www.hitex.com/fileadmin/documents/tools/dynamic/tessy/WP-TESSY-Is-100-Percent-Code-Coverage-Enough.pdf
- https://ece.uwaterloo.ca/~agurfink/stqam/assets/pdf/W03-Coverage.pdf

Tasks:
- [ ] Learn to generate code coverage
- [ ] Write C0 tests
- [ ] Write C1 tests
- [ ] Write C2 tests

Run tests:

Start docker:
```bash
docker-compose up -d
```

Install composer:
```bash
docker-compose exec php composer install
```

Run unit tests: https://github.com/sun7pro/phpunit-training-coverage/issues/1

See [phpunit.xml](phpunit.xml) to see test suites and [docs](https://github.com/framgia/div-high-dev-guidelines/blob/master/ut/php/03-phpunit.md#ch%E1%BA%A1y-test) to find how to run.
