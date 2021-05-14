{foreach $posts as $post}
<div class="col-sm-6 col-lg-4">
    <div class="exceprt">
        <a title="{$post['name']}" class="exceprt__image"><img
                    src="{asset($post['image'])}" alt="{$post['name']}"></a>
        <h3 class="exceprt__title">
            <a href="{$config->root_url}/blog/{$post['url']}">{$post['name']}</a>
        </h3>
		<div class="exceprt__text">{$post['annotation']}</div>
        <div class="exceprt__date">{$post['date']}</div>
    </div>
</div>
{/foreach}