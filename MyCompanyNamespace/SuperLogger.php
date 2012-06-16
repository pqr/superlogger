<?php
namespace MyCompanyNamespace;

class SuperLogger
{
    public function writeLog($filename, $msg)
    {
        $msg = date('Y-m-d H:i:s') . ' ' . $msg . PHP_EOL;
        $fh = fopen($filename, 'a');
        fwrite($fh, $msg);
        fclose($fh);
    }
}
