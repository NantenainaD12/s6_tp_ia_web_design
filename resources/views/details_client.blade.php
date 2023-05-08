<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo $data[0] ->titre ?></title>
    <style>
    /* Global styles */
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
    }

    header {
        background-color: #333;
        color: #fff;
        padding: 10px;
    }

    nav ul {
        list-style: none;
        margin: 0;
        padding: 0;
    }

    nav ul li {
        display: inline-block;
        margin-right: 10px;
    }

    nav ul li:last-child {
        margin-right: 0;
    }

    nav a {
        color: #fff;
        text-decoration: none;
    }

    main {
        margin: 20px;
    }

    article {
        border: 1px solid #ccc;
        margin-bottom: 20px;
        padding: 10px;
    }

    article h3 {
        margin: 0;
    }

    footer {
        background-color: #333;
        color: #fff;
        padding: 10px;
        text-align: center;
    }

    </style>
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=5">
    <meta name="description" content="Un site d"IA a propos du {{$data[0]->resume}}">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="/getAll_front">Home</a></li>
			</ul>
		</nav>
	</header>
	<main>
        <div style="display: flex;">
         <div style="flex: 1;">
             <?php foreach($data as $liste) { ?>
                 <div>
                     <img src="<?php echo $liste->image ?>" style="width: 550px; height: 650px; border-radius: 10px;" alt="<?php echo $liste->image ?>">
                 </div>
             <?php } ?>
         </div>
               <div style="flex: 1;">
                     <?php foreach($data as $liste) { ?>
                         <div>
                             <article>
                                <a href="client<?php echo $liste->titre ?>-id_article-<?php echo $liste->id_article ?>"><h1><?php echo $liste->titre ?></h1></a>
                                  <p><?php echo $liste->resume ?></p>
                                 <h5><strong>Category:</strong> <?php echo $liste->categorie ?></h5>
                                 <p><strong>About:</strong> <?php echo $liste->contenu ?></p>
                             </article>
                         </div>
                     <?php } ?>
                 </div>
        </div>
    </main>

	<footer>
		<p>&copy; 2023 My Blog. All rights reserved.</p>
	</footer>
</body>
