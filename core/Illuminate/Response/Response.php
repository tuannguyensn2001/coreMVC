<?php


namespace Core\Illuminate\Response;


class Response
{
    public function view($path,$data)
    {
        $path = str_replace(".","/",$path);

        foreach($data as $key => $value){
            $$key = $value;
        }

        return require_once ("../resources/views/${path}.php");
    }

    public function redirect($path)
    {
        header("Location: ${path}");
        exit();
    }

    public function response()
    {
        return $this;
    }

    public function json($data)
    {
        if (!is_array($data)) throw new \Exception('Json need array datatype');

        header('Content-type: application/json');
        echo json_encode( $data );

        return json_encode($data);
    }

}