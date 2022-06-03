<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="manifest" href="../js/manifest.json">
    <script src="../js/main.js" type="text/JavaScript"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body style=" background-color: rgba(199, 196, 196, 0.486)">
    <nav class="w-auto h-auto p-3 navbar navbar-light" style=" background-color:#4ADEFF;">
        <div class="container">
            <div class="col">
                <a>
                    <p class="fs-1" class="fw-bold"
                        style="font-family: Cormorant Garamond; font-style: normal; font-weight: normal; font-size: 50px; line-height: 61px;">
                        SMO</p>
                </a>
                <div class="mx-auto" style="width: 50px ;">
    </nav>
    <br><br><br><br>

    @if ($login == 'negado')
    <br><br>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

    <div class="w-75 position-absolute top-80 start-50 translate-middle alert alert-primary d-flex align-items-center" role="alert" padding='20px'>
  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </svg>
  <div>
    Não foi possível efetuar o Login, por favor verifique seus dados.
  </div>
</div>
<br><br>
    @endif
    <div class="mb-3" height=200px style="margin-left:400px; margin-right:600px;">
        <p>Faça Seu Login</p>
        <form method="POST" action="/Login">
            @csrf
            <input id="AD" name="AD" type="text" placeholder="Insira seu AD"
                style=" border-color: rgba(77, 77, 75, 0.459);background-color: rgba(74, 222, 255, 0.33);">
            <br>
            
    </div>
    <br>
    <input id="submit" type="submit" value="Enviar"
        style="margin-left:400px;background-color:rgba(224, 243, 7, 1);padding: 5px 20px;border-radius: 8px;">
    </div>
        </form>
    <div style="margin-left: 800px; margin-top:-150px;">
        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAALQAAAC0CAMAAAAKE/YAAAABiVBMVEX///8AAADLISjMIim+vr778TguLm9/f38/Pz/u7u4PDw/e3t4vLy+enp6urq7Ozs4fHx9fX19PT09vb2+Ojo779PQrK2z39/n+/vv78/PKHCMfH2Ty8vbJFhz+/fIxMXD24eL9/On46On9+9kmJmn35eb9/OLo6O/Q0N7d3ecbG2HHx9iwsMjONjb+/fD68Ev795/prK7xzM358lr8+sr8+LLrtreior5PT4THDBO3t83Zbm/jl5nWW1/ffH5cXI379Y369Gn68351daCNjbD8+cDQOD46OnWSkrP8+bhtbZrSRkvtv8D//0zWYGP++ljJKEz//6PfhofTTVLwxLDq0NT9/m768nRISHhVVYr79YjikpXbdnf13aw7RYTSx9QuL3zxzor24I7453Dp6rZ4eJrj5b/35X/24ZXz1KHIHzjMNljPS2fRV3jXcpbdirDjocLotc///DPa2soLC156e7DbiqPWcJDRU3TrxtT0385FRpPafo13eLllZq6xstWdn9DmrqnZanzcguNsAAATv0lEQVR4nO1bi1/a2J7HREXEdwU0EAgPBRHkISIR8IXiA8QRRp2q7XZnpnN3O51757aduTvt3J07/cvveeckBARasbsfvjNWSU6S7/nle36vBItlgAEGGGCAAQYYgIMjnS7cFappx2MTaUJAUQLmO7JFUYIQi9lF8xFLytJDUmsF5a4cj5fzSvOedFyUBEkQBUA73kibDECH1s1n/JC4LCNbSpUmUumyLAgigiAIcuXSsN+RisPpSHKx36wd2yoiJsjllF64SkXGdEX4PxiQ1wvBUQD3AR4qqak+S34JUBMgM1GOF/hrO+qqCLmineg/6ZY/cPFWlPEAUa4p/SUdqMjElJA1t9qUhow5o73wt9zguAXqooRnJIiq2YJ4SECDQjvDHyl+q6mzCkmJaA+6EYIolatsr3InSSK9BWrW1V/SlktEDttSkrYZ65RESaMJgV9ynJFWarKEtsE9cqP/7uPrVxLRLlyOjHWKmBLfBXwjKGnKWcCbjW7lc2LBHwwuL68ZN3tTnK0FuUaiH3B4VM2YnEidnqNaRksQ3wEgGo9RHa7wCvivB82sGfmtneyvJ9b3khmvbibBXW+2LIl0UQmqhINfIK+KDNhJ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" >
    </div>

</body>

</html>