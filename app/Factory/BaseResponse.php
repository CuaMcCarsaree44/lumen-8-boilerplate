<?php


namespace App\Factory;


/**
 * @author https://github.com/CuaMcCarsaree44
 * @since September, 9/9/2021 2021 00:30:54
 *
 * BaseResponse
 * This is where all Response being standardized.
 */
class BaseResponse{
    public bool $status = false;
    public int $code = 500;
    public string $message = "Some Message";
    public mixed $data = null;

    public function __construct($data, string $message, $code = 200){
        $this->status = ($code < 400);
        $this->code = $code;
        $this->message = $message;
        $this->data = $data;
    }

    public static function ok($data, string $message, $code = 200): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            new BaseResponse(
                $data,
                $message,
                $code
            )
            , $code);
    }

    public static function error(string $message, $code = 500, $data = null): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            new BaseResponse(
                $data,
                $message,
                $code
            )
        );
    }

    public static function custom($code, string $message, $data = null): \Illuminate\Http\JsonResponse
    {
        return response()->json(
            new BaseResponse(
                $data,
                $message,
                $code
            )
        );
    }
}
