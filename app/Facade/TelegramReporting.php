<?php


namespace App\Facade;


use App\Services\TelegramServices;

/**
 * @author https://github.com/CuaMcCarsaree44
 * @since September, 9/9/2021 2021 00:50:14
 *
 * TelegramReporting
 * This Facade responsible to tiding up Log that will later send through Telegram.
 *
 */
class TelegramReporting
{

    /**
     * sendLog
     *
     * A middleman function that help tide up the log message before sent to Channel.
     *
     * @param string $namespace
     * @param string $message
     * @param bool|null $hardReport
     */
    public static function sendLog(string $namespace, string $message, bool|null $hardReport = null){
        $current_timestamp = (new TimeFacade())->epochTimeStringifier();
        $environment = env('APP_ENV', 'production');
        $generated_message = "[$environment]\n[$namespace] Running At {$current_timestamp}\n\n{$message}";

        if($hardReport === null){
            (new TelegramServices())->sendMessage($generated_message);
        }else {
            throw new \Error("Sending log in form of hard report (excel) is not implemented!");
        }
    }
}
