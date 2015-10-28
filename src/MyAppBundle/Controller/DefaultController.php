<?php

namespace MyAppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MyAppBundle\Form\BeauteSearchType;
use MyAppBundle\Form\FiltreProduitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
ini_set('memory_limit', '1024M');

class DefaultController extends Controller
{
     /*
     * Controlleur de la page d'acceuil [Formulaire de recherche AVIS]
     * @author: Issam <issam@digital-developers.net>
     */
    public function indexAction()
    {
        $form = $this->createForm(new BeauteSearchType());
        return $this->render('MyAppBundle:Default:index.html.twig',array("form"=>$form->createView()));
    }
    
     /*
     * Afficher la liste d'avis d'un produitqui possède un id $id
     * @author: Issam <issam@digital-developers.net>
     */
    public function affiche_avis_produitAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $monproduit= $em->getRepository('MyAppBundle:Products')->find($id);
        
        return $this->render('MyAppBundle:Default:affiche_avis_produit.html.twig', array('monproduit' => $monproduit));
    }
    
     /*
     * Afficher la liste des sous catégories de la catégorie sélecionné
     * @author: Issam <issam@digital-developers.net>
     */
    public function sous_categoriesAction()
    {

        $em = $this->container->get('doctrine')->getManager();
        $request = $this->container->get('request');
        // Récupérer la liste des sous catégories de la catégorie sélectionné avec la fonction find_name_and_nbr_eavis du repository Categories
        $listcategory = $em->getRepository('MyAppBundle:Categories')->find_name_and_nbr_eavis($request->request->get('id'));
        
        return $this->render('MyAppBundle:Default:sous_categ.html.twig', array('sous_categ' => $listcategory));

    }
    
     /*
     * Action autocomplete nom produit formulaire de recherche en ajax en respectant catégorie et marque sélectionnés
     * @author: Issam <issam@digital-developers.net>
     */
    public function recherche_produit_par_nomAction()
    {
           
        $em =  $this->get('doctrine.orm.entity_manager');

        $request = $this->container->get('request');
        $id_category=0;
        
        if($request->request->get('subcategorie')!='')
          $id_category=$request->request->get('subcategorie');
        else 
          $id_category=$request->request->get('categorie');
        
        $sql="select p.* from products p 
              LEFT JOIN categories c ON c.id=p.category_id    
              where p.name like '%".$request->request->get('name')."%'";
        
        if($id_category!=0) 
          $sql.=" AND c.id='".$id_category."'";
        
        if($request->request->get('marque')!='')
          $sql.=" AND p.marque like'%".$request->request->get('marque')."%'";
        
        $produits = $em->getConnection()
                       ->prepare($sql);
        $produits->execute();
        $produits = $produits->fetchAll();
        
        if($request->query->get('json')==1)
        { 
          $id_category=0;
        
        if($request->query->get('subcategorie')!='')
          $id_category=$request->query->get('subcategorie');
        else 
          $id_category=$request->query->get('categorie');
        
        $sql="select DISTINCT(p.name) from products p 
              LEFT JOIN categories c ON c.id=p.category_id    
              where p.name like '%".$request->query->get('name')."%'";
        
        if($id_category!=0) 
          $sql.=" AND c.id='".$id_category."'";
        
        if($request->query->get('marque')!='')
          $sql.=" AND p.marque like'%".$request->query->get('marque')."%'";
        
        $produits = $em->getConnection()
                       ->prepare($sql);
        $produits->execute();
        $produits = $produits->fetchAll();
        $response = new JsonResponse();
          $tab_test=array();
          foreach($produits as $marque)
            {
               $tab_test[]=array("name" => $marque['name'] );
            }
          $response->setData($tab_test);
          return $response;
            }
        else
        return $this->render('MyAppBundle:Default:liste_produits.html.twig', array('produits' => $produits));

      }
    
     /*
     * Action autocomplete marque produit formulaire de recherche en ajax en respectant maque et catégorie sélectionné
     * @author: Issam <issam@digital-developers.net>
     */
     public function recherche_marqueAction(){
           
        $em =  $this->get('doctrine.orm.entity_manager');

        $request = $this->container->get('request');
        $id_category=0;
        
        if($request->request->get('subcategorie')!='')
          $id_category=$request->request->get('subcategorie');
        else 
          $id_category=$request->request->get('categorie');
        
        $sql="select DISTINCT(p.marque) from products p 
              LEFT JOIN categories c ON c.id=p.category_id    
              where p.marque like '%".$request->request->get('marque')."%'";
        
        if($id_category!=0) 
          $sql.=" AND c.id='".$id_category."'";
        
        if($request->request->get('name')!='') 
          $sql.=" AND p.name like'%".$request->request->get('name')."%'";
        
        $produits = $em->getConnection()
                       ->prepare($sql);
        $produits->execute();
        $produits = $produits->fetchAll();

        
        if($request->query->get('json')==1)
        { 
         $id_category=0;
        
         if($request->query->get('subcategorie')!='')
           $id_category=$request->query->get('subcategorie');
         else 
           $id_category=$request->query->get('categorie');
        
         $sql="select DISTINCT(p.marque) from products p 
              LEFT JOIN categories c ON c.id=p.category_id    
              where p.marque like '%".$request->query->get('marque')."%'";
        
         if($id_category!=0) 
           $sql.=" AND c.id='".$id_category."'";
        
         if($request->query->get('name')!='') 
           $sql.=" AND p.name like'%".$request->query->get('name')."%'";
        
          $produits = $em->getConnection()
                       ->prepare($sql);
          $produits->execute();
          $produits = $produits->fetchAll();  
          $response = new JsonResponse();
          $tab_test=array();
          foreach($produits as $marque)
            {
               $tab_test[]=array("name" => $marque['marque'] );
            }
          $response->setData($tab_test);
          return $response;
            }
        else
          return $this->render('MyAppBundle:Default:liste_marques.html.twig', array('produits' => $produits));

    }
    
     /*
     * Action Formulaire de recherche principale <<page accueil>>
     * @author: Issam <issam@digital-developers.net>
     */
    public function rechercheAction()
    {
        $form_filter = $this->createForm(new FiltreProduitType()); 
        $em    = $this->get('doctrine.orm.entity_manager');
        $form = $this->createForm(new BeauteSearchType());  
        $request = $this->container->get('request');
        
        if($request->getMethod() == 'GET')
        {
            $form->handleRequest($request);
            $data = $request->get('app_homebundle_beaute_search');
            $listproducts0 = $em->getRepository('MyAppBundle:Products')->findProductsByParametres($data);
            $avis = $em->getRepository('MyAppBundle:Avis')->findavisByParametresfull($data);
        }
        
        $category_name='';
        if($data['categorie'] != '')
          {
            $category=$em->getRepository('MyAppBundle:Categories')->find($data['categorie']);
            $category_name=$category->getName();
          }
        
       $sub_category_name='';
       if($data['sub_categorie'] != '')
          {
            $subcategory=$em->getRepository('MyAppBundle:Categories')->find($data['sub_categorie']);
            $sub_category_name=$subcategory->getName();
            $sub_category_name=explode('(',$sub_category_name);
            $sub_category_name=$sub_category_name[0];
          }
        
        $texte_nom_produit=$data['product_name'];
        $texte_marque_produit=$data['marque'];
        
        $listproducts=array();
        foreach ($listproducts0 as $products){ 
          $listproducts[]=$products[0];
        }
        $usr= $this->get('security.token_storage')->getToken()->getUser();
        $username_connecte=$usr->getUsername();
        
        if($request->query->getInt('produit')!=1){
        //BEGIN EXPORT CSV PPRUITS+CRITERES
        if($listproducts){
          $fichier = $this->get('kernel')->getRootDir() . '/../web/uploads/csv_critere_'.$username_connecte.'.csv';
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
          $fichier = $this->get('kernel')->getRootDir() . '/../web/uploads/csv_points_forts_'.$username_connecte.'.csv';
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
          $fichier = $this->get('kernel')->getRootDir() . '/../web/uploads/csv_points_faibles_'.$username_connecte.'.csv';
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
        }
        $query = $em->getRepository('MyAppBundle:Products')->findProductsByParametresQuery($data);
        $paginator  = $this->get('knp_paginator');
        $listproducts= $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),20);
        
        $listproducts->setTemplate('MyAppBundle:Default:twitter_bootstrap_v3_pagination_produit.html.twig');
        
        if(($request->query->getInt('produit')==1)&&($request->isXmlHttpRequest())){
          return $this->render('MyAppBundle:Default:recherche_produits_paginate.html.twig', array('listproducts' => $listproducts));
        }elseif($request->isXmlHttpRequest()){ 
          return $this->render('MyAppBundle:Default:recherche.html.twig', array('listproducts' => $listproducts,'category_name' => $category_name,'sub_category_name' => $sub_category_name,'texte_nom_produit' => $texte_nom_produit,'form_filter' => $form_filter->createView(),'texte_marque_produit' => $texte_marque_produit, 'avis' => $avis ));
        }else 
          return $this->render('MyAppBundle:Default:recherche_full.html.twig', array('listproducts' => $listproducts,'category_name' => $category_name,'sub_category_name' => $sub_category_name,'texte_nom_produit' => $texte_nom_produit,'form_filter' => $form_filter->createView(),'texte_marque_produit' => $texte_marque_produit, 'avis' => $avis ));
    }
    
    /*
     * Controlleur de recherche de nombre d'avis en ajax de formulaire de recherche principale
     * @author: Issam <issam@digital-developers.net>
     */ 
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
    
     /*
     * Action Formulaire de recherche filtre produit  <<formulaire de filtrage par Texture, Odeur, Points forts...>>
     * @author: Issam <issam@digital-developers.net>
     */
    public function recherchefiltreAction()
    {
        $em    = $this->get('doctrine.orm.entity_manager');
        $request = $this->container->get('request');
        $data = $request->get('app_homebundle_filtre_produit');
        $data['categorie']=$request->query->get('categoire');
        $data['sub_categorie']=$request->query->get('sub_categorie');
        $data['product_name']=$request->query->get('product_name');
        $data['marque']=$request->query->get('marque');
         $category_name='';
        if($data['categorie'] != '')
          {
            $category=$em->getRepository('MyAppBundle:Categories')->find($data['categorie']);
            $category_name=$category->getName();
          }
           $sub_category_name='';
        if($data['sub_categorie'] != '')
          {
            $subcategory=$em->getRepository('MyAppBundle:Categories')->find($data['sub_categorie']);
            $sub_category_name=$subcategory->getName();
            $sub_category_name=explode('(',$sub_category_name);
            $sub_category_name=$sub_category_name[0];
          }  

        if($request->getMethod() == 'GET')
        {
            $listproducts0 = $em->getRepository('MyAppBundle:Products')->findProductsByParametres($data);
            $avis = $em->getRepository('MyAppBundle:Avis')->findavisByParametresfull($data);
        }
         $listproducts=array();
        //Affichage dump resultat doctrine
        // echo '<pre>';//
        //\Doctrine\Common\Util\Debug::dump($listproducts0);//
        //echo '</pre>';//
        foreach ($listproducts0 as $products){ 
          $listproducts[]=$products[0];
        }
        
        //BEGIN EXPORT CSV PPRUITS+CRITERES
        if($avis){
          $fichier = $this->get('kernel')->getRootDir() . '/../web/uploads/csv_critere.csv';
          $fp = fopen($fichier, 'w');
          $csv_output ="id;name;marque;prix;cont;prix_au_l;notation;url;miniature;gender;critere;comments";
          $csv_output .= "\r\n";
                foreach ($avis as $critere){
                  $csv_output .= $critere->getProduct()->getId().";";
                  $csv_output .= $critere->getProduct()->getName().";";
                  $csv_output .= $critere->getProduct()->getMarque().";";
                  $csv_output .= $critere->getProduct()->getPrix().";";
                  $csv_output .= $critere->getProduct()->getCont().";";
                  $csv_output .= $critere->getProduct()->getPrixAuL().";";
                  $csv_output .= $critere->getProduct()->getNotation().";";
                  $csv_output .= $critere->getProduct()->getUrl().";";
                  $csv_output .= $critere->getProduct()->getMiniature().";";
                  $csv_output .= $critere->getGender().";";
                  $csv_output .= $critere->getCritere().";"; 
                  $csv_output .= $critere->getComments().";"; 
                  $csv_output .= "\r\n";
                }        
         fputs($fp, mb_convert_encoding($csv_output, 'UCS-2LE', 'UTF-8'));
         fclose($fp);       
        }
        
        //BEGIN EXPORT CSV PPRUITS+POINT FORTS
        if($avis){
          $fichier = $this->get('kernel')->getRootDir() . '/../web/uploads/csv_points_forts.csv';
          $fp = fopen($fichier, 'w');
          $csv_output ="id;name;marque;prix;cont;prix_au_l;notation;url;miniature;points_forts";
          $csv_output .= "\r\n";
                foreach ($avis as $critere){
                  $csv_output .= $critere->getProduct()->getId().";";
                  $csv_output .= $critere->getProduct()->getName().";";
                  $csv_output .= $critere->getProduct()->getMarque().";";
                  $csv_output .= $critere->getProduct()->getPrix().";";
                  $csv_output .= $critere->getProduct()->getCont().";";
                  $csv_output .= $critere->getProduct()->getPrixAuL().";";
                  $csv_output .= $critere->getProduct()->getNotation().";";
                  $csv_output .= $critere->getProduct()->getUrl().";";
                  $csv_output .= $critere->getProduct()->getMiniature().";";
                  $csv_output .= $critere->getPointsForts().";";
                  $csv_output .= "\r\n";
                }  
         fputs($fp, mb_convert_encoding($csv_output, 'UCS-2LE', 'UTF-8'));
         fclose($fp);       
        }
        //BEGIN EXPORT CSV PPRUITS+POINT FAIBLES
        if($avis){
          $fichier = $this->get('kernel')->getRootDir() . '/../web/uploads/csv_points_faibles.csv';
          $fp = fopen($fichier, 'w');
          $csv_output ="id;name;marque;prix;cont;prix_au_l;notation;url;miniature;points_faibles";
          $csv_output .= "\r\n";
                foreach ($avis as $critere){
                  $csv_output .= $critere->getProduct()->getId().";";
                  $csv_output .= $critere->getProduct()->getName().";";
                  $csv_output .= $critere->getProduct()->getMarque().";";
                  $csv_output .= $critere->getProduct()->getPrix().";";
                  $csv_output .= $critere->getProduct()->getCont().";";
                  $csv_output .= $critere->getProduct()->getPrixAuL().";";
                  $csv_output .= $critere->getProduct()->getNotation().";";
                  $csv_output .= $critere->getProduct()->getUrl().";";
                  $csv_output .= $critere->getProduct()->getMiniature().";";
                  $csv_output .= $critere->getPointsFaibles().";";
                  $csv_output .= "\r\n";
                }   
         fputs($fp, mb_convert_encoding($csv_output, 'UCS-2LE', 'UTF-8'));
         fclose($fp);       
        }
        
        return $this->render('MyAppBundle:Default:recherche_filtre_ajax.html.twig', array('listproducts' => $listproducts, 'avis' => $avis,'category_name' => $category_name, 'sub_category_name' => $sub_category_name));
   }
   
     /*
     * Controlleur de la page liste des marques lien << voir toutes les marques >>
     * @author: Issam <issam@digital-developers.net>
     */  
   public function all_marqueAction(){
           
        $em =  $this->get('doctrine.orm.entity_manager');

        $sql="select DISTINCT(p.marque) from products p ";

        $produits = $em->getConnection()
                       ->prepare($sql);
        $produits->execute();
        $produits = $produits->fetchAll();
            
        return $this->render('MyAppBundle:Default:liste_marques_full.html.twig', array('produits' => $produits));

    }
    
     /*
     * Controlleur de la page liste des produits lien << voir tous les produits >>
     * @author: Issam <issam@digital-developers.net>
     */
    public function listProduitsAction(Request $request)
    {
     
     $em    = $this->get('doctrine.orm.entity_manager');
     $dql   = "SELECT p FROM MyAppBundle:Products p";
     $query = $em->createQuery($dql);

     $paginator  = $this->get('knp_paginator');
     
     $pagination = $paginator->paginate(
        $query,
        $request->query->getInt('page', 1),20);
     
     $pagination->setTemplate('MyAppBundle:Default:twitter_bootstrap_v3_pagination.html.twig');
    
     if($request->isXmlHttpRequest())
          return $this->render('MyAppBundle:Default:list-ajax.html.twig', array('pagination' => $pagination));
     else 
         return $this->render('MyAppBundle:Default:list.html.twig', array('pagination' => $pagination));
    }
   
}
