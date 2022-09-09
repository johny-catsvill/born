<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FaqQuestion extends Model
{
    use HasFactory;

    public function seoPageId() {
        return $this->belongsToMany(SeoPage::class, 'faq_seo_pages', 'faq_question_id', 'page_id');
    }

    public function pageId() {
        return $this->belongsToMany(Page::class, 'faq_pages', 'faq_question_id', 'page_id');
    }

    public function save(array $options = [])
    {
        parent::save($options);
        $this->seoPageId()->sync(request()->seo_page_id);
        $this->pageId()->sync(request()->page_id);
    }
}
