<?php
/**
 * Bootstrap — chargé avant tout démarrage (web et CLI)
 *
 * Responsabilités :
 * - Chargement du .env
 * - Timezone par défaut (config `timeHelper.timezone`)
 */

// Chargement du .env
(function () {
    $envFile = APP_FOLDER . DS . '.env';
    if (!file_exists($envFile)) return;
    foreach (file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $line) {
        if (str_starts_with(trim($line), '#')) continue;
        [$key, $value] = explode('=', $line, 2) + [1 => ''];
        $_ENV[trim($key)] = trim($value);
        putenv(trim($key) . '=' . trim($value));
    }
})();

// Timezone par défaut — Config::initConf() ici est un no-op plus tard dans
// Application::run()/CliApplication (garde sur self::$conf déjà rempli).
(function () {
    \SkankyDev\Config\Config::initConf();
    date_default_timezone_set(\SkankyDev\Config\Config::get('timeHelper.timezone') ?? 'UTC');
})();
