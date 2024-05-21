

 <!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bonjour , Vous avez nouvelle Demander un devis {{$type}}</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f0f0f0;
    }

    .container {
      max-width: 800px;
      margin: 50px auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .logo {
      text-align: center;
      margin-bottom: 30px;
    }

    .logo img {
      width: 150px;
      height: auto;
    }

    .welcome-message {
      text-align: center;
      margin-bottom: 30px;
    }

    .welcome-message p {
      font-size: 18px;
      line-height: 1.5;
    }

    .company-name {
      font-weight: bold;
      color: #2c3e50;
    }

    footer {
      background-color: rgb(22, 36, 61);
      color: #fff;
      text-align: center;
      padding: 20px 0;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    footer a {
      color: #0695df;
      text-decoration: none;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="logo">
        <img decoding="async" width="143" height="27" src="{{asset('storage/images/logo.png')}}" alt="">
    </div>
    <div class="welcome-message">
      {{-- <p>Bienvenue à bord ! Nous sommes ravis de vous accueillir en tant que membre précieux de notre famille d'assurance. Merci de nous avoir choisi pour protéger ce qui compte le plus pour vous. Encore une fois, bienvenue dans la famille <span class="company-name">HPRO CONSEIL</span>. Nous avons hâte de vous servir et de vous offrir la tranquillité d'esprit que vous méritez.</p> --}}
    </div>
    <div>
        <table>
            <tr>
                <th>
                    <p>Nom :</p>
                </th>
                <th>
                    <p>{{$name}}</p>
                </th>
            </tr>
            <tr>
                <th>
                    <p>E-mail :</p>
                </th>
                <th>
                    <p>{{$email}}</p>
                </th>
            </tr>
            <tr>
                <th>
                    <p>Télephone :</p>
                </th>
                <th>
                    <p>{{$phone}}</p>
                </th>
            </tr>

            <tr>
                <th>
                    <p>Type :</p>
                </th>
                <th>
                    <p>{{$type}}</p>
                </th>
            </tr>

            <tr>
                <th>
                    <p>Message :</p>
                </th>
                <th>
                    <p>{{$messagee}}</p>
                </th>
            </tr>




        </table>


    </div>
  </div>
  <footer>
    <p>© 2024 AsalaChay. All rights reserved. | <a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
  </footer>
</body>
</html>
