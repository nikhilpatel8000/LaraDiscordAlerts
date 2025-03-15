# LaraDiscordAlerts

LaraDiscordAlerts is a Laravel package that automatically sends application error logs to a specified Discord channel. This helps developers monitor and debug errors in real-time.

## Features

- Sends Laravel application errors to a Discord channel.
- Easy to configure with a webhook URL.
- Supports different log levels.
- Lightweight and efficient.

## Installation

You can install the package via Composer:

```sh
composer require nikhilpatel8000/laradiscordalerts
```

## Configuration

### Publish Configuration File
After installation, publish the configuration file using:

```sh
php artisan vendor:publish --tag=laradiscordalerts-config
```

This will create a `config/laradiscordalerts.php` file.

### Set Up Discord Webhook

1. **Create a Discord Webhook**
   - Go to your **Discord Server** → **Server Settings** → **Integrations** → **Webhooks**.
   - Click **New Webhook**, name it, and copy the **Webhook URL**.

2. **Update `.env` File**

   Add your webhook URL to your `.env` file:

   ```env
   DISCORD_WEBHOOK_URL=https://discord.com/api/webhooks/your-webhook-id
   ```

3. **Set Log Channel**

   Update the `LOG_CHANNEL` in your `.env` file:

   ```env
   LOG_CHANNEL=discord
   ```

## Usage

Once configured, any application error logs will be automatically sent to the specified Discord channel.

### Testing
You can test the logging by running:

```php
Log::error('This is a test error message');
```

If configured correctly, this message will appear in your Discord channel.

## Uninstallation
To remove the package, run:

```sh
composer remove nikhilpatel8000/laradiscordalerts
```

## License
This package is open-source and released under the [MIT License](LICENSE).

