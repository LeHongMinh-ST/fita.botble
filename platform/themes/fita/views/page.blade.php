<h3>{{ $page->name }}</h3>
{!! Theme::breadcrumb()->render() !!}
{!! apply_filters(PAGE_FILTER_FRONT_PAGE_CONTENT, BaseHelper::clean($page->content), $page) !!}
