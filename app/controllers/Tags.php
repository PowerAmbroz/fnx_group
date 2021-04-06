<?php


class Tags extends Controller
{
    /**
     * @var mixed
     */
    private $tags;

    public function __construct()
    {
        $this->tags = $this->model('Tag');
    }

    public function index()
    {
        $getAllTags = $this->tags->getAllTags();

        foreach ($getAllTags as $tags) {
            $countArticles = $this->tags->countArticles($tags->id);
        }

        $this->view(
            'tag/index',
            [
                'allTags' => $countArticles
            ]
        );
    }

    public function tagArticle($tag_name)
    {
        $tagsRelatedArticle = $this->tags->getTaggedArticles($tag_name);
        $this->view(
            'tag/articles_related',
            [
                'relatedArticles' => $tagsRelatedArticle
            ]
        );
    }
}