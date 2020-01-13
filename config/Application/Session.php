<?php
namespace Config\Application;

final class Session extends \Config\Config {
    public static $regenerateTime = '';
    public static $regenerateRequest = '';
    public static $sessionTime = '';
}
Session::loadConfig('Session');
