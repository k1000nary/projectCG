<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Commentaire;
use App\Form\CommentaireType;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\FaqRepository;
use Doctrine\Common\Persistence\ObjectManager;
use http\Env\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig', [

        ]);
    }
    /**
     * @Route("/blog", name="blog")
     */
    public function index(ArticleRepository $repository,
                          CategorieRepository $category,
                          Request $request, FaqRepository $faq)
    {
        $repo = $repository->findBy(
            ['publication' => true],
            ['date' => 'DESC']
        );
        /* @var $paginator \Knp\Component\Pager\Paginator */
        $paginator = $this->get('knp_paginator');
        $articles = $paginator->paginate(
          $repo, $request->query->getInt('page', 1), 4
        );
        $categories = $category->findAll();
        $faqs = $faq->findBy([], ['id'=>'DESC'], 3,rand(0,5));
        return $this->render('blog/index.html.twig', [
            'articles' => $articles,
            'cat'=> $categories,
            'faqs'=> $faqs,
        ]);
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show(Article $article, Request $request,
                         ArticleRepository $repo, FaqRepository $faq,
                         ObjectManager $manager, CategorieRepository $category)
    {
        $categories = $category->findAll();
        $post = $repo->findBy(
            ['auteur'=>$article->getAuteur()],
            ['date'=>'DESC'],
            3,rand(0,5)
        );
        $faqs = $faq->findBy([], ['id'=>'DESC'], 3,rand(0,5));
        $comment = new Commentaire();
        $form = $this->createForm(CommentaireType::class, $comment);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $comment->setDate(new \DateTime())
                ->setArticle($article)
                ->setPublication(false);
            $manager->persist($comment);
            $manager->flush();
            $this->addFlash('success', 'Votre commentaire à bien été enregistré.');
            return $this->redirectToRoute('blog_show', [
                'slug'=>$article->getSlug(),
            ]);
        }
        return $this->render('blog/show.html.twig', [
            'article' => $article,
            'post'=>$post,
            'formComment'=>$form->createView(),
            'cat'=> $categories,
            'faqs'=> $faqs,
        ]);
    }

    /**
     * @Route("/blog/categorie/{slug}", name="show_cat")
     */
    public function showCat(Categorie $categorie, ArticleRepository $repository,
                            CategorieRepository $category, Request $request,
                            FaqRepository $faq)
    {
        $repo = $repository->findByCatagories($categorie->getId());
        /* @var $paginator \Knp\Component\Pager\Paginator */
        $paginator = $this->get('knp_paginator');
        $articles = $paginator->paginate(
            $repo, $request->query->getInt('page', 1), 4
        );
        $categories = $category->findAll();
        $faqs = $faq->findBy([], ['id'=>'DESC'], 3,rand(0,5));
        return $this->render('blog/categorie.html.twig', [
            'articles' => $articles,
            'categorie'=> $categorie,
            'cat'=> $categories,
            'faqs'=> $faqs,
        ]);
    }

    /**
     * Creates a new ActionItem entity.
     *
     * @Route("blog/search/{titre}", name="ajax_search")
     * @Method("GET")
     */
    public function searchAction(Request $request, FaqRepository $question)
    {
        $requestString = $request->get('q');
        $entities =  $question->findFaqByString($requestString);
        if(!$entities) {
            $result['entities']['error'] = "Aucun résultat trouver";
        } else {
            $result['entities'] = $this->getRealEntities($entities);
        }
        return new \Symfony\Component\HttpFoundation\Response(json_encode($result));
    }
    public function getRealEntities($entities){
        foreach ($entities as $entity){
            $realEntities[$entity->getId()] = $entity->getTitre();
        }
        return $realEntities;
    }
    /**
     * Creates a new ActionItem entity.
     *
     * @Route("blog/send/{name}", name="send_mail")
     * @Method("GET")
     */
    public function send($name, \Swift_Mailer $mailer)
    {
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('send@example.com')
            ->setTo('rochel.webmaster@b2bbusiness.fr')
            ->setBody(
                'Bonjour test mail',
                'text/html'
            )
            /*
             * If you also want to include a plaintext version of the message
            ->addPart(
                $this->renderView(
                    'emails/registration.txt.twig',
                    array('name' => $name)
                ),
                'text/plain'
            )
            */
        ;

        $mailer->send($message);

        return $this->redirectToRoute('home');
    }                   
}
