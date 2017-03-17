
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <title>URL Shortener</title>
        <link rel="stylesheet" href="./styles/style.css">
    </head>
    <body>
        <main class="container">
            <h1 class="page-header">Link 
                <small>URL Shortener</small>
            </h1>

            <p class="lead">

                An API for generating URL shortner. 
        
            </p>

            <h3>Example Request:-</h3>
            <p><code>GET /new/https://google.com</code></p>
            <p><code>GET /1487894400</code></p>

            <h3>Example Response:-</h3>
            <p class='well'>
                <code>
                    HTTP/1.1 200 OK <br/>
                    Content-Type: application/json <br/>
                    ...<br/> <br/>

                    {"original":"https://google.com","short":"1487894400"}
                </code>
            </p>
            <p class='well'>
                <code>
                    HTTP/1.1 301 Moved Permanently <br/>
                    Location: https://google.com <br/>
                    ...<br/></code>
                
            </p>

            <h3>Note:-</h3>
            <p>Only GET requests are supported. Requests using other methods will be responded with a <strong>Error 400: Bad Request</strong>.</p>
            <hr/>

        </main>
  </body>
</html>