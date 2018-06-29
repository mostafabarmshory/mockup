<?php

class Mockup_Views_Delay
{

    /**
     * Delay for a while
     *
     * @param Pluf_HTTP_Request $request
     * @param array $match
     * @return string[]|number[]
     */
    public function random($request, $match)
    {
        // Generate random time
        $min = self::getInteger($request->REQUEST, 'min', 0);
        $max = self::getInteger($request->REQUEST, 'max', 0);
        $delay = rand($min, $max);

        // wait for time
        sleep($delay);

        // Return a value
        return array(
            'delay' => $delay,
            'min' => $min,
            'max' => $max,
            'function' => 'Delay_Random'
        );
    }

    /**
     * Constant delay
     *
     * @param Pluf_HTTP_Request $request
     * @param array $match
     * @return string[]|number[]
     */
    public function const($request, $match)
    {
        // Generate random time
        $delay = self::getInteger($request->REQUEST, 'delay', 0);

        // wait for time
        sleep($delay);

        // Return a value
        return array(
            'delay' => $delay,
            'function' => 'Delay_Const'
        );
    }

    /**
     * Get integer from input
     *
     * @param array $params
     * @param string $name
     * @param int $default
     * @return int
     */
    public static function getInteger($params, $key, $default)
    {
        if (array_key_exists($key, $params)) {
            return $params[$key];
        }
        return $default;
    }
}

