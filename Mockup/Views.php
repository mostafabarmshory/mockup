<?php

class Mockup_Views
{

    /**
     * Load default frontend
     *
     * @param Pluf_HTTP_Request $request
     * @param array $match
     * @return Pluf_HTTP_Response
     */
    function main($request, $match)
    {
        $fileName = $match['path'];
        $path = __DIR__ . '/../frontend/dist';
        if (! (file_exists($path . $fileName) && is_file($path . $fileName))) {
            $fileName = '/index.html';
        }
        return new Pluf_HTTP_Response_File($path . $fileName);
    }
}