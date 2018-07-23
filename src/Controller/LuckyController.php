<?php
// src/Controller/LuckyController.php
namespace App\Controller;
    use Symfony\Component\Routing\Annotation\Route;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use App\Entity\Product;
    use Symfony\Component\Form\Extension\Core\Type\TextType;
    use Symfony\Component\Form\Extension\Core\Type\SubmitType;
    use Symfony\Component\Form\Extension\Core\Type\TextareaType;
    use Symfony\Component\Form\Extension\Core\Type\TelType;

    class LuckyController extends Controller
    {
        /**
         * @Route("/lucky/number")
         */
        public function indexAction(Request $request)
        {
            $form = $this->formulaire();

                $form->handleRequest($request);

                if ($form->isSubmitted() && $form->isValid()){
                    $message = $form->getData();
                    //recup du formulaire

                    $nom = $message->getNom();
                    $body = $message->getMessage();

                    $entityManager = $this->getDoctrine()->getManager();
                    $entityManager->persist($message);
                    $entityManager->flush();
                    $this->addFlash("success", "Le message a été enregistré");

                    $this->push($nom, $body);

                    //enregistrement en bdd du formulaire
                }

            return $this->render('lucky/number.html.twig', array(
                'form' => $form->createView(),
            ));
        }

        /**
         * @Route("/projet", name="projets")
         */
         public function projetPage(){
             return $this->render('projet.html.twig', array());
         }


                 /**
                  * @Route("/exp", name="exp")
                  */
                  public function expPage(){
                      return $this->render('exp.html.twig', array());
                  }


        public function formulaire()
        {
            $contact = new Product();
            $form = $this->createFormBuilder($contact)
                ->add('nom', TextType::class)
                ->add('ville', TextType::class)
                ->add('telephone', TelType::class)
                ->add('message', TextareaType::class)
                ->add('save', SubmitType::class, array('label' => 'Envoyer'))
                ->getForm();



            return $form;
        }



    public function push($title, $body)
  {
      $headers = array(
          'Access-Token: o.WCyu3MRHHutH42zi7ClLw5gfElO7z5Xw',
          'Content-Type: application/json'
      );

          $post = array('type' => 'note' ,
          'title'=> $title,
          'body'=> $body,
      );

      $post = json_encode($post);
      $ch = curl_init("https://api.pushbullet.com/v2/pushes");
      curl_setopt($ch, CURLOPT_HTTPHEADER, $headers); //=header
      curl_setopt($ch,CURLOPT_POST, 1);// réaliser la méthode
      curl_setopt($ch,CURLOPT_POSTFIELDS,$post); // contenu du post
      // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); //retour du message d'erreur
      curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,3); //fin de session en cas de problème
      curl_setopt($ch,CURLOPT_TIMEOUT, 20);//fin de la requete en cas de problème
      curl_exec($ch); //execute la requete et envoi le message
      curl_close($ch); //ferme la connection
  }
}
