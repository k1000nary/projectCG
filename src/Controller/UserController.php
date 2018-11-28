<?php

namespace App\Controller;

use App\Entity\Article;
use App\Entity\Categorie;
use App\Entity\Commentaire;
use App\Entity\Faq;
use App\Entity\User;
use App\Form\ArticleEditType;
use App\Form\ArticleType;
use App\Form\CategorieType;
use App\Form\FaqType;
use App\Form\UserType;
use App\Repository\ArticleRepository;
use App\Repository\CategorieRepository;
use App\Repository\CommentaireRepository;
use App\Repository\FaqRepository;
use App\Repository\UserRepository;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\DBAL\Types\BooleanType;
use Entity\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends Controller
{
    /**
     * @Route("/user/login", name="login")
     */
    public function index(Request $request, AuthenticationUtils $authenticationUtils)
    {
        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        //
        $form = $this->get('form.factory')
            ->createNamedBuilder(null)
            ->add('_username', null, ['label' => 'Email'])
            ->add('_password', PasswordType::class, ['label' => 'Mot de passe'])
            ->add('ok', SubmitType::class, ['label' => 'Se connecter'])
            ->getForm();
        return $this->render('user/index.html.twig', [
            'mainNavLogin' => true,
            'title' => 'Connexion',
            'form' => $form->createView(),
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }

    /**
     * @Route("/logout", name="logout")
     */

    public function logout()
    {

    }

    /**
     * @Route("/user/dashboard", name="user_dashboard")
     */
    public function dashboard(ArticleRepository $article, CommentaireRepository $comment,
                              CategorieRepository $category, UserRepository $user,
                              FaqRepository $faq)
    {
        $articles = $article->findAll();
        $commentaires = $comment->findAll();
        $categories = $category->findAll();
        $users = $user->findAll();
        $faqs = $faq->findAll();
        return $this->render('user/dashboard.html.twig', [
                'articles'=>$articles,
                'commentaires'=>$commentaires,
                'categories'=>$categories,
                'users'=>$users,
                'faqs'=>$faqs,
                'homeMode'=>true,
        ]);
    }


    /**
     * @Route("/user/dashboard/article", name="user_dashboard_post")
     */
    public function articleList(ArticleRepository $article, CommentaireRepository $comment,
                              CategorieRepository $category, UserRepository $user,
                              FaqRepository $faq, Request $request)
    {
        $repo = $article->findBy([], ['date'=>'DESC']);
        $paginator = $this->get('knp_paginator');
        $articles = $paginator->paginate(
            $repo, $request->query->getInt('page', 1), 25
        );
        $commentaires = $comment->findAll();
        $categories = $category->findAll();
        $users = $user->findAll();
        $faqs = $faq->findAll();
        return $this->render('user/dashboard.html.twig', [
                'articles'=>$articles,
                'commentaires'=>$commentaires,
                'categories'=>$categories,
                'users'=>$users,
                'faqs'=>$faqs,
                'articleMode'=>true,
        ]);
    }

    /**
     * @Route("/user/dashboard/article/{id}/edit", name="dashboard_edit_post")
     */
    public function articleEdit(Article $article, CommentaireRepository $comment,
                              CategorieRepository $category, UserRepository $user,
                                Request $request, ObjectManager $manager,
                              FaqRepository $faq)
    {
        $form = $this->createForm(ArticleEditType::class, $article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            /*
            $file = $article->getImage()->getUrl();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $fileName);
            $article->getImage()->setUrl($fileName);
            $article->setAuteur($this->getUser()->getFullname());
            */
            $article->setDateEdition(new \DateTime());
            foreach($form->get('categories')->getData() as $a)
            {
                if(!$article->getCategories()->contains($a))
                {
                    // On ajoute cet acteur
                    $article->addCategory($a);
                }
            }
            foreach($article->getCategories() as $a)
            {
                if(!$form->get('categories')->getData()->contains($a))
                {
                    // On ajoute cet acteur
                    $article->removeCategory($a);
                }
            }
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('user_post_show', [
                'id'=>$article->getId(),
            ]);

        }
        return $this->render('user/dashboard.html.twig', [
            'form' => $form->createView(),
            'editArticle' => true,
        ]);
    }

    /**
     * @Route("/user/dashboard/delete/{id}", name="dashboard_delete_post")
     */
    public function deletePost(Article $article, ObjectManager $manager)
    {
        $manager->remove($article);
        $manager->flush();
        $this->addFlash('success', 'L\' article a bien été supprimée.  ');
        return $this->redirectToRoute('user_dashboard_post');
    }

    /**
     * @Route("/user/dashboard/commentaire", name="user_dashboard_comment")
     */
    public function commentaireList(ArticleRepository $article, CommentaireRepository $comment,
                              CategorieRepository $category, UserRepository $user,
                              FaqRepository $faq)
    {
        $articles = $article->findAll();
        $commentaires = $comment->findBy(array(), array('date' => 'DESC'));
        $categories = $category->findAll();
        $users = $user->findAll();
        $faqs = $faq->findAll();
        return $this->render('user/dashboard.html.twig', [
                'articles'=>$articles,
                'commentaires'=>$commentaires,
                'categories'=>$categories,
                'users'=>$users,
                'faqs'=>$faqs,
                'commentaireMode'=>true,
        ]);
    }

    /**
     * @Route("/user/dashboard/commentaire/check/{id}", name="user_dashboard_comment_check")
     */
    public function commentaireCheck(Commentaire $comment, ObjectManager $manager)
    {
        $comment->setPublication(true);
        $manager->persist($comment);
        $manager->flush();
        return $this->redirectToRoute('user_dashboard_comment');
    }

    /**
     * @Route("/user/dashboard/commentaire/delete/{id}", name="user_dashboard_comment_delete")
     */
    public function commentaireDelete(Commentaire $comment, ObjectManager $manager)
    {
        $comment->setPublication(false);
        $manager->persist($comment);
        $manager->flush();
        return $this->redirectToRoute('user_dashboard_comment');
    }

    /**
     * @Route("/user/dashboard/category/new", name="user_cat_new")
     * @Route("/user/dashboard/category/edit/{id}", name="user_cat_edit")
     */
    public function catForm(Categorie $cat = null, Request $request, ObjectManager $manager, CategorieRepository $repository)
    {
        if(!$cat){
            $cat = new Categorie();
        }
        $form = $this->createForm(CategorieType::class, $cat);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $manager->persist($cat);
            $manager->flush();
            $this->addFlash('success', 'La catégorie à bien été enregistrée.  ');
            return $this->redirectToRoute('user_cat_edit', [
                'id'=>$cat->getId(),
            ]);

        }
        $categories = $repository->findAll();
        return $this->render('user/dashboard.html.twig', [
            'form' => $form->createView(),
            'editMode' => $cat->getId()!== null,
            'categories'=>$categories,
            'catMode'=>true,
        ]);
    }

    /**
     * @Route("/user/dashboard/faq/new", name="user_faq_new")
     * @Route("/user/dashboard/faq/edit/{id}", name="user_faq_edit")
     */
    public function faq(Faq $faq = null, Request $request, ObjectManager $manager, FaqRepository $repo)
    {
        if(!$faq){
            $faq = new Faq();
        }
        $form = $this->createForm(FaqType::class, $faq);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            if(!$faq->getId()) {
                $faq->setCreatedAt(new \DateTime());
            }
            $manager->persist($faq);
            $manager->flush();
            $this->addFlash('success', 'La question / réponse à bien été enregistré.  ');
            return $this->redirectToRoute('user_faq_edit', [
                'id'=>$faq->getId(),
            ]);

        }
        $faqs = $repo->findAll();
        return $this->render('user/dashboard.html.twig', [
            'form' => $form->createView(),
            'editMode' => $faq->getId()!== null,
            'faqs'=>$faqs,
            'faqMode'=>true,
        ]);
    }

    /**
     * @Route("/user/faq/delete/{id}", name="user_faq_delete")
     */
    public function delFaq(Faq $faq, ObjectManager $manager)
    {
        $manager->remove($faq);
        $manager->flush();
        $this->addFlash('success', 'La question / réponse à bien été supprimée.  ');
        return $this->redirectToRoute('user_faq_new');
    }

    /**
     * @Route("/user/dashboard/user", name="user_dashboard_user")
     */
    public function register(Request $request, UserPasswordEncoderInterface $passwordEncoder, UserRepository $repository) {
        // 1) build the form
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // 3) Encode the password (you could also do this via Doctrine listener)
            $password = $passwordEncoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($password);
            //on active par défaut
            $user->setIsActive(true);
            // $user->addRole("ROLE_ADMIN");
            // 4) save the User!
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($user);
            $entityManager->flush();
            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user
            $this->addFlash('success', 'Votre compte à bien été enregistré.');
            return $this->redirectToRoute('login');
        }
        $utilisateurs = $repository->findAll();
        return $this->render('user/dashboard.html.twig', [
            'form' => $form->createView(),
            'mainNavRegistration' => true,
            'users' => $utilisateurs
        ]);
    }

    /**
     * @Route("/user/post", name="user_post")
     */
    public function showAll(ArticleRepository $article, Request $request, CategorieRepository $category)
    {
        $repo = $article->findBy(['auteur' => $this->getUser()->getFullname(), 'publication'=>true], ['date' => 'DESC']);
        /* @var $paginator \Knp\Component\Pager\Paginator */
        $paginator = $this->get('knp_paginator');
        $articles = $paginator->paginate(
            $repo, $request->query->getInt('page', 1), 10
        );
        $categories = $category->findAll();
        return $this->render('user/showAll.html.twig', [
                'articles'=>$articles,
                'cat'=> $categories,
                'auteur'=> $this->getUser(),
        ]);
    }

    /**
     * @Route("/user/post/show/{id}", name="user_post_show")
     */
    public function show(Article $article)
    {

        return $this->render('user/show.html.twig', [
                'article'=>$article,
        ]);
    }

    /**
     * @Route("/user/post/delete/{id}", name="user_post_delete")
     */
    public function delete(Article $article, ObjectManager $manager)
    {
        $article->setPublication(false);
        $manager->persist($article);
        $manager->flush();
        return $this->redirectToRoute('user_post');
    }

    /**
     * @Route("/user/post/new", name="user_post_new")
     *
     */
    public function newForm(Request $request, ObjectManager $manager, CategorieRepository $cat)
    {
        $article = new Article();
        $form = $this->createForm(ArticleType::class, $article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $article->setDate(new \DateTime());
            $file = $article->getImage()->getUrl();
            $fileName = md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $fileName);
            $article->getImage()->setUrl($fileName);
            $article->setAuteur($this->getUser()->getFullname());
            foreach($form->get('categories')->getData() as $a)
            {
                if(!$article->getCategories()->contains($a))
                {
                    // On ajoute cette catégorie
                    $article->addCategory($a);
                }
            }
            foreach($article->getCategories() as $a)
            {
                if(!$form->get('categories')->getData()->contains($a))
                {
                    // On ajoute cet acteur
                    $article->removeCategory($a);
                }
            }
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('user_post_show', [
                'id'=>$article->getId(),
            ]);

        }
        return $this->render('user/form.html.twig', [
            'form' => $form->createView(),
            'editMode' => $article->getId()!== null,
        ]);
    }

    /**
     * @Route("/user/post/edit/{id}", name="user_post_edit")
     *
     */
    public function editForm(Article $article, Request $request, ObjectManager $manager, CategorieRepository $cat)
    {
        $form = $this->createForm(ArticleEditType::class, $article);
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $article->setDateEdition(new \DateTime());
            foreach($form->get('categories')->getData() as $a)
            {
                if(!$article->getCategories()->contains($a))
                {
                    // On ajoute cet acteur
                    $article->addCategory($a);
                }
            }
            foreach($article->getCategories() as $a)
            {
                if(!$form->get('categories')->getData()->contains($a))
                {
                    // On ajoute cet acteur
                    $article->removeCategory($a);
                }
            }
            $manager->persist($article);
            $manager->flush();
            return $this->redirectToRoute('user_post_show', [
                'id'=>$article->getId(),
            ]);

        }
        return $this->render('user/form.html.twig', [
            'form' => $form->createView(),
            'editMode' => $article->getId()!== null,
        ]);
    }
}
