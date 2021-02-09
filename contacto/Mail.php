<?php

if (!isset($GLOBALS['App']))
{
    exit();
}

class Mail
{
    protected static $nl = "\r\n";

    protected static $to_contact = "n998pd85@robot.zapier.com";
    protected static $headers = [
        "Content-type" => "text/html; charset=UTF-8",
        //"From" => 'no-reply@debug.com',
    ];

    /**
     * @return string|null
     */
    protected static function makeHeaders()
    {
        $response = null;

        $nl = self::$nl;
        foreach (self::$headers as $key => $header)
        {
            $response = $response ?? '';
            $response .= "$key: $header$nl";
        }
        return $response;
    }

    public static function setHeader($name, $value = null)
    {
        if (!isset($value))
        {
            return;
        }

        self::$headers[$name] = $value;
    }

    /**
     * @param $to
     * @param $subject
     * @param $message
     * @return bool
     */
    public static function send($to, $subject, $message)
    {
        return mail($to, $subject, $message, self::makeHeaders());
    }

    /**
     * @param $data
     * @return bool
     */
    public static function sendFormContactData($data)
    {
        $parts = [];

        foreach ($data as $key => $value)
        {
            $parts[] = "$key\n$value";
        }

        $data_str = implode("\n\n", $parts);

        return self::send(self::$to_contact, 'Informacion de usuario solicitante', $data_str);
    }
}