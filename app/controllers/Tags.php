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
        echo "Tag: ";

        $this->view('tag/index');
    }

    public function tagArticle($tag_name)
    {

        echo "Tag: ".$tag_name;
        $tagsRelatedArticle = $this->tags->getTaggedArticles($tag_name);

//        var_dump($tagsRelatedArticle);die;
        $this->view('tag/articles_related',[
            'relatedArticles' => $tagsRelatedArticle
        ]);
    }
}