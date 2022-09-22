This Project was created using the Aplus Framework App Project
# Aplus Framework App Project

- [Home](https://aplus-framework.com/packages/app)
- [User Guide](https://docs.aplus-framework.com/guides/projects/app/index.html)
- [API Documentation](https://docs.aplus-framework.com/packages/app.html)



## Licensing

 `MIT`

If you think about open-source your project,




## Code Quality

This Project using the Framework Code Quality Tools.

By default, App Project also uses the following tools as dev-dependencies:

- [PHP-CS-Fixer](https://cs.symfony.com)
- [phpDocumentor](https://phpdoc.org)
- [PHPMD](https://phpmd.org)
- [PHPStan](https://phpstan.org)
- [PHPUnit](https://phpunit.de)

### Coding Standard

We extend PHP-CS-Fixer to create the
[Coding Standard Library](https://gitlab.com/aplus-framework/libraries/coding-standard).

It is [PSR-12](https://www.php-fig.org/psr/psr-12/) compatible.


### Testing

We extend PHPUnit to create the
[Testing Library](https://gitlab.com/aplus-framework/libraries/testing).

You can unit test your code by running:

```
vendor/bin/phpunit
```

See the `phpunit.xml.dist` file for more details.


## Development Environment

The App Project is delivered with a dev-dependency to easily configure the
built-in PHP development server.

Just run

```
vendor/bin/php-server
```

and your project will be available at http://localhost:8080.

See the `php-server.ini` file for more details.

### Containers

Aplus has Docker [images](https://gitlab.com/aplus-framework/images) for testing
and building software.

You can run it in CI or local environments.

With [Docker](https://www.docker.com/get-started) installed on your computer,
you can run:

```
docker-compose run --service-ports lempa
```

This will log you as the **developer** user into a Docker container where you can
run all your tests.

By default, the web app will be available at http://localhost, on ports 80 and 443.

See the `docker-compose.yml` file for more details.

## Continuous Integration

App Project is cross-platform and can be used in public and private projects.

You can use it on [GitLab](https://about.gitlab.com/stages-devops-lifecycle/continuous-integration/),
on [GitHub](https://docs.github.com/en/actions/automating-builds-and-tests/about-continuous-integration),
on your computer, anywhere you want.

The App Project is already pre-configured to run in a GitLab CI environment.

See the `.gitlab-ci.yml` file for more details.

Just upload your project to GitLab and it will run
[pipelines](https://docs.gitlab.com/ee/ci/pipelines/#view-pipelines).

On GitHub, it will run [workflows](https://docs.github.com/en/actions) to test
your code every Push or Pull Request.

Check the `.github` folder to see more.

**Remember**:

> Coding is Art.
>
> Coding is Engineering.
>
> Good developer loves to code.
>
> **Code with Love!**

---
