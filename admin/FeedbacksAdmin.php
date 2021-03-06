<?php

namespace Axora;

use App\Api\Axora;

class FeedbacksAdmin extends Axora
{


    public function fetch()
    {
        $filter = array();
        $filter['page'] = max(1, $this->request->get('page', 'integer'));
        $filter['limit'] = 40;

        // Обработка действий
        if ($this->request->method('post')) {
            // Действия с выбранными
            $ids = $this->request->post('check');
            if (!empty($ids)) {
                switch ($this->request->post('action')) {
                case 'delete':
                {
                    foreach ($ids as $id) {
                        $this->feedbacks->delete_feedback($id);
                    }
                    break;
                }
                case 'read':
                    {
                        $this->feedbacks->markAsRead($ids);
                        break;
                    }


            }
            }
        }

        // Поиск
        $keyword = $this->request->get('keyword', 'string');
        if (!empty($keyword)) {
            $filter['keyword'] = $keyword;
            $this->design->assign('keyword', $keyword);
        }

        $feedbacks_count = $this->feedbacks->count_feedbacks($filter);
        // Показать все страницы сразу
        if ($this->request->get('page') == 'all') {
            $filter['limit'] = $feedbacks_count;
        }

        $feedbacks = $this->feedbacks->get_feedbacks($filter, true);

        $new_comments_counter = $this->comments->count_comments(array('approved'=>0));
        $this->design->assign("new_comments_counter", $new_comments_counter);

        $new_feedback_counter = $this->feedbacks->count_not_read();
        $this->design->assign("new_feedback_counter", $new_feedback_counter);

        $this->design->assign('pages_count', ceil($feedbacks_count/$filter['limit']));
        $this->design->assign('current_page', $filter['page']);

        $this->design->assign('feedbacks', $feedbacks);
        $this->design->assign('feedbacks_count', $feedbacks_count);

        return $this->design->fetch('feedbacks.tpl');
    }
}
