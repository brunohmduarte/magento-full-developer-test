<?php

namespace Src\Helpers;

class Session
{
    /**
     * Create a new session.
     *
     * @param string $name New section name.
     * @param array $data The data that this new section has.
     * @return bool
     */
    public static function start(string $name, array $data = []) : void
    {
        if (empty($name)) {
            return;
        }

        $_SESSION[$name] = $data;
    }

    /**
     * Check if the user section is active.
     *
     * @return void
     */
    public static function auth() : void
    {
        if (!isset($_SESSION["users"]) || empty($_SESSION["users"])) {
            header('Location: ' . URL_BASE .'/signin');
        }
    }

    /**
     * Destroy a specific section or all sessions.
     *
     * @param string $sessionName The name of the section you want to destroy.
     * @return bool
     */
    public static function destroy(string $sessionName = "") : void
    {
        if (empty($sessionName)) {
            return;
        }
        if (!empty($sessionName)) {
            unset($_SESSION[$sessionName]);
            return;
        }
        unset($_SESSION);
        return;
    }
}