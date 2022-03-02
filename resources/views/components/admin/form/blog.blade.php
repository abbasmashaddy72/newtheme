@wire('debounce.200ms')
<x-form-select name="service_id" label="Service Name" :options="Helper::getKeyValues('Service', 'title', 'id')" />

<x-form-input name="title" label="Title" type="text" />

<x-form-input name="tags" label="Tags" type="text" />

<x-form-textarea name="excerpt" label="Excerpt" required />

<x-form-textarea name="description" label="Description" required />
@endwire
