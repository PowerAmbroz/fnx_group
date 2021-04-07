<?php


class Tags extends Controller
{
    /**
     * @var mixed
     */
    private $tagsModel;

    public function __construct()
    {
        $this->tagsModel = $this->model('Tag');
    }

    public function index(): array
    {
        $getAllTags = $this->tagsModel->getAllTags();

        foreach ($getAllTags as $tags) {
            $countArticles = $this->tagsModel->countArticles($tags->id);
        }

        $this->view(
            'tag/index',
            [
                'allTags' => $countArticles
            ]
        );
    }

    public function tagArticle(string $tag_name): array
    {
        $tagsRelatedArticle = $this->tagsModel->getTaggedArticles($tag_name);
        $this->view(
            'tag/articles_related',
            [
                'relatedArticles' => $tagsRelatedArticle
            ]
        );
    }
}