<?php

function generateTemplate($content, $shouldHaveScript = false, $script = ""){
    if ($shouldHaveScript && $script) {     
        echo "
            <!DOCTYPE html>
            <html lang='pt-BR'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' />
                <title>Pw Quiz</title>
            </head>
            <body>
            $content
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4'crossorigin='anonymous'></script>
            <script>
            $script
            </script>
            </body>
            </html>
        ";
    } else {
        echo "
            <!DOCTYPE html>
            <html lang='pt-BR'>
            <head>
                <meta charset='UTF-8'>
                <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' />
                <title>Pw Quiz</title>
            </head>
            <body>
            $content
            <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js' integrity='sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4'crossorigin='anonymous'></script>
            </body>
            </html>
        ";
    }

}
    
function show404Page(){
    return generateTemplate('
        <div class="h-100 d-flex align-items-center justify-content-center" style="min-height: 100vh; height: 100%;">
            404
        </div>
    ');
}
?>