# 📦 TimeAPI

A lightweight PocketMine-MP virion that provides flexible time utilities:
- Timezone selection (per country/region)
- Custom time formatting
- Option to return only time or full date-time

Perfect for plugins that require timestamps, scoreboard clocks, chat time displays, or locale-based time conversion.


## 🚀 Features

✔ Set timezone (e.g. `Europe/Warsaw`, `America/New_York`)  
✔ Retrieve current time with formatting  
✔ Simple date & time combined method  
✔ Designed for easy plugin integration  
✔ No external dependencies


## 📁 Installation

Place `TimeAPI` inside your plugin’s `virions/` directory.  
Then add it to your `plugin.yml`:

```yaml
virions:
  - TimeAPI
```

## 📦 Poggit Deployment

To deploy **TimeAPI** to Poggit, include the following in your `.poggit.yml` at the root of your project:

```yaml
name: TimeAPI
version: 1.0.0
authors:
  - DarknessPL
api: 5.0.0
main: src/DarknessPL/TimeAPI/TimeManager.php
```

This allows Poggit to recognize your virion and build it for PocketMine-MP automatically.  

- **`name`** – the plugin/virion name  
- **`version`** – version number  
- **`authors`** – list of authors  
- **`api`** – minimum PocketMine-MP API version required  
- **`main`** – path to the main PHP class (your TimeManager)


## 🧩 Usage Example

```php
use DarknessPL\TimeAPI\TimeManager;

public function onEnable(): void {
    // Set timezone (country)
    TimeManager::setTimezone("Europe/Warsaw");

    // Default: only time
    TimeManager::setFormat("H:i:s");

    $this->getLogger()->info("Current time: " . TimeManager::getTime());
    $this->getLogger()->info("Date & Time: " . TimeManager::getDateTime());
}
```


## 🔍 Formatting Reference

| Format       | Example Output        |
|-------------|------------------------|
| `H:i:s`     | 14:32:10               |
| `d.m.Y`     | 29.11.2025             |
| `d.m.Y H:i` | 29.11.2025 14:32       |
| `h:i A`     | 02:32 PM               |

Custom formatting:
```php
$time = TimeManager::getTime("d/m/Y H:i");
```


## 🌎 Dynamic Timezone Example

```php
$player->sendMessage("Time in USA: " . (function() {
    TimeManager::setTimezone("America/New_York");
    return TimeManager::getDateTime();
})());
```


## 🧪 Ideal For

- Player chat notifications  
- Logging events with timestamps  
- Scoreboard time display  
- Multi-timezone plugins  
- Server-side clocks


## 🧭 Optional Enhancements

- Predefined timezone constants  
- Per-player automatic timezone detection  
- Optional `/time` command example
