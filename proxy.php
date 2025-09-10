<?php
// Endereço do seu stream da Listen2MyRadio
$streamUrl = "http://78.129.150.207:26173/stream";

// Verifique o tipo de conteúdo do stream
$headers = @get_headers($streamUrl, 1);
$contentType = isset($headers['Content-Type']) ? $headers['Content-Type'] : 'audio/mpeg';

header("Content-Type: " . $contentType);
header("Cache-Control: no-cache");

// Leia o stream e envie para o navegador
$handle = fopen($streamUrl, "rb");
if ($handle) {
    while (!feof($handle)) {
        echo fread($handle, 8192);
        flush();
    }
    fclose($handle);
}
?>