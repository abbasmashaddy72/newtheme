@wire('debounce.200ms')
<x-form-input name="title" label="Title" type="text" />

<x-form-textarea name="excerpt" label="Excerpt" required />

<x-form-textarea name="description" label="Description" required />
@endwire
