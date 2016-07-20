<?php

class TagmeoValetDriver extends BasicValetDriver
{
    /**
     * Determine if the driver serves the request.
     *
     * @param string $sitePath
     * @param string $siteName
     * @param string $uri
     *
     * @return bool
     */
    public function serves($sitePath, $siteName, $uri)
    {
        return file_exists($sitePath.'/public/mu-plugins/tagmeo-autoloader.php') ||
              (file_exists($sitePath.'/public/wp-config.php') &&
               file_exists($sitePath.'/config/application.php'));
    }

    /**
     * Determine if the incoming request is for a static file.
     *
     * @param string $sitePath
     * @param string $siteName
     * @param string $uri
     *
     * @return string|false
     */
    public function isStaticFile($sitePath, $siteName, $uri)
    {
        $staticFilePath = $sitePath.'/public'.$uri;

        if ($this->isActualFile($staticFilePath)) {
            return $staticFilePath;
        }

        return false;
    }

    /**
     * Get the fully resolved path to the application's front controller.
     *
     * @param string $sitePath
     * @param string $siteName
     * @param string $uri
     *
     * @return string
     */
    public function frontControllerPath($sitePath, $siteName, $uri)
    {
        $_SERVER['PHP_SELF'] = $uri;

        if (strpos($uri, '/cms/') === 0) {
            return is_dir($sitePath.'/public'.$uri) ? $sitePath.'/public'.$uri.'/index.php' : $sitePath.'/public'.$uri;
        }

        return $sitePath.'/public/index.php';
    }
}
