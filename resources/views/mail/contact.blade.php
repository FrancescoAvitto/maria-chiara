<html>
    <body>
        <h3>Contatto ricevuto da {{ $info["name"] . ' ' . $info["surname"] }}</h3>
        <h4>Info</h4>
        <ul>
            <li>email: {{ $info["email"] }}</li>
            <li>telefomo: {{ $info["phone"] }}</li>
        </ul>
        <h4>Messaggio</h4>
        <p>{{ $info["message"] }}</p>
    </body>
</html>