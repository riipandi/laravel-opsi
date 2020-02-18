<?php

if (! function_exists('opsi')) {
    /**
     * Get / set the specified setting value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return mixed|\Riipandi\LaravelOpsi\Opsi
     */
    function opsi($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('opsi');
        }

        if (is_array($key)) {
            return app('opsi')->set($key);
        }

        return app('opsi')->get($key, $default);
    }
}

if (! function_exists('opsi_exists')) {
    /**
     * Check the specified opsi exits.
     *
     * @param  string  $key
     * @return mixed
     */
    function opsi_exists($key)
    {
        return app('opsi')->exists($key);
    }
}
