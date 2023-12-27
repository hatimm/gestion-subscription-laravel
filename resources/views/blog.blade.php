<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewreport" content="width=device-width, initial-scale=1.0">
	<title>
		Home page
	</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="index.css" />
</head>
<body>
    <style>
            body{
            margin:0;
            padding:0;
            background:#fff;
            font-family: 'Raleway',sans-serif;
            color: black;
            }
            .banner{
                height: 100vh;
                width: 100%;
                background-image: url('https://images.unsplash.com/photo-1537498425277-c283d32ef9db?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=878&q=80');
                background-position: top;
                background-size:cover;
                /*background-attachment: fixed;*/
                background-repeat: no-repeat;
                opacity: 95%;
            }
            .banner .navbar{
                margin-top:4%;
            }
            .banner .navbar-brand{
                color: #fff;
                font-size:1.8em;
                font-weight: 700;
                margin-left: 10%;
            }
            .banner .nav{
                margin-right:10%; 
            }
            .banner .nav li a{
                color:white;
                font-size: 1.2em;
            }
            .banner .info{
                margin-top:13%;
                transform: translateY(-15%);
            }
            .banner .info h1{
                font-size: 2.5em;
                font-weight: 700;
                color: #fff;
                letter-spacing: 2px;
            }
            .banner .info p{
                font-size: 2em;
                font-weight: 500;
                color: white;
                letter-spacing: 2px;
            }
            .banner .info a{
                margin-left:50%;
                transform: translateX(-50%);
                color: #fff;
                background: #e91d43;
                padding:10px 20px; 
                font-size: 2em;
                font-weight: 600;
            }
            .banner .info a:hover{
                background: #e91e63;
            }
    </style>
	<div class="container-fluid banner" id="navbar">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-md">
					<div class="navbar-brand">STRYVE</div>
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="/">HOME</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="#offers">OFFERS</a>
						</li>
                        <li class="nav-item">
							<a class="nav-link" href="clienthome">PACKS</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="/login">LOGIN</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-md-8 offset-md-2 info">
				<h1 class="text-center">Web Hosting + Domain Name</h1>
				<p class="text-center">
                    Buy An All-In-One Package Deal & Save Big. Get started in 2 easy steps
				</p>
				<a href="/clienthome" class="btn btn-md text-center">GET STARTED</a>
			</div>
		</div>
	</div>
    <section class="py-5" id="offers" >
        <div class="container" >
                <!--Pricing cards-->
                <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
                    <div class="col ">
                        <div class="card mb-4 rounded-3 shadow-sm">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">P1</h4>
                            </div>
                            <div class="card-body">  
                                <h1 class="my-0 font-weight-normal">$4.99 <small class="text-muted fw-light">/M</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                <br>
                                    <li>
                                    1 Domaine OFFERT 
                                    <span class="tt" data-bs-placement="right" title="Nom de domaine OFFERT parmi les extensions (.com, .fr, .biz, .eu, .be, .info, .name ou .org.)">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    100Go d'espace disque
                                    <span class="tt" data-bs-placement="right" title="L'espace disque est la quantité de données que vous pouvez stocker sur le serveur pour votre site web.Le disque SSD NVMe va jusqu'à 4 fois plus vite que le SSD SATA, déjà plus efficace que le disque dur classique.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    10 boîtes e-mail pro
                                    <span class="tt" data-bs-placement="right" title="Créez des adresses emails de type vous@votredomaine.com afin de communiquer facilement avec vos clients. Quota 5 Go / boîte mails, quota pièces jointes 100 Mo Maxi.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <br>
                                </ul>
                                <form action="/payment" method="post">
                                @csrf
                                <input type="integer" name="price" id="" value="50" hidden>
                                <select name="pack" hidden>
                                        <option value="P1">P1</option>
                                    </select>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card mb-4 rounded-3 shadow-lg">
                            <div class="card-header py-3">
                                <h4 class="my-0 fw-normal">P2</h4>
                            </div>
                            <div class="card-body">  
                                <h1 class="my-0 font-weight-normal">$8.33 <small class="text-muted">/M</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>
                                    1 Domaine OFFERT
                                    <span class="tt" data-bs-placement="right" title="Nom de domaine OFFERT parmi les extensions (.com, .fr, .biz, .eu, .be, .info, .name ou .org.)">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    250Go d'espace disque
                                    <span class="tt" data-bs-placement="right" title="L'espace disque est la quantité de données que vous pouvez stocker sur le serveur pour votre site web.Le disque SSD NVMe va jusqu'à 4 fois plus vite que le SSD SATA, déjà plus efficace que le disque dur classique.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    150 boîtes e-mail pro
                                    <span class="tt" data-bs-placement="right" title="Créez des adresses emails de type vous@votredomaine.com afin de communiquer facilement avec vos clients. Quota 5 Go / boîte mails, quota pièces jointes 100 Mo Maxi.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    PHP / MySQL
                                    <span class="tt" data-bs-placement="right" title="Nos hébergements web acceptent plusieurs versions PHP, afin de vous permettre de créer un site web dynamique. Les bases de données MySQL sont indispensables à l’installation de certains logiciels tels que Wordpress ou Joomla. Nous installons toujours la dernière version stable.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    Trafic illimité
                                    <span class="tt" data-bs-placement="right" title="C'est la limite maximale du transfert autorisé pour l'hébergement de votre site sur nos serveurs.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    Support de SSL HTTPS
                                    <span class="tt" data-bs-placement="right" title="Vous avez la possibilité d'activer le protocole HTTPS et d'installer un certificat SSL sur votre site web.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                </ul>
                                <form action="/payment" method="post">
                                @csrf
                                <input type="integer" name="price" id="" value="100" hidden>
                                <select name="pack" hidden>
                                        <option value="P2">P2</option>
                                    </select>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col ">
                        <div class="card mb-4 rounded-3 shadow-sm border-primary">
                            <div class="card-header py-3 text-white bg-primary border-primary">
                                <h4 class="my-0 fw-normal">P3</h4>
                            </div>
                            <div class="card-body">  
                                <h1 class="my-0 font-weight-normal">$24.99 <small class="text-muted">/M</small></h1>
                                <ul class="list-unstyled mt-3 mb-4">
                                    <li>
                                    2 Domaines OFFERTS
                                    <span class="tt" data-bs-placement="right" title="Nom de domaine OFFERT parmi les extensions (.com, .fr, .biz, .eu, .be, .info, .name ou .org.)">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    Espace disque Illimité
                                    <span class="tt" data-bs-placement="right" title="L'espace disque est la quantité de données que vous pouvez stocker sur le serveur pour votre site web.Le disque SSD NVMe va jusqu'à 4 fois plus vite que le SSD SATA, déjà plus efficace que le disque dur classique.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    Boîtes e-mail pro illimité
                                    <span class="tt" data-bs-placement="right" title="Créez des adresses emails de type vous@votredomaine.com afin de communiquer facilement avec vos clients. Quota 5 Go / boîte mails, quota pièces jointes 100 Mo Maxi.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    PHP / MySQL
                                    <span class="tt" data-bs-placement="right" title="Nos hébergements web acceptent plusieurs versions PHP, afin de vous permettre de créer un site web dynamique. Les bases de données MySQL sont indispensables à l’installation de certains logiciels tels que Wordpress ou Joomla. Nous installons toujours la dernière version stable.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    Trafic illimité
                                    <span class="tt" data-bs-placement="right" title="C'est la limite maximale du transfert autorisé pour l'hébergement de votre site sur nos serveurs.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                    <li>
                                    Support de SSL HTTPS
                                    <span class="tt" data-bs-placement="right" title="Vous avez la possibilité d'activer le protocole HTTPS et d'installer un certificat SSL sur votre site web.">
                                        <img src="https://cdn-icons-png.flaticon.com/512/7987/7987179.png" width="22px" height="22px">
                                   </span>
                                    </li>
                                </ul>
                                <form action="/payment" method="post">
                                @csrf
                                <input type="integer" name="price" id="" value="300" hidden>
                                <select name="pack" hidden>
                                        <option value="P3">P3</option>
                                    </select>
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Sign up</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </section>
    <section id="plans">
         <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
            <symbol id="check" viewBox="0 0 16 16">
                <title>Check</title>
                <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z"/>
            </symbol>
        </svg>
        <div class="container" >
        <h2 class="display-6 text-center py-4 mb-4">Compare packs</h2>

            <div class="table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th style="width: 34%;"></th>
                    <th style="width: 22%;">P1</th>
                    <th style="width: 22%;">P2</th>
                    <th style="width: 22%;">P3</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row" class="text-start">Domains</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Stockage</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                </tbody>

                <tbody>
                <tr>
                    <th scope="row" class="text-start">Boite email pro</th>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Traffic</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">PHP/MySql</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                <tr>
                    <th scope="row" class="text-start">Support SSL</th>
                    <td></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                    <td><svg class="bi" width="24" height="24"><use xlink:href="#check"/></svg></td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
    </section>
    <!--Footer-->

    <footer class="py-5  text-center text-light position-relative" style="background-color: black;">
        <div class="container">
            <p class="lead">
                Copyright &copy; 2022 Hatim Meftahi
            </p>
            <a href="navbar" class="position-absolute bottom-0 end-0 p-3">
                <i class="bi bi-arrow-up-circle h2"></i>
            </a>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script>
        const tooltips = document.querySelectorAll('tt')
        tooltips.foreach(t=>{
            new bootstrap.Tooltip(t)
        })
    </script>
</body>
</html>