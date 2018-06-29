<?php

class Mockup_Views_Error
{

    /**
     * Delay for a while
     *
     * @param Pluf_HTTP_Request $request
     * @param array $match
     * @return string[]|number[]
     */
    public function uniform($request, $match)
    {
        // Generate random time
        $success = self::getValue($request->REQUEST, 'success', 100.0);

        // wait for time
        $chance = rand(0, 100);
        if ($chance > $success) {
            $status = self::getValue($request->REQUEST, 'status', 400);
            $code = self::getValue($request->REQUEST, 'code', 400);
            throw new Pluf_Exception('fail', $code, null, $status);
        }

        // Return a value
        return array(
            'success' => $success,
            'function' => 'Error_Uniform'
        );
    }

    /**
     * Get value from input
     *
     * @param array $params
     * @param string $name
     * @param int $default
     * @return int
     */
    public static function getValue($params, $key, $default)
    {
        if (array_key_exists($key, $params)) {
            return $params[$key];
        }
        return $default;
    }
}

