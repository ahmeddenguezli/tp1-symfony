#[Route('/articles', name: 'app_articles')]
public function index(): Response
{
    $articles = [
        ['titre' => 'Introduction à Symfony',    'auteur' => 'Alice',  'publie' => true],
        ['titre' => 'Les bases de Twig',          'auteur' => 'Bob',    'publie' => true],
        ['titre' => 'Doctrine ORM en pratique',   'auteur' => 'Claire', 'publie' => false],
        ['titre' => 'Sécurité avec Symfony',      'auteur' => 'David',  'publie' => true],
        ['titre' => 'API Platform (brouillon)',   'auteur' => 'Eve',    'publie' => false],
    ];

    return $this->render('articles/index.html.twig', [
        'articles' => $articles,
    ]);
    #[Route('/articles/{id}', name: 'app_article_detail', requirements: ['id' => '\d+'])]
    public function detail(Article $article): Response
    {
    return $this->render('articles/detail.html.twig', [
        'article' => $article,
    ]);
}
}