<a data-fancybox data-type="ajax" data-src="{{ route('department-item.edit', $item->id) }}" href="javascript:;"
   class="btn btn-info"><i class="fa fa-edit"></i> {{ trans('core/base::tables.edit') }}</a>
<a data-fancybox data-type="ajax" data-src="{{ route('department-item.destroy', $item->id) }}" href="javascript:;"
   class="btn btn-danger"><i class="fa fa-trash"></i> {{ trans('core/base::tables.delete_entry') }}</a>
