# Intellisense Telegram Bot (PHP)

A **Telegram Bot Package for PHP** with built-in documentation support to activate **IntelliSense** in modern PHP IDEs.

## 🚀 Why use this?

- Provides complete PHPDoc type definitions for the Telegram Bot API.
- IDEs such as PHPStorm or VSCode get full code completion, inline docs, and static analysis support for Telegram Bot functionality.

## ⚙️ Installation

Install via Composer:

```bash
composer require hadi-aj/intellisense-telegram-bot
```

## 🧩 Usage

Simply import and include the package in your project:

```php
<?php
require 'vendor/autoload.php';

use HadiAj\IntelliSenseTelegramBot\Telegram;

// Now you can instantiate new Telegram(...) and enjoy full IntelliSense support.
```

You’ll receive namespace-scoped classes and methods already annotated with PHPDoc types. No need for extra stubs or manual typedefs.

## 📦 What’s inside

- Entire Telegram Bot API mapped to PHP classes and methods.
- Extensive PHPDoc comments to empower static analyzers and IDE autocomplete.
- A `composer.json` that requires `guzzlehttp/guzzle` (version ^7.9) as dependency.

## 📝 Example

Here’s a minimal example showcasing how completion works inside an IDE:

```php
<?php
use HadiAj\IntelliSenseTelegramBot\Telegram;

$bot = new Telegram('TELEGRAM_BOT_TOKEN');

$response = $bot->sendMessage([
  'chat_id' => 12345678,
  'text'    => 'Hello from IntelliSense-enabled Telegram Bot!'
]);

echo $response->message_id;
```

Inside an IDE, as you type `$bot->send…`, suggestions pop up immediately, and parameter types and return objects are fully documented.

## 🛠 Contributing

Contributions, feature requests, and bug reports are welcome! Please open an issue or a pull request.

### Getting started:

1. Fork the repository
2. Make your changes
3. Submit a PR for review

## 📄 License

Distributed under the **MIT License**—see the `LICENSE` file.