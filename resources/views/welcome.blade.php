<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parallax Scrolling Website</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Rancho&display=swap');

:root {
    --primary: #094b65;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    overflow-x: hidden;
    background: #fff;
    min-height: 100vh;
}

#header {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    padding: 30px 100px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    z-index: 100;
}

#header .logo {
    color: var(--primary);
    font-weight: 700;
    font-size: 2em;
    text-decoration: none;
}

#header ul {
    display: flex;
    justify-content: center;
    align-items: center;
}

#header ul li {
    list-style: none;
    margin-left: 20px;
}

#header ul li a {
    text-decoration: none;
    padding: 6px 15px;
    color: var(--primary);
    border-radius: 20px;
}

#header ul li a:hover,
#header ul li a.active {
    background: var(--primary);
    color: #fff;
}

section {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
}

section::before {
    content: "";
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    height: 100px;
    background: linear-gradient(to top, var(--primary), transparent);
    z-index: 10;
}

section img {
    position: absolute;
    top: 0px;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    pointer-events: none;
}

section #text {
    position: absolute;
    color: var(--primary);
    font-size: 10vw;
    text-align: center;
    line-height: .55em;
    font-family: 'Rancho', cursive;
    transform: translatey(-50%);
}

section #text span {
    font-size: .20em;
    letter-spacing: 2px;
    font-weight: 400;
}

.btn {
    text-decoration: none;
    display: inline-block;
    padding: 8px 30px;
    background: #fff;
    color: var(--primary);
    font-size: 1.2em;
    font-weight: 500;
    letter-spacing: 2px;
    border-radius: 40px;
    transform: translatey(100px);
}

.sec {
    position: relative;
    padding: 100px;
    background: var(--primary);
}

.sec h2 {
    font-size: 3.5em;
    color: #fff;
    margin-bottom: 10px;
}

.sec p {
    font-size: 1em;
    color: #fff;
}

footer {
    position: relative;
    padding: 0px 100px;
    background: var(--primary);
}

footer a {
    text-decoration: none;
    color: #fff;
}
    </style>
</head>
<body>
    
    <header id="header">
        <a href="#" class="logo">AlfTech</a>
        <ul>
            <li><a href="#" class="active">Home</a></li>
            <li><a href="#"></a></li>
            <li><a href="#">Destination</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </header>
        
        <Section>
            <h2 id="text"><span></span><br>Gestion</h2>
            
            <img src="https://user-images.githubusercontent.com/65358991/170092504-132fa547-5ced-40e5-ab64-ded61518fac2.png" id="bird1">
            <img src="https://user-images.githubusercontent.com/65358991/170092542-9747edcc-fb51-4e21-aaf5-a61119393618.png" id="bird2">
            <img src="https://user-images.githubusercontent.com/65358991/170092559-883fe071-eb4f-4610-8c8b-a037d061c617.png" id="forest">
            
            <a href="{{route('list_client')}}" class="btn">passer une Commander</a>
            <a href="{{route('list_produit')}}" class="btn">Gerer mon stock</a>

            
            <img src="https://user-images.githubusercontent.com/65358991/170092605-eada6510-d556-45cc-b7fa-9e4d1d258d26.png" id="rocks">
            <img src="https://user-images.githubusercontent.com/65358991/170092616-5a70c4af-2eed-496f-bde9-b5fcc7142a31.png" id="water">
        </Section>
        
        <div class="sec">
            <h2>Commander ou gerer votre stock</h2>
            <p> AlfTech est une application de gestion de stock puissante et intuitive conçue pour aider les entreprises de toutes tailles à gérer leurs stocks avec efficacité et précision.
    <br><br>
    Avec AlfTech, vous pouvez suivre facilement tous vos produits, effectuer des entrées et sorties de stock, et obtenir une vue d'ensemble en temps réel de l'état de vos stocks.     <br><br>
    Nisi porta lorem mollis aliquam ut. Condimentum mattis pellentesque id nibh tortor id. Sed elementum tempus egestas sed sed risus pretium quam vulputate. Sed pulvinar proin gravida hendrerit lectus a. Risus at ultrices mi tempus imperdiet nulla malesuada pellentesque elit. Imperdiet massa tincidunt nunc pulvinar sapien et ligula ullamcorper malesuada. Integer enim neque volutpat ac. Faucibus a pellentesque sit amet porttitor eget dolor. Elementum eu facilisis sed odio. Enim nunc faucibus a pellentesque sit amet porttitor eget. Aliquam ultrices sagittis orci a scelerisque purus. Netus et malesuada fames ac. Iaculis eu non diam phasellus vestibulum lorem sed risus. Gravida in fermentum et sollicitudin.
    <br><br>
    L'interface conviviale et personnalisable de l'application vous permet de personnaliser les champs pour chaque produit et de les organiser de manière à répondre à vos besoins spécifiques.    <br><br>
En somme, AlfTech est la solution de gestion de stock complète que vous recherchiez. Avec sa facilité d'utilisation, sa flexibilité et ses fonctionnalités de pointe, AlfTech vous permettra de gérer votre entreprise avec succès et de garder une longueur d'avance sur la concurrence.        </div>
        
        <footer>
        </footer>
        
        <script>
            let text = document.getElementById('text');
            let bird1 = document.getElementById('bird1');
            let bird2 = document.getElementById('bird2');
            let btn = document.getElementById('btn');
            let rocks = document.getElementById('rocks');
            let forest = document.getElementById('forest');
            let water = document.getElementById('water');
            let header = document.getElementById('header');
            
            window.addEventListener('scroll', function() {
                let value = window.scrollY;
                
                text.style.top = 50 + value * -.1 + '%';
                bird2.style.top = value * -1.5 + 'px';
                bird2.style.left = value * 2 + 'px';
                bird1.style.top = value * -1.5 + 'px';
                bird1.style.left = value * -5 + 'px';
                btn.style.marginTop = value * 1.5 + 'px';
                rocks.style.top = value * -.12 + 'px';
                forest.style.top = value * .25 + 'px';
                header.style.top = value * .5 + 'px';
            })
        </script>
        
   
</body>
</html>