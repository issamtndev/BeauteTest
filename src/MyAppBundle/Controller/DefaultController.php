<?php

namespace MyAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyAppBundle\Form\BeauteSearchType;
use Symfony\Component\HttpFoundation\Response;
use MyAppBundle\Entity\Products;
ini_set('memory_limit', '1024M');

class DefaultController extends Controller
{
    public function indexAction()
    {
        $form = $this->createForm(new BeauteSearchType());
        return $this->render('MyAppBundle:Default:index.html.twig',array("form"=>$form->createView()));
    }
    
    public function affiche_avis_produitAction($id)
    {
        $em = $this->getDoctrine()->getManager();

       $monproduit= $em->getRepository('MyAppBundle:Products')->find($id);
       
       return $this->render('MyAppBundle:Default:affiche_avis_produit.html.twig', array('monproduit' => $monproduit));
    }
    
    public function sous_categoriesAction()
    {

        $em = $this->container->get('doctrine')->getEntityManager();

        $request = $this->container->get('request');

        $sous_categ = $em->getConnection()

            ->prepare("select * from categories   where parent_id =".$request->request->get('id')."");

            $sous_categ->execute();

            $sous_categ = $sous_categ->fetchAll();

        return $this->render('MyAppBundle:Default:sous_categ.html.twig', array('sous_categ' => $sous_categ));

    }
    
    public function recherche_produit_par_nomAction(){
           
        $em =  $this->get('doctrine.orm.entity_manager');

        $request = $this->container->get('request');
        $id_category=0;
        if($request->request->get('subcategorie')!='')$id_category=$request->request->get('subcategorie');
        else $id_category=$request->request->get('categorie');
        $sql="select p.* from products p 
            LEFT JOIN categories c ON c.id=p.category_id    
            where p.name like '%".$request->request->get('name')."%'";
        if($id_category!=0) $sql.=" AND c.id='".$id_category."'";
        $produits = $em->getConnection()

            ->prepare($sql);

            $produits->execute();

            $produits = $produits->fetchAll();

        return $this->render('MyAppBundle:Default:liste_produits.html.twig', array('produits' => $produits));

    }
    
    public function rechercheAction()
    {
         $em    = $this->get('doctrine.orm.entity_manager');
         $form = $this->createForm(new BeauteSearchType());  
         $request = $this->container->get('request');
        if($request->getMethod() == 'GET')
        {
            $form->handleRequest($request);
            $data = $request->get('app_homebundle_beaute_search');
            $listproducts = $em->getRepository('MyAppBundle:Products')->findProductsByParametres($data);
        }
        //BEGIN EXPORT CSV PPRUITS+CRITERES
        if($listproducts){
          $fichier = $this->get('kernel')->getRootDir() . '/../web/uploads/csv_critere.csv';
          $fp = fopen($fichier, 'w');
          $csv_output ="id;name;marque;prix;cont;prix_au_l;notation;url;miniature;gender;critere;comments";
          $csv_output .= "\r\n";
            foreach ($listproducts as $products){ 
                foreach ($products->getAvis() as $critere){
                  $csv_output .= $products->getId().";";
                  $csv_output .= $products->getName().";";
                  $csv_output .= $products->getMarque().";";
                  $csv_output .= $products->getPrix().";";
                  $csv_output .= $products->getCont().";";
                  $csv_output .= $products->getPrixAuL().";";
                  $csv_output .= $products->getNotation().";";
                  $csv_output .= $products->getUrl().";";
                  $csv_output .= $products->getMiniature().";";
                  $csv_output .= $critere->getGender().";";
                  $csv_output .= $critere->getCritere().";"; 
                  $csv_output .= $critere->getComments().";"; 
                  $csv_output .= "\r\n";
                }  
            }   
         fputs($fp, mb_convert_encoding($csv_output, 'UCS-2LE', 'UTF-8'));
         fclose($fp);       
        }
        //BEGIN EXPORT CSV PPRUITS+POINT FORTS
        if($listproducts){
          $fichier = $this->get('kernel')->getRootDir() . '/../web/uploads/csv_points_forts.csv';
          $fp = fopen($fichier, 'w');
          $csv_output ="id;name;marque;prix;cont;prix_au_l;notation;url;miniature;points_forts";
          $csv_output .= "\r\n";
            foreach ($listproducts as $products){ 
                foreach ($products->getAvis() as $critere){
                  $csv_output .= $products->getId().";";
                  $csv_output .= $products->getName().";";
                  $csv_output .= $products->getMarque().";";
                  $csv_output .= $products->getPrix().";";
                  $csv_output .= $products->getCont().";";
                  $csv_output .= $products->getPrixAuL().";";
                  $csv_output .= $products->getNotation().";";
                  $csv_output .= $products->getUrl().";";
                  $csv_output .= $products->getMiniature().";";
                  $csv_output .= $critere->getPointsForts().";";
                  $csv_output .= "\r\n";
                }  
            }  
         fputs($fp, mb_convert_encoding($csv_output, 'UCS-2LE', 'UTF-8'));
         fclose($fp);       
        }
        //BEGIN EXPORT CSV PPRUITS+POINT FAIBLES
        if($listproducts){
          $fichier = $this->get('kernel')->getRootDir() . '/../web/uploads/csv_points_faibles.csv';
          $fp = fopen($fichier, 'w');
          $csv_output ="id;name;marque;prix;cont;prix_au_l;notation;url;miniature;points_faibles";
          $csv_output .= "\r\n";
            foreach ($listproducts as $products){ 
                foreach ($products->getAvis() as $critere){
                  $csv_output .= $products->getId().";";
                  $csv_output .= $products->getName().";";
                  $csv_output .= $products->getMarque().";";
                  $csv_output .= $products->getPrix().";";
                  $csv_output .= $products->getCont().";";
                  $csv_output .= $products->getPrixAuL().";";
                  $csv_output .= $products->getNotation().";";
                  $csv_output .= $products->getUrl().";";
                  $csv_output .= $products->getMiniature().";";
                  $csv_output .= $critere->getPointsFaibles().";";
                  $csv_output .= "\r\n";
                }  
            }   
         fputs($fp, mb_convert_encoding($csv_output, 'UCS-2LE', 'UTF-8'));
         fclose($fp);       
        }
        return $this->render('MyAppBundle:Default:recherche.html.twig', array('listproducts' => $listproducts));
    }
    public function recherche_nb_avisAction()
    {
         $em    = $this->get('doctrine.orm.entity_manager');
         $form = $this->createForm(new BeauteSearchType());  
         $request = $this->container->get('request');
        if($request->getMethod() == 'GET')
        {
            $form->handleRequest($request);
            $data = $request->get('app_homebundle_beaute_search');
            $listproducts = $em->getRepository('MyAppBundle:Avis')->findavisByParametres($data);
        }

       return new Response(''.$listproducts[0][1]);
    } 
}
