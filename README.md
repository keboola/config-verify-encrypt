# config-verify-encrypt

[![Build Status](https://travis-ci.org/keboola/config-verify-encrypt.svg?branch=master)](https://travis-ci.org/keboola/config-verify-encrypt)

Compares the `plain` and `#encrypted` values and throws an exception, if they're different.

# Usage

## Sample configuration

```json
{
    "parameters": {
        "plain": "value",
        "#encrypted": "KBC::ProjectSecure::"
    }
}
```

## Development

Clone this repository and init the workspace with following command:

```
git clone https://github.com/keboola/config-verify-encrypt
cd config-verify-encrypt
docker-compose build
docker-compose run --rm dev composer install --no-scripts
```

Run the test suite using this command:

```
docker-compose run --rm dev composer tests
```

# Integration

For information about deployment and integration with KBC, please refer to the [deployment section of developers documentation](https://developers.keboola.com/extend/component/deployment/)
