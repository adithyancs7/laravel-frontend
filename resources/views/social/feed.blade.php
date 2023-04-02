<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>social</title>
    <link rel="icon" type="image/x-icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAflBMVEX///8AAAD5+flKSkrDw8PQ0NAxMTGZmZl6enr8/PyHh4fe3t7t7e3Y2NihoaG4uLhMTEyQkJBjY2M6OjpdXV3z8/Pi4uJsbGzS0tJnZ2exsbEgICBycnItLS1WVlZRUVFBQUEUFBQZGRkkJCSAgICdnZ3Hx8eUlJSoqKgLCwtjiRmnAAAEq0lEQVR4nO3di1riMBAFYFLuUCwCBVQUL4j4/i+4Rb9VQHfCtpOcod/5nyCHljaXSdpoEBERERERERERERERERERERER0Tn6w22re7NuljWeDVo5OsQ/pdlm6jQs5ugovxl2H1XSfdok6Dwn8tuxYry9qanLmFw/K+cr3NmJmHT1431EtHKjZndhAjp3g472IZ2Eyldoo9MVsoD5nBuj4zUag6ABnRuB8+WzwAHdGzZgqtN/kcywAd+DB3Qd5AsjDfaSOPAE7IPn4W/RwjswoXY39Hd3uISrKAFdExbwNk5At0IFHEYK6DJUwjh/QuCD5ipSQDcABcxjBXSoS9iLFRD1L4z2mEHdo7FehW6DCjiPFHCHCti4jpJvPYQF7D+Fj3ffw+VrNFpntHC66mat0trgedKFN99m1Mc2sSJfvlmKbmFFbU9A3BNQy5scEDYW0COPKq7QzasuEaefHtDNUyD3Se0sh5W3lQLCphw07aSES3TrNEgrMfdWFjQrkQa/2DUGLTdCQtiAVZW04FuDl2FBWjC8/A7bXv2vYf3/h9KztA59NnmSBrgSpkhcc9qiW6dB7JdO0K3TIE+W1qFj2n+REk7RzdPwIF7EOrwwPEuH4BomDSM5odtc9lzpniehm1qomKzEvzy6zi57KLz0Jizcr966ktfdMs3N3s+dcyKe9TPMBtncYsxXrYQfpputuZD6RZcb5GrhbwJUPo9b6FBHUv2EzjVNZQyzkv9g6F7tB0no3DU62LdQmyym6M0H36QJqUrMzEiGK9OHFUKdEmczKnmw0qn1rOdX8Gglor+upqymkYj9dbCIYyM91aQZLKKNnZVFRM2t28esvPsTeeKtCjO91E2wiGaq48TajCrsFAWM1CY1Ttyik33ph9oKbOStuDcKs0fITA91Lwuy29JWlVyIjD10qBNL/Y6qrYtYyLOFuLr436z0bA7lo6uVXl/u2UgP/IckHWWvg55kdd7j10zfrZR05384XXzpQ8vbH7J6m54t8S1G1qBCx3P+Uh0qH+RebS3KV8SXy5OZYWIF8g4OO9P8FYjbimuwj8pToVODCqRiCC29FWuxDUecPb/4Xs0HqVSuHpXV0nrrGt04FdJKHe6MIU3S/ncDxwoqkGaV6/E/lLqmdqa+q5DG+wt04zSI5f91GD7JleNmqk8qkPe/12CQ7ymSMzcp/P/kczbu0c2rbigXV1kpWSiv/SQGNLRMWpK3UPWyp2nSnfcQ2w62hflw2S6t9XbOMdLIvdPJbhzgWwGncDdpEvqg8k+4J2k7wuXbg3VoYp2wCxvfh/1WwAHU+mi0sz1hlzBUldcPqCWLWH9C3Gx3rEv4jDqC4qwdpBpgZRjhNiEcw5XthfxszgHg6na4+vxDwK9aJFE+aoFc246TEDrBFm6jzDfsoQwRTisHnzoRbPfBXy/o3cChD2Qf40/TCvuVLgtVwb7zaaro2Dj4Jdyz5trIHpJEt1r9y8TOIsw8xNfIJuhH6JG59hjxbmDn+n1KVP+Lq5aR/9+Rkc5L433dtfH4/M38dtHslDZtrrrZ1tq9+VM/KevidxkQEREREREREREREREREREREZEpfwDxGkrAr+uJgQAAAABJRU5ErkJggg==">

    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans:wght@400;500;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Open+Sans:wght@400;500;700&family=Poppins&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <style>
        html,body{
            height: 100%;
            background-color: rgb(244, 244, 244);
        }
        header{
            height: 2.5em;
        }

        * {
  margin: 0;
  padding: 0;
}

      .container{
        display: flex;
        height: 100%;
        flex-direction: column;
      }


      a{
        text-decoration: none;
      }

      .head{
        height:15%;
        width: 100%;
        background-color: white;
        padding-left: 5%;
        padding-right: 5%;
        font-family: roboto;
        display: flex;
        flex-direction: column;
        position: fixed;
        box-shadow: 1px 0px 2px rgba(0, 0, 0, 0.2);
        z-index: 1;
        padding-left: 5%;
        padding-right: 5%;
      }
      
    .content{
        font-family: roboto;
        background-color: white;
        height: 100%;
        padding-top: 8%;
        padding-left: 5%;
        padding-right: 5%;
    }

    #search{
        margin-left: 40%;
        margin-top: 5px;
        background-color: lightgray;
        border: none;
        border-radius: 5px;
        height: 1.8em;
        width: 20em;
        opacity: 0.5;
    }
    #search::placeholder{
        padding-left: 10px;
    }

    .menu{
        display: flex;
        position: absolute;
        bottom: 6px;
        font-size:small;
    }

    .menu a{
        color: black;
    }
/* @media(min-width:768px){ */
    .post{
        width:60%;
        border:1px solid black;
        display: grid;
    }
/* } */

    .postimg{
        grid-column: 1/3;
    }
    .postimg img{
        max-width: 300px;
        max-height: 300px;
        object-fit: contain;
    }
    .postdata{
        grid-column: 4/8;
    }

    

    </style>
</head>
<body>

    <div class="container">
     
        <div class="head">

            <br>


            <div class="head1" style="display: flex; flex-direction: row;">
                <h2>social</h2>
                <form action="">
                    <input type="search" name="" id="search" placeholder="search">
                </form>
            </div>

            <div class="menu">
              <a href="#">Feed</a>
              &nbsp; &nbsp;
              <a href="#">Explore</a>
              &nbsp; &nbsp;
              |
              &nbsp; &nbsp;
              <a href="">item x</a>
              &nbsp; &nbsp;
              <a href="">item y</a>
              &nbsp; &nbsp;
              <a href="">item z</a>
            </div>
           
        </div>


        <!-- content -->
        <div class="content">
           <div class="post">
                <div class="postimg">
                    <img src="https://www.littlethings.info/wp-content/uploads/2014/04/dummy-image-green-e1398449160839.jpg" alt="">
                </div>
                <div class="postdata">
                    dat
                </div>
           </div>
        </div>
    </div>
</body>
</html>