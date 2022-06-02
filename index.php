<?php

$conn = mysqli_connect('localhost','cmatthieu','cmatthieu_aden$2022','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Portfolio - Matthieu CHOLOT</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">Accueil</a>
      <a href="#about">A propos</a>
      <a href="#services">Services</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#contact">Contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.linkedin.com/in/matthieu-cholot/" class="fab fa-linkedin"></a>
      <a href="https://github.com/mcholot" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/user-img.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Matthieu Cholot</h3>
      <span data-aos="fade-up">Alternant en BTS SIO</span>
      <p></p>
      <a data-aos="fade-up" href="#about" class="btn">à propos de moi</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>à propos</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Étudiant dynamique, adaptable et motivé, je finalise mon BTS SIO pour me diriger par la suite vers un Bachelor Concepteur de Systèmes d'Information (CSI) chez Aden Formations.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>Nom : </span> Matthieu CHOLOT </h3>
         <h3 data-aos="zoom-in"> <span>Email : </span> matthieu.cholot@hotmail.fr </h3>
         <h3 data-aos="zoom-in"> <span>Addresse : </span> 1203 Boulevard de la Haute-Folie, 14200 HÉROUVILLE-SAINT-CLAIR </h3>
         <h3 data-aos="zoom-in"> <span>Téléphone : </span> 06 41 91 63 11 </h3>
         <h3 data-aos="zoom-in"> <span>Age : </span> 20 ans </h3>
         <h3 data-aos="zoom-in"> <span>Expérience : </span> BAC +2 </h3>
      </div>

      <a href="cv/cv.pdf" class="btn" data-aos="fade-up">télécharger mon CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>Compétences</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>85%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>PHP</span> <span>75%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>C#</span> <span>60%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>Éducation & Expérience professionnelle</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">Éducation</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2022 )</span>
               <h3>BTS SIO en alternance - Aden Formation</h3>
               <p>En cours...</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2017 - 2020 )</span>
               <h3>BAC STI2D - Lycée Arcisse de Caumont</h3>
               <p>Mention Assez Bien</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2017 )</span>
               <h3>Brevet des Collèges - Collège Jean de la Varende</h3>
               <p>Mention Bien</p>
            </div>

         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">Éxpérience professionnelle</h3>

            <div class="box" data-aos="fade-left">
               <span>( Octobre 2020 - Juin 2022 )</span>
               <h3>Elips-Solution, Technicien Formateur Alternant</h3>
               <p>
                  - Hotline : Rappel de client / Réponses aux mails de demandes d'aide sur différents logiciels ;
                  - Création / Paramétrage dossier client sur différents logiciel (Silae / MEG / N2F / Portail Online) ;
                  - Migration de dossiers comptable de Cegid vers Agiris ;
                  - Création de documentation sur le HelpDesk pour différents logiciels pour aiguiller les clients.
               </p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( Juillet 2020 )</span>
               <h3>La Poste, Chargé de clientèle</h3>
               <p>
                  - Accueil et orientation clients ;
                  - Opérations financières diverses ;
                  - Opération d'affranchissements de courriers.
               </p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2021 - 2022 )</span>
               <h3>Mon Brico, Stage en entreprise</h3>
               <p>
                  - Mise en rayon
                  - Implantations
                  - Récéption de livraisons
                  - Facing
                  - Caisse
               </p>
            </div>

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>Services</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>Développement Web</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3>Développement d'application</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>Silae</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-chart-line"></i>
         <h3>Mon Expert en Gestion</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-windows"></i>
         <h3>Windows Form</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-windows"></i>
         <h3>Windows Power Automate</h3>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>Portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/img-1.jpg" alt="">
         <h3>Projet Web - Développement d'une médiathèqe</h3>
         <span>( 2020 - 2022 )</span>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/img-2.jpg" alt="">
         <h3>Projet C# - Développement d'une application de Jeu de Rôle</h3>
         <span>( 2020 - 2022 )</span>
      </div>

   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>Contactez-moi</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="Nom" placeholder="Entrez votre nom" class="box" required>
         <input data-aos="fade-left" type="email" name="Email" placeholder="Entrez votre email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="Téléphone" placeholder="Entrez votre téléphone" class="box" required>
      <textarea data-aos="fade-up" name="Message" class="box" required placeholder="Entrez votre message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="Envoyer le message" name="Envoyer" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>Téléphone</h3>
         <p>06 41 91 63 11</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>Email</h3>
         <p>matthieu.cholot@hotmail.fr</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>Adresse</h3>
         <p>1203 Boulevard de la Haute-Folie, 14200 HÉROUVILLE-SAINT-CLAIR</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Matthieu CHOLOT</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>