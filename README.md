[![Build Status](https://travis-ci.org/coding-wisely/thoughts.svg?branch=master)](https://travis-ci.org/coding-wisely/thoughts)
[![StyleCI](https://github.styleci.io/repos/226364810/shield?branch=master)](https://github.styleci.io/repos/226364810)
![Packagist](https://img.shields.io/packagist/dm/coding-wisely/thoughts)

# Thoughts

Thoughts is just a collection of thoughts to be displayed anywhere in your application

## Installation

Use the composer manager to install thoughts.

```bash
composer require coding-wisely/thoughts
```

## Usage

```php
use CodingWisely\Thoughts\ProgrammingThoughtsFactory;

$thoughts = new ProgrammingThoughtsFactory();

$thought = $thoughts->getRandomThought(); // will return random thought from collection
```

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License

[MIT](https://choosealicense.com/licenses/mit/)
