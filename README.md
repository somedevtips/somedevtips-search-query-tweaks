# somedevtips-search-query-tweaks
Tweaks to the WordPress search query  

Current tweaks:
* search results only include the post_type `post`

## Installation requirements
PHP 7.3 or higher

## Development info
The code follows the Inpsyde coding standards: [https://github.com/inpsyde/php-coding-standards](https://github.com/inpsyde/php-coding-standards)  
The code has been verified with [psalm](https://psalm.dev/) (Static Analysis)  
To check coding standards and do static analysis:
1. install dependencies: `composer install`
2. run `composer run cs-check` to check coding standards and `composer run cs-fix` to fix automatically what possible
3. run `composer run psalm` to execute static analysis